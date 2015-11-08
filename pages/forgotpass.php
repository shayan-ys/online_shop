<?php $path_to_root = "../" ?>
<?php require $path_to_root.'begin.php'; ?>
<?php include $path_to_root.'header.php'; ?>

<section id="one">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="row">
					<ol class="breadcrumb">
						<li>
							<a href="<?php echo $path_to_root; ?>index.php">صفحه اصلی</a>
						</li>
						<li class="active">
							<a href="<?php echo $path_to_root; ?>pages/forgotpass.php">
								بازیابی رمزعبور
							</a>
						</li>
					</ol>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="row">
					<div class="title-page">
						<h2>بازیابی رمزعبور</h2>
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
						<form action="">
							<div class="col-xs-12">
								<label>ایمیل</label>
								<input type="text" name="email" id="email" error="لطفا ایمیل را وارد کنید" check="email" check_error="ایمیل معتبر نمی باشد" />
							</div>
							<div class="col-xs-12">
								<div class="fsc">
									<label>کد امنیتی :</label>
									<div class="capcha">
										<input type="text" name="cap" id="cap" maxlength="5" error="لطفا کد امنیتی را وارد کنید" check="cap" check_error="لطفا کد امنیتی را صحیح وارد کنید" />
										<a href="javascript:void(0);" onclick="" id="cap_code">
											<img src="" />
										</a>
									</div>
								</div>
							</div>
							<div class="col-xs-12">
								<input type="submit" value="ورود به حساب کاربری" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include $path_to_root.'footer.php'; ?>
<?php require $path_to_root.'end.php'; ?>
