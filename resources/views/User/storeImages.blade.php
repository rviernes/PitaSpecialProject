@extends('layouts.userapp')

@section('content')

@include('sweet::alert')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>INSERT IMAGES</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('add.photos') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                            <div class="row">
                            <label class="col-md-4" align="right">Image Name: </label>
                            <div class="col-md-8">
                                <input type="text" name="image_name" class="form-control" />
                            </div>
                            </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-4" align="right">Select Image for #1: </label>
                                    <div class="col-md-8">
                                        <input type="file" name="user_image" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="text-align="center">
                                <br><br><br>
                                <input type="submit" name="store_image" class="btn btn-primary" value="Save" />
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection