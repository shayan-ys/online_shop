<?php $path_to_root = "../"; ?>
<?php require $path_to_root.'begin.php'; ?>
<?php include $path_to_root.'header.php'; ?>

			<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&amp;sensor=false"></script>
<script type="text/javascript">
function gmap(id,lgmap,qgmap,tgmap,cgmap,zoom) {
	var myCenter = new google.maps.LatLng(qgmap,lgmap);
	function initialize() {
		var mapProp = {
			center: myCenter,
			zoom: zoom,
			overviewMapControl: true,
			panControl: true,
			streetViewControl: false,
			zoomControl: false,
			scrollwheel: false,
			mapTypeId:google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById(id),mapProp);
		var marker = new google.maps.Marker({
			position:myCenter,
			title:tgmap
		});
		marker.setMap(map);
		var infowindow = new google.maps.InfoWindow({
			content:cgmap
		});
		google.maps.event.addListener(marker,'click',function() {
			map.setCenter(marker.getPosition());
			infowindow.open(map,marker);
		});
	}
	google.maps.event.addDomListener(window, 'load', initialize);
}
gmap('google_map',51.431888,35.706534,'مرجع تخصصی فروش اینترنتی لپ تاپ','       فروشگاه اینترنتی آترامارت',17);
</script>

<section id="one">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="row">

	<ol class="breadcrumb">

		<li>
			<a href="../index.html">صفحه اصلی</a>
		</li>


			<li class="active">
				<a href="contact.html">

						تماس با ما

				</a>
			</li>





	</ol>

</div>
			</div>
			<div class="col-xs-12">
				<div class="row">
					<div class="title-page">
						<h2>تماس با ما</h2>
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
			<div class="col-xs-12">
				<div class="box">
					<div class="contact">

							<p dir="RTL">
	<strong>تماس با آترا مارت</strong><strong><span dir="LTR">:</span></strong></p>
<p dir="RTL">
	کاربر گرامی امکان&nbsp; دارد سوال شما در قسمت <u><a href="page/FAQ.html"><span style="color:#0000ff;">پرسش های متداول </span></a></u>&nbsp;وجود داشته باشد <span dir="LTR">,</span>جهت تسریع در امور خود و مشتریان لطفا قبل تماس تلفنی و یا پست الکترونیک از وجود نداشتن سوال خود در پرسش های متداول اطمینان حاصل نمایید.</p>
<div>
	تلفن تماس و فکس</div>
<div>
	&nbsp;</div>
<div>
	021-77633019</div>
<p dir="RTL">
	<strong>دفتر مرکزی </strong></p>
<p dir="RTL">
	استان تهران ، شهر تهران ، خیابان طالقانی ، نرسیده به سه راه طالقانی ، کوچه طباطبایی مقدم، پلاک 13 طبقه همکف</p>
<p dir="RTL">
	&nbsp;</p>


					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="three">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="map" id="google_map">

					</div>
				</div>
			</div>
		</div>
	</div>
</section>




<section id="four-e">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="contact-form">
						<h3>فرم تماس با ما</h3>
						<form class="ajax" ajax_method="post" action="http://atramart.com/ajax.php?contact">

							<div class="col-xs-12 col-sm-6">
								<div class="fsc mp15">
					    			<label>نام و نام خانوادگی</label>
					        		<input type="text" name="name" id="name" error="لطفا نام و نام خانوادگی را وارد کنید"  />
					        	</div>
					        </div>
					        <div class="col-xs-12 col-sm-6">
					        	<div class="fsc mp15">
					            	<label>شماره تماس</label>
					            	<input type="tel" name="tell" id="tell" error="لطفا شماره تماس را وارد کنید" check="tell" check_error="لطفا شماره تماس را صحیح وارد کنید"  />
					            </div>
					        </div>
					        <div class="col-xs-12 col-sm-6">
					        	<div class="fsc mp15">
					            	<label>ایمیل</label>
					            	<input type="email" name="email" id="email" error="لطفا ایمیل را وارد کنید" check="email" check_error="لطفا ایمیل را صحیح وارد کنید"  />
					            </div>
					        </div>
					        <div class="col-xs-12 col-sm-6">
					        	<div class="fsc mp15">
						            <label>بخش مربوطه</label>
						            <select tabindex="4" name="catid" id="catid" error="لطفا بخش مربوطه را انتخاب کنید">
										<option value="">انتخاب کنید...</option>

											<option value="1">مدیریت</option>

											<option value="2">سفارشات</option>

											<option value="3">تامین کالا</option>

											<option value="5">پیشنهاد همکاری</option>

											<option value="6">انتقادات و پیشنهادات</option>

											<option value="8">درخواست کد تخفیف</option>

									</select>
					            </div>
					        </div>
					        <div class="col-xs-12">
					        	<div class="fsc mp15">
					        		<label class="cff">پیام شما</label>
					        		<textarea name="note" id="note" error="لطفا پیام را وارد کنید"></textarea>
					        	</div>
					        </div>
					        <div class="col-xs-12 col-sm-6">
					        	<div class="fsc">
						        	<label>کد امنیتی :</label>
						        	<div class="capcha">
						        		<input type="text" name="cap" id="cap" maxlength="5" error="لطفا کد امنیتی را وارد کنید" check="cap" check_error="لطفا کد امنیتی را صحیح وارد کنید" />
						        		<a href="javascript:void(0);" onclick="$(this).find('img').attr('src', '../capa18a.png?t='+Math.random()); return false;" id="cap_code">
											<img src="../cap.png" />
										</a>
						        	</div>
					        	</div>
					        </div>
					        <div class="col-xs-12 col-sm-6">
								<input type="submit" value="ارسال" />
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
