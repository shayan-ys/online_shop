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
					    <label for="num" class="col-sm-2 control-label">+</label>
					    <div class="col-sm-10">
					      <a class="btn btn-primary" onclick="addAttr(this);">افزودن ویژگی انتخابی</a>
					    </div>
					  </div>
						<div id="attrs_fields">
						</div>
						<div class="form-group">
					    <label for="pic" class="col-sm-2 control-label">عکس</label>
					      <input type="file" id="pic" placeholder="عکس">
					  </div>
						<div class="form-group">
					    <label for="num" class="col-sm-2 control-label">+</label>
					    <div class="col-sm-10">
					      <a class="btn btn-warning" onclick="addPic(this);">افزودن عکس</a>
					    </div>
					  </div>
						<div id="img_fields">
						</div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
								<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  ثبت محصول
</button>
					    </div>
					  </div>
					</form>
			</div>
		</div>
	</div>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">پیغام مدیریت</h4>
      </div>
      <div class="modal-body">
        محصول با موفقیت افزوده شد
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
</section>

<script>
	var num =1;
	var numPic=1;
	function addAttr(target) {
		html = '';
		html += "<div class='form-group'>";
		html += "<label><input type='text' placeholder='نام ویژگی "+num+"'></label>";
		html += "<div>";
		html += "<input type='text' class='form-control' placeholder='مقدار را وارد کنید'>";
		html += "</div>";
		html += "</div>";
		$("#attrs_fields").append(html);
		num++;
	}
	function addPic(target) {
		html = '';
		html += "<div class='form-group'>";
		html += '<label for="pic" class="col-sm-3 control-label">عکس '+ numPic +'</label>';
		html += '<input type="file" id="pic" placeholder="عکس">';
		html += "</div>";
		$("#img_fields").append(html);
		numPic++;
	}
</script>

<?php include 'footer.php'; ?>
<?php include 'end.php'; ?>
