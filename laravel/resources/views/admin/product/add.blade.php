<!DOCTYPE html>
<html>
<head>
    @include('admin.start', $head)
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">
    {!! HTML::style('assets/vendors/form-helpers/css/bootstrap-formhelpers.min.css') !!}
    {!! HTML::style('assets/vendors/select/bootstrap-select.min.css') !!}
    {!! HTML::style('assets/vendors/tags/css/bootstrap-tags.css') !!}
    {!! HTML::style('assets/css/forms.css') !!}
</head>
<body>
@include('admin.header')

<div class="page-content">
    <div class="row">
        @include('admin.side_panel', $head)
        <div class="col-md-10">
            <div class="row">

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box-header">
                                <h3>Product Creating Form</h3>
                                {{--<form method="POST" action="{{ asset('/admin/product/add') }}">--}}
                                {!!  Form::open(array('action'=>'AdminController@postAddProduct', 'method' => 'post')) !!}
                                    {!! csrf_field() !!}

                                <div class="content-box-large">
                                    <div class="panel-body">

                                        <div>
                                            <h4>Product Name</h4>
                                            <input class="form-control" type="text" name="name" placeholder="Product Name">
                                        </div>
                                        <div>
                                            <h4>Category</h4>
                                            <select class="form-control" onchange="update_category(this);" name="category">
                                                <option value="laptop">Laptop / Notebook</option>
                                                <option value="book">Book</option>
                                            </select>
                                        </div>

                                        <div class="laptop">
                                            <h4>Product Color</h4>
                                            <p>
                                            <div class="bfh-colorpicker" data-name="colorpicker"></div>
                                            </p>
                                        </div>

                                        <div>
                                            <h4 class="laptop">Manufactured Date</h4>
                                            <h4 class="book">Publication Date</h4>
                                            <p>
                                            <div class="bfh-datepicker" data-format="y-m-d" data-name="created_date" data-date="today"></div>
                                            </p>
                                        </div>

                                        <div>
                                            <h4>Off Percentage</h4>
                                            <p>
                                            <div class="bfh-slider" data-name="offperc"></div>
                                            </p>
                                        </div>

                                        <div>
                                            <h4 class="laptop">Manufacturing Country</h4>
                                            <h4 class="book">Publication Country</h4>
                                            <p>
                                            <div class="bfh-selectbox bfh-countries" data-name="country" data-country="US" data-flags="true"></div>
                                            </p>
                                        </div>

                                        <div class="col-lg-4">
                                            <h4>Price</h4>
                                            <input class="form-control" type="number" name="price" value="For ex. 15000" />
                                        </div>

                                        <div class="col-lg-4">
                                            <h4>Source Price</h4>
                                            <input class="form-control" type="number" name="sprice" />
                                        </div>

                                        <div class="col-lg-4">
                                            <h4>Currency Of Source Price</h4>
                                            <p>
                                            <div class="bfh-selectbox bfh-currencies" data-name="sprice_currency" data-currency="EUR" data-flags="true"></div>
                                            </p>
                                        </div>

                                        <div class="book">
                                            <h4>Language</h4>
                                            <p>
                                            <div class="bfh-selectbox bfh-languages" data-name="language" data-language="fa" data-flags="true"></div>
                                            </p>
                                        </div>

                                        <div>
                                            <h4>Tags</h4>
                                            <p>
                                            <div id="tags" data-name="tags"></div>
                                            </p>
                                        </div>

                                        <div><br></div>

                                        <div>
                                            <button type="submit" class="btn btn-lg btn-block btn-primary">Confirm And Create Product</button>
                                        </div>

                                    </div>
                                </div>
                                {!! Form::close() !!}
                                {{--</form>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    @include('admin.end')
    <script>
        $(document).ready(function(){
            $("select[name='category']").find("option").each(function(){
                var value = $(this).attr("value");
                $("."+value).hide();
            });
            $(".laptop").show();
        });
        function update_category(index){
            var selected = $(index).val();
            $(index).find("option").each(function(){
                var value = $(this).attr("value");
                $("."+value).hide();
            });
            $("."+selected).show();
        }
    </script>
    {!! HTML::script('assets/vendors/form-helpers/js/bootstrap-formhelpers.min.js') !!}
    {!! HTML::script('assets/vendors/select/bootstrap-select.min.js') !!}
    {!! HTML::script('assets/vendors/tags/js/bootstrap-tags.min.js') !!}
    {!! HTML::script('assets/vendors/mask/jquery.maskedinput.min.js') !!}
    {!! HTML::script('assets/vendors/moment/moment.min.js') !!}
    {!! HTML::script('assets/vendors/wizard/jquery.bootstrap.wizard.min.js') !!}
            <!-- bootstrap-datetimepicker -->
    {!! HTML::script('assets/vendors/bootstrap-datetimepicker/datetimepicker.css') !!}
    {!! HTML::script('assets/vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js') !!}
    {!! HTML::script('assets/js/forms.js') !!}

    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

</footer>
</body>
</html>