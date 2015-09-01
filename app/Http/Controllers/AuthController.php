<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Auth as Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function authenticate()
    {
        if (Auth::attempt(['usuario' => $user, 'senha' => $senha]))
        {
            return redirect()->intended('dashboard');
        }
    }


}
