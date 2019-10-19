<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::get();
        return view('contacts.index',compact('contacts'));
    }
    public function create(){
        return view('contacts.contact');
    }
    public function store(Request $request){
        Contact::create([
            'name'=>$request->get('name'),
            'phone'=>$request->get('phone'),
            'message'=>$request->get('message'),
        ]);
        return redirect()->back();
    }
}
