<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    /**
     * @function 展示后台登录界面
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function loginForm()
    {
        return view('admin::login.login');
    }

    public function login(LoginRequest $request)
    {
        $username = $request->get('username');
        $password = $request->get('password');
        $result = Auth::guard('admin')->attempt(['username' =>$username,'password' => $password]);
        if($result){
            return ['message'=>'登录成功','code' => 1];
        }else{
            return ['message'=>'用户名或密码错误','code' => 1];
        }
    }
}
