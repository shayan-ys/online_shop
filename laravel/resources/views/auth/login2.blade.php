<?php
/**
 * Created by PhpStorm.
 * User: Shayanyousefian
 * Date: 12/11/15
 * Time: 2:09 PM
 */
?>

<form method="POST" action="/online_shop/laravel/public/admin/login">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>
