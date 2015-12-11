<?php
/**
 * Created by PhpStorm.
 * User: Shayanyousefian
 * Date: 12/11/15
 * Time: 1:32 PM
 */
namespace Barad;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    public function run()
    {
//        DB::table('users')->delete();

        User::create(array(
            'name' => 'شایان یوسفیان',
            'email' => 'shayan.yousefian1372@gmail.com',
            'password' => Hash::make('mypass'),
        ));
    }
}