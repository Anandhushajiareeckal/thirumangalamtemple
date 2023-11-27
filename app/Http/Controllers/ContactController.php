<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use  App\Models\enquiry;
class ContactController extends Controller
{
    public function index(){
        $id =  1;
        $contact = contact::find($id);
        return view('admin.contact.content',['contact'=>$contact]);
    }

    public function update(Request $request){
        $id =  1;
        $contact = contact::find($id);
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $contact -> image = '/images/'.$imageName;
             
        }
        $contact->name = $request->input("name");
        $contact->post = $request->input("post");
        $contact->number = $request->input("number");
        $contact->email = $request->input("email");
        $contact->location = $request->input("location");
        $contact->content = $request->input("content");
        $contact->map = $request->input("map");
        $contact->save();
        return redirect('/admin/contact');
      
    }
    public function enquiry(Request $request){
        $enquiry = new enquiry();
        $enquiry->name = $request->input("name");
        $enquiry->email = $request->input("email");
        $enquiry->subject = $request->input("subject");
        $enquiry->message = $request->input("message");
        $enquiry->save();
        return redirect('/contact');
    }

    public function enquiry_list(){
        $enquiry = enquiry::all();
        return  view('admin.contact.enquery',['enquiry'=>$enquiry]);

    }

    public function enquiry_detail(string $id){
        $enquiry = enquiry::find($id);
        return  view('admin.contact.enquery_detail',['enquiry'=>$enquiry]);

    }

    public function enquiry_delete(string $id){
        $enquiry = enquiry::find($id);
        $enquiry->delete();
        return redirect('/admin/contact/enquiry');
    }

}
