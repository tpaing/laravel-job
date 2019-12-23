<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class logController extends Controller
{
    public function logout() {
    	auth()->logout();
    	return redirect('/jobs');
    }

    public function home() {
    	return redirect('jobs');
    }
}
