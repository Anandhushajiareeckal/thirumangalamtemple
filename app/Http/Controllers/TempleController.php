<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\temple;
class TempleController extends Controller
{
    public function index()
    {
        $id = 1;
        $temple = temple::find($id);
        return view('admin.temple.temple_edit',['temple'=>$temple]);
    }

 
    public function update(Request $request)
    {
        $id = 1;
        $admin_banner = temple::find($id);
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $admin_banner -> image = '/images/'.$imageName;
        }
        $admin_banner->heading = request("heading");
        $admin_banner->description = request("description");
        $admin_banner->content = request("content");

        $admin_banner->save();
        return redirect('/admin/temple');
    }
}
