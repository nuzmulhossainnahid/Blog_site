<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            if (Auth::user()->userType == '1')
            {

                $date = Carbon::now()->addHour(6)->format("d-m-Y");

                return view('admin.home');
            }

            else
            {

                return 'Wait for Super Admin Conformation';
            }
        }

        else
        {
            return view('user.home');
        }

    }
}
