<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 授权相关
 * @desc
 */
class LoginController extends Controller
{
    /**
     * 获取 AccessToken
     * @desc
     * @deprecated
     * @var string username yes null 用户名
     * @var string password yes null 密码
     * @return array
     */
    public function login()
    {
        return [];
    }

    /**
     * 注册账号
     * @desc
     * @var string username yes null 用户名
     * @var string password yes null 密码
     * @return array
     */
    public function register()
    {
        return [];
    }

}
