<?php $path_to_root = "../" ?>
<?php require $path_to_root.'begin.php'; ?>
<?php include $path_to_root.'header.php'; ?>
<script src='https://www.google.com/recaptcha/api.js?hl=fa'></script>
<section id="one">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<form class="form-horizontal">
	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">نام: </label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="inputEmail3" value="نگار">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">نام خانوادگی: </label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="inputPassword3" value="بیاتی">
	    </div>
	  </div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">آدرس: </label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="inputEmail3" value="negar=@email.com">
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">تلفن: </label>
			<div class="col-sm-10">
				<input type="phone" class="form-control" id="inputEmail3" value="09107600000">
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">رمز عبور: </label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="inputEmail3" value="12345678">
			</div>
		</div>


		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">هشدار</h4>
		      </div>
		      <div class="modal-body">
		      آیا مطمئن هستید که میخواهید تغییرات را ثیت کنید؟
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">خیر</button>
		        <button type="button" class="btn btn-primary">بلی </button>
		      </div>
		    </div>
		  </div>
		</div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">

	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	  ثبت تغییرات
	</button>
	    </div>
	  </div>
	</form>
			</div>

		</div>
	</div>
</section>
<?php include $path_to_root.'footer.php'; ?>
<?php require $path_to_root.'end.php'; ?>
