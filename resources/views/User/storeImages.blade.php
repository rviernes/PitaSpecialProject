<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Store Images</title>
</head>
<body>
	@if($errors->any())
    <div class="alert alert-danger">
           <ul>
           @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
           @endforeach
           </ul>
        </div>
    @endif
    @if(session()->has('success'))
     <div class="alert alert-success">
     {{ session()->get('success') }}
     </div>
    @endif
    <br>
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
		<div class="form-group" align="center">
			<br><br>
			<input type="submit" name="store_image" class="btn btn-primary" value="Save" />
		</div>
	</form>
</body>
</html>