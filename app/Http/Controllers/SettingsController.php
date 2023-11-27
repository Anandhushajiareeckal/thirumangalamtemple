<?php

namespace App\Http\Controllers;
use App\Models\logo;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function logo(){
        $id = 1;
        $logo = logo::find($id);
        return view('admin.settings.logo.logo',['logo'=>$logo]);
    }

    public function update(Request $request){
        $id = 1;
        $logo = logo::find($id);
        if ($request->file('fav')) {
            $image = $request->file('fav');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $logo -> fav = '/images/'.$imageName;
        }
        if ($request->file('logo')) {
            $image = $request->file('logo');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $logo -> logo = '/images/'.$imageName;
        }
        $logo->save();
        return redirect('/admin/logo');
    }
}
