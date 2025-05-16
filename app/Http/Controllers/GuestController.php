<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guestlogin;

class GuestController extends Controller
{
    public function guest()
    {
        return view("Guest.GuestHome");
        
    }

    
}