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
    public function edit($id){
        $contact = Contact::findOrFail($id);
        return view('contacts.edit',compact('contact'));
    }
    public function update($id){
        $contact = Contact::findOrFail($id);
        $contact->name = request('name');
        $contact->phone = request('phone');
        $contact->message = request('message');
        $contact->save();
        return redirect()->to('/contacts');
    }
    public function delete($id){
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect('/contacts');
    }

}
