@extends('layouts.site')

@section('content')

<div class="jumbotron">
    <div class="container" style="margin-top: 30px;">
      <h2>A form of adding new records</h2>
      <p>Try to add a new book</p>
    </div>
  </div>

<div class="container">
	<b style="color:red;"><?php if(isset($error)){echo $error;} ?></b>
</div>
  <div class="container">
 			<form method="POST" name="upload" enctype="multipart/form-data" action="{{route('articleStore')}}">
 			<div class="row">	
  				<div class="col-md-6" >
  					<label for="author">Author</label>
  					<input type="text" class="form-control" id="author" name="author" value="<?php if(isset($_POST['author'])){
  						echo $_POST['author'];
  						} ?>">
  				</div>
  				<div class="col-md-6">
  					<label for="name">Name of a book</label>
  					<input type="text" class="form-control" id="name" name="name" value="<?php if(isset($_POST['name'])){
  						echo $_POST['name'];
  						} ?>">
  				</div>
  				<div class="col-md-6" style="margin-top: 10px">
  					<label for="exampleInputFile">Description</label>
  					<textarea class="form-control" name="desc"><?php if(isset($_POST['desc'])){
  						echo $_POST['desc'];
  						}?></textarea> 
  				</div>
  				<div class="col-md-6" style="margin-top: 10px">
  					<label for="count">Pages</label>
  					<input type="text" class="form-control" id="count" name="count" value="<?php if(isset($_POST['count'])){
              echo $_POST['count'];
              } ?>">
  				</div>
  				<div class="col-md-6" style="margin-top: 10px">
  					<label for="image">Image</label>
  					<p>
  						<input type="file" name="image">
  					</p> 
  				</div>
  				<div class="col-md-6" style="margin-top: 40px;">
  					<input type="submit" name="upload" style="width: 160px; height: 40px; background: #4682B4; color: white; font-weight: 600; border-radius: 8px; border-color: 2px solid #ADD8E6; text-align: center; vertical-align: center; padding-top: 4px;" value="Submit">
  				</div>
  				
  			</div>@csrf
  			</form>
  </div>
@endsection
