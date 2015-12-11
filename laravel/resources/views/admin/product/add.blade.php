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
                {{--<div class="col-md-6">--}}
                    {{--<div class="content-box-large">--}}
                        {{--<div class="panel-heading">--}}
                            {{--<div class="panel-title">New vs Returning Visitors</div>--}}

                            {{--<div class="panel-options">--}}
                                {{--<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>--}}
                                {{--<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="panel-body">--}}
                            {{--Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et,--}}
                            {{--<br /><br />--}}
                            {{--Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.--}}
                            {{--<br /><br />--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box-header">
                                <div class="panel-title">Product Creating Form</div>

                                <div class="content-box-large">
                                    <div class="panel-heading">
                                        <div class="panel-title">Form Widgets</div>

                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                            <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">

                                        <div>
                                            <h4>Select</h4>
                                            <p>
                                            <div class="bfh-selectbox" data-name="selectbox3" data-value="12" data-filter="true">
                                                <div data-value="1">Option 1</div>
                                                <div data-value="2">Option 2</div>
                                                <div data-value="3">Option 3</div>
                                                <div data-value="4">Option 4</div>
                                                <div data-value="5">Option 5</div>
                                                <div data-value="6">Option 6</div>
                                                <div data-value="7">Option 7</div>
                                                <div data-value="8">Option 8</div>
                                                <div data-value="9">Option 9</div>
                                                <div data-value="10">Option 10</div>
                                                <div data-value="11">Option 11</div>
                                                <div data-value="12">Option 12</div>
                                                <div data-value="13">Option 13</div>
                                                <div data-value="14">Option 14</div>
                                                <div data-value="15">Option 15</div>
                                            </div>
                                            </p>
                                        </div>

                                        <div>
                                            <h4>Color Picker</h4>
                                            <p>
                                            <div class="bfh-colorpicker" data-name="colorpicker1"></div>
                                            </p>
                                        </div>

                                        <div>
                                            <h4>Date Picker</h4>
                                            <p>
                                            <div class="bfh-datepicker" data-format="y-m-d" data-date="today"></div>
                                            </p>
                                        </div>

                                        <div>
                                            <h4>Time Picker</h4>
                                            <p>
                                            <div class="bfh-timepicker" data-mode="12h"></div>
                                            </p>
                                        </div>

                                        <div>
                                            <h4>Slider</h4>
                                            <p>
                                            <div class="bfh-slider" data-name="slider1"></div>
                                            </p>
                                        </div>

                                        <div>
                                            <h4>Country Picker</h4>
                                            <p>
                                            <div class="bfh-selectbox bfh-countries" data-country="US" data-flags="true"></div>
                                            </p>
                                        </div>

                                        <div>
                                            <h4>State Picker</h4>
                                            <p>
                                            <div id="countries_states2" class="bfh-selectbox bfh-countries" data-country="US"></div>
                                            <br><br>
                                            <div class="bfh-selectbox bfh-states" data-country="countries_states2"></div>
                                            </p>
                                        </div>

                                        <div>
                                            <h4>Currency Picker</h4>
                                            <p>
                                            <div class="bfh-selectbox bfh-currencies" data-currency="EUR" data-flags="true"></div>
                                            </p>
                                        </div>

                                        <div>
                                            <h4>Language Picker</h4>
                                            <p>
                                            <div class="bfh-selectbox bfh-languages" data-language="en_US" data-flags="true"></div>
                                            </p>
                                        </div>

                                        <div>
                                            <h4>Timezone Picker</h4>
                                            <p>
                                            <div class="bfh-selectbox bfh-timezones" data-country="US"></div>
                                            </p>
                                        </div>

                                        <div>
                                            <h4>Google Font Picker</h4>
                                            <p>
                                            <div class="bfh-selectbox bfh-googlefonts" data-font="Lato"></div>
                                            </p>
                                        </div>

                                        <div>
                                            <h4>Font Picker</h4>
                                            <p>
                                            <div class="bfh-selectbox bfh-fonts" data-font="Arial"></div>
                                            </p>
                                        </div>

                                        <div>
                                            <h4>Font Size Picker</h4>
                                            <p>
                                            <div class="bfh-selectbox bfh-fontsizes" data-fontsize="12"></div>
                                            </p>
                                        </div>

                                        <div>
                                            <h4>Select</h4>
                                            <p>
                                                <select class="selectpicker">
                                                    <option>Mustard</option>
                                                    <option>Ketchup</option>
                                                    <option>Relish</option>
                                                </select>
                                            </p>
                                        </div>

                                        <div>
                                            <h4>Select With Groups</h4>
                                            <p>
                                                <select class="selectpicker">
                                                    <optgroup label="Picnic">
                                                        <option>Mustard</option>
                                                        <option>Ketchup</option>
                                                        <option>Relish</option>
                                                    </optgroup>
                                                    <optgroup label="Camping">
                                                        <option>Tent</option>
                                                        <option>Flashlight</option>
                                                        <option>Toilet Paper</option>
                                                    </optgroup>
                                                </select>
                                            </p>
                                        </div>

                                        <div>
                                            <h4>Select Multiple</h4>
                                            <p>
                                                <select class="selectpicker" multiple>
                                                    <option>Mustard</option>
                                                    <option>Ketchup</option>
                                                    <option>Relish</option>
                                                </select>
                                            </p>
                                        </div>

                                        <div>
                                            <h4>Tags</h4>
                                            <p>
                                            <div id="tags"></div>
                                            </p>
                                        </div>

                                        <fieldset>
                                            <legend>
                                                Masking
                                            </legend>

                                            <div class="form-group">
                                                <label for="h-input">Date masking</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control mask-date" data-mask="99/99/9999" data-mask-placeholder="-">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                </div>
                                                <p class="note">
                                                    Data format **/**/****
                                                </p>
                                            </div>

                                            <div class="form-group">
                                                <label for="h-input">Phone masking</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" data-mask="(999) 999-9999" data-mask-placeholder="X">
                                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                </div>
                                                <p class="note">
                                                    Data format (XXX) XXX-XXXX
                                                </p>
                                            </div>

                                            <div class="form-group">
                                                <label for="h-input">Credit card masking</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" data-mask="9999-9999-9999-9999" data-mask-placeholder="*">
                                                    <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                                </div>
                                                <p class="note">
                                                    Data format ****-****-****-****
                                                </p>
                                            </div>

                                            <div class="form-group">
                                                <label for="h-input">Serial number masking</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" data-mask="***-***-***-***-***-***" data-mask-placeholder="_">
                                                    <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                                                </div>
                                                <p class="note">
                                                    Data format ***-***-***-***-***-***
                                                </p>
                                            </div>

                                            <div class="form-group">
                                                <label for="h-input">Tax ID masking</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" data-mask="99-9999999" data-mask-placeholder="X">
                                                    <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
                                                </div>
                                                <p class="note">
                                                    Data format 99-9999999
                                                </p>
                                            </div>

                                        </fieldset>

                                        <div>
                                            <h4>Inline Edit</h4>
                                            <p>
                                            <table id="user" class="table table-bordered table-striped" style="clear: both">
                                                <tbody>
                                                <tr>
                                                    <td width="35%">Simple text field</td>
                                                    <td width="65%"><a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username" class="editable editable-click" data-original-title="" title="">superuser</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Empty text field, required</td>
                                                    <td><a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname" class="editable editable-click editable-empty">Empty</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Select, local array, custom display</td>
                                                    <td><a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex" class="editable editable-click" style="color: gray;">not selected</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Select, remote array, no buttons</td>
                                                    <td><a href="#" id="group" data-type="select" data-pk="1" data-value="5" data-title="Select group" class="editable editable-click">Admin</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Select, error while loading</td>
                                                    <td><a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-title="Select status" class="editable editable-click">Active</a></td>
                                                </tr>

                                                <tr>
                                                    <td>Combodate (date)</td>
                                                    <td><a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth" class="editable editable-click">15/05/1984</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Combodate (datetime)</td>
                                                    <td><a href="#" id="event" data-type="combodate" data-template="D MMM YYYY  HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1" data-title="Setup event date and time" class="editable editable-click editable-empty">Empty</a></td>
                                                </tr>



                                                <tr>
                                                    <td>Textarea, buttons below. Submit by <i>ctrl+enter</i></td>
                                                    <td><a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments" class="editable editable-pre-wrapped editable-click">awesome
                                                            user!</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            </p>
                                        </div>

                                    </div>
                                </div>
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