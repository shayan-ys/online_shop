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
						<h2>ثبت نام</h2>
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
				<div class="box">
					<div class="register-form">
						<form class="" action="#">
							<div class="col-xs-12">
								<label>نام</label>
								<input type="text" />
							</div>
							<div class="col-xs-12">
								<label>نام خانوادگی</label>
								<input type="text" />
							</div>
							<div class="col-xs-12">
								<label>ایمیل</label>
								<input type="text" />
							</div>
							<div class="col-xs-12">
								<label>رمز عبور</label>
								<input type="password" />
							</div>
							<div class="col-xs-12">
								<label>تکرار رمز عبور</label>
								<input type="password" />
							</div>
							<div class="col-xs-12">
								<label>شماره تلفن همراه</label>
								<input type="text" />
							</div>
							<div class="col-xs-12 mp20" style="text-align:center;">
								<center>
									<div class="g-recaptcha" data-sitekey="6Lc1hRATAAAAADTEWZLed_CT36zRn9isavywY4nz"></div>
								</center>
							</div>
							<div class="col-xs-12">
								<label>
									<input type="checkbox" name="nl" id="nl" value="1" /> عضویت در خبرنامه فروشگاه
								</label>
							</div>
							<div class="col-xs-12">
								<input type="submit" value="ایجاد حساب کاربری" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'footer.php'; ?>
<?php include 'end.php'; ?>
