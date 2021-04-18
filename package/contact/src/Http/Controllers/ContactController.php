<?php

namespace Zineb\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Zineb\Contact\Models\Contact;
class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }
    public function send(Request $request){
       Contact::create($request->all());
       return redirect(route('contact'));
    }
}
