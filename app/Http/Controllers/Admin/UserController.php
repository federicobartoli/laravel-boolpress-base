<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {
           $users = User::all();

           foreach ($users as $user) {
              // $info = $user->info(); //eloquent
              $info = $user->info;
              dd($info);
           }



    }
}
