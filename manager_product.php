<?php
$title = "ثبت نام";
			require 'begin.php'; ?>
<?php include 'header.php'; ?>
<script src='https://www.google.com/recaptcha/api.js?hl=fa'></script>
<section id="one">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="row">
					<ol class="breadcrumb">
						<li>
							<a href="index.php">صفحه اصلی</a>
						</li>
						<li class="active">
							<a href="register.php">
								ثبت نام
							</a>
						</li>
					</ol>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="row">
					<div class="title-page">
						<h2>ثبت محصول</h2>
						<div class="btp"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="two">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 col-sm-offset-2 col-md-offset-3 col-lg-offset-4">
				Add new book
					<form class="form-horizontal">
					  <div class="form-group">
					    <label for="name" class="col-sm-2 control-label">نام محصول</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="name" placeholder="نام محصول را اینجا وارد کنید">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword3" class="col-sm-2 control-label">قیمت</label>
					    <div class="col-sm-10">
					      <input type="number" class="form-control" id="inputPassword3" placeholder="قیمت فی">
					    </div>
					  </div>
						<div class="form-group">
					    <label for="num" class="col-sm-2 control-label">تعداد</label>
					    <div class="col-sm-10">
					      <input type="number" class="form-control" id="num" placeholder="تعداد موجودی فعلی">
					    </div>
					  </div>
						<div class="form-group">
					    <label for="num" class="col-sm-2 control-label">تعداد</label>
					    <div class="col-sm-10">
					      <input type="number" class="form-control" id="num" placeholder="تعداد موجودی فعلی">
					    </div>
					  </div>
						<div class="form-group">
					    <label for="num" class="col-sm-2 control-label">تعداد</label>
					    <div class="col-sm-10">
					      <input type="number" class="form-control" id="num" placeholder="تعداد موجودی فعلی">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <div class="checkbox">
					        <label>
					          <input type="checkbox"> Remember me
					        </label>
					      </div>
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-default">Sign in</button>
					    </div>
					  </div>
					</form>
			</div>
		</div>
	</div>
</section>
<?php include 'footer.php'; ?>
<?php include 'end.php'; ?>
