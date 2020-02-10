<?php

namespace Bitfumes\Contact\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index() {
    	return view('contact::contact');
    }
}
?>