<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
use App\Models\User_accounts;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Hash;
use Doctrine\DBAL\Schema\Index;
use Doctrine\DBAL\Types\StringType;
use UxWeb\SweetAlert\SweetAlert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Images;
use Image;
use Illuminate\Support\Facades\Response;

class MainController extends Controller
{
    function showTTL() {
        return view('User.throughTheLens');
    }

    function showHome() {
        $images = Images::select('user_image')->where('id',1)->first();
        $images2 = Images::select('user_image')->where('id',2)->first();
        
        // dd($images); die();
        return view('User.homepage', compact('images','images2'));
    }

    function storeImagesPage() {
        return view('User.storeImages');
    }

    function insert_image(Request $request){
        $request->validate([
            'image_name' => 'required',
            'user_image' => 'required | image | max:2048'
        ]);

        $images = new Images;
        $images->image_name = $request->input('image_name');

        if($request->hasfile('user_image')){
            $file = $request->file('user_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().' '.$extension;
            $file->move('uploads/pictures/', $filename);
            $images->user_image = $filename;
        }

        $images->save();
         
        alert()->success('Image Successfully uploaded');
        return redirect('/store_images');
    }

    function fetch_image($image_id){
     $image = Images::where('id', $image_id)->orderBy('id', 'DESC');

     $image_file = Image::make($image->user_image);

     $response = Response::make($image_file->encode('jpeg'));

     $response->header('Content-Type', 'image/jpeg');

     return $response;
    }
}
