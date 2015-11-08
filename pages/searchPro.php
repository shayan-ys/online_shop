<?php $path_to_root = "../" ?>
<?php require $path_to_root.'begin.php'; ?>
<?php include $path_to_root.'header.php'; ?>
<section id="one">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<form class="form-horizontal">
					<p> جست و جوی کتاب: </p>
	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">عنوان: </label>
	    <div class="col-sm-10">
	      <input type="email" class="form-control" id="inputEmail3" placeholder="">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">نویسنده: </label>
	    <div class="col-sm-10">
	      <input type="password" class="form-control" id="inputPassword3" placeholder="">
	    </div>
	  </div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">مترجم: </label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="inputEmail3" placeholder="">
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">رده سنی: </label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="inputEmail3" placeholder="">
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">موضوع: </label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="inputEmail3" placeholder="">
			</div>
		</div>



	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">

	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary btn-lg" >
		<a href="found.php">جست و جو</a></button>
	    </div>
	  </div>
	</form>



	<!-- search e laptop -->
<hr>
<p> جست و جوی لپتاپ: </p>

	<form class="form-horizontal">
<div class="form-group">
<label for="inputEmail3" class="col-sm-2 control-label">مدل: </label>
<div class="col-sm-10">
	<input type="email" class="form-control" id="inputEmail3" placeholder="">
</div>
</div>
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label">برند: </label>
<div class="col-sm-10">
	<input type="password" class="form-control" id="inputPassword3" placeholder="">
</div>
</div>

<div class="form-group">
<label for="inputEmail3" class="col-sm-2 control-label">پردازنده: </label>
<div class="col-sm-10">
	<input type="email" class="form-control" id="inputEmail3" placeholder="">
</div>
</div>

<div class="form-group">
<label for="inputEmail3" class="col-sm-2 control-label">حافظه: </label>
<div class="col-sm-10">
	<input type="email" class="form-control" id="inputEmail3" placeholder="">
</div>
</div>






<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" >
<a href="found.php">جست و جو</a></button>
</div>
</div>
</form>




			</div>

		</div>
	</div>
</section>
<?php include $path_to_root.'footer.php'; ?>
<?php require $path_to_root.'end.php'; ?>
