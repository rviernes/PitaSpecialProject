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
        $data = Images::latest()->paginate(5);
        return view('User.homepage', compact('data'));
    }

    function storeImagesPage() {
        return view('User.storeImages');
    }

    function insert_image(Request $request){
        $request->validate([
            'image_name' => 'required',
            'user_image' => 'required | image | max:2048'
        ]);

         $image_file = $request->user_image;

         $image = Image::make($image_file);

         Response::make($image->encode('jpeg'));

         $form_data = array(
          'image_name'  => $request->image_name,
          'user_image' => $image
         );

         Images::create($form_data);

        return redirect()->back()->with('success', 'Image store in database successfully');
    }

    function fetch_image($image_id){
     $image = Images::findOrFail($image_id);

     $image_file = Image::make($image->user_image);

     $response = Response::make($image_file->encode('jpeg'));

     $response->header('Content-Type', 'image/jpeg');

     return $response;
    }
}
