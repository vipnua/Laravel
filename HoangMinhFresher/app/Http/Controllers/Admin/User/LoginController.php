<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    public function index(){
      return view('admin.user.login',[
        'title' => 'Đăng nhập'
      ]);
    }
    public function minhhoangfresher(Request $request)
    {
      $this->validate($request,[
        'email'=> 'required|email:filter',
        'password'=> 'required'
      ]);
    }
}
