<?php
/**
 * Created by PhpStorm.
 * User: Shayanyousefian
 * Date: 12/12/15
 * Time: 5:19 PM
 */?>

        <!doctype html>
<html>
<head>
  @include('start', $head)
</head>
<body>
@include('header')

<section id="one">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <form class="form-horizontal" method="POST" action="{{ asset('/customers') }}">
          {!! csrf_field() !!}
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">نام: </label>
            <div class="col-sm-10">
              <input type="text" name="name" class="form-control" id="inputEmail3" value="{{ $customer['name'] }}">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">آدرس: </label>
            <div class="col-sm-10">
              <input type="text" name="address" class="form-control" id="inputEmail3" value="{{ $customer['address'] }}">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">تلفن: </label>
            <div class="col-sm-10">
              <input type="phone" name="phone" class="form-control" id="inputEmail3" value="{{ $customer['phone'] }}">
            </div>
          </div>


          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                ذخیره تغییرات
              </button>
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
                  <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">خیر</button>
                  <button type="submit" class="btn btn-primary btn-sm">بلی </button>
                </div>
              </div>
            </div>
          </div>

        </form>
      </div>
      <div class="col-xs-12 center">
        <a class="btn btn-danger btn-lg" href="{{ asset('/user/logout') }}">خروج از حساب کاربری</a>
      </div>

    </div>
  </div>
</section>

<!-- Modal -->
@if(isset($success))
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">پیغام</h4>
      </div>
      <div class="modal-body">
        تغییرات با موفقیت ذخیره شد.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">ادامه</button>
      </div>
    </div>
  </div>
</div>
  <script>
    $(document).ready(function(){
      $("#successModal").modal('show');
    });
  </script>
@endif

@include('footer')
@include('end')
</body>
</html>