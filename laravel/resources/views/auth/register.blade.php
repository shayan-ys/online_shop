<?php
/**
 * Created by PhpStorm.
 * User: Shayanyousefian
 * Date: 12/11/15
 * Time: 2:10 PM
 */
?>

<form method="POST" action="/online_shop/laravel/public/admin/register">
    {!! csrf_field() !!}

    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>
