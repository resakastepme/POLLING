<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $r)
    {
        $rules = [
            'usernameRegister' => 'required',
            'passwordRegister' => 'required',
            'confirmPassword' => 'required',
        ];

        $text = [
            'usernameRegister' => 'Username is required!',
            'passwordRegister' => 'Password is required!',
            'confirmPassword' => 'Confirmation password must match the password!',
        ];

        $validate = Validator::make($r->all(), $rules, $text);

        if ($validate->fails()) {
            return redirect()->back()->with('error', 'ERROR');
        } else {
            return redirect()->back()->with('success', 'SUCCESS');
        }
    }
}
