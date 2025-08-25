<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactStoreRequest;

class ContactController extends Controller
{
    function index(){
        return view('contact');
    }

    function contactSubmit(ContactStoreRequest $request){
       
    }
       
}
