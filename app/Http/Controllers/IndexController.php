<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\banner;
use App\Models\home_service;
use App\Models\upadeva;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.hom.home_add');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function list()
    {
        $admin_banner = banner::all();
        return view('admin.hom.home_list',['admin_banner'=>$admin_banner]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $admin_banner = new banner();
        $admin_banner->heading = request("heading");
        $admin_banner->description = request("description");
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $admin_banner -> image = '/images/'.$imageName;
        }
        $admin_banner->save();
        return redirect('/admin/home/banner/list');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin_banner = banner::find($id);
        return view('admin.hom.home_edit', ['admin_banner'=>$admin_banner]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $admin_banner = banner::find($id);
        $admin_banner->heading = $request->input("heading");
        $admin_banner->description = $request->input("description");
    
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $admin_banner->image = '/images/'.$imageName;
        }
    
        $admin_banner->save();
    
        return redirect('/admin/home/banner/list');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin_project = banner::find($id);
        $admin_project->delete();
        return redirect('/admin/home/banner/list');
    }


    public function service_show(){
        $home_service =  home_service::all();
        return view('admin.hom.services_list',['home_service'=>$home_service]);
    }

    public function service_view(string $id){
        $home_service =  home_service::find($id);
        return view('admin.hom.services_add',['home_service'=>$home_service]);
    }

    public function service_add(Request $request, string $id){
        $admin_banner =  home_service::find($id);
        $admin_banner->heading = request("heading");
        $admin_banner->description = request("description");
        $admin_banner->icon = request("icon");
        $admin_banner->save();
        return redirect('/admin/home/service');
    }

    public function upadevas(){
        $upadevas =  upadeva::all();
        return view('admin.hom.upadevas_list',['upadevas'=>$upadevas]);
    }

    public function upadevas_view(){
        return view('admin.hom.upadevas_add');
    }
    
    public function upadevas_store(Request $request){

        $admin_banner = new upadeva();
        $admin_banner->heading = request("heading");
        $admin_banner->description = request("description");
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $admin_banner -> image = '/images/'.$imageName;
        }
        $admin_banner->content = request("content");

        $admin_banner->save();
        return redirect('/admin/home/upadevas/list');

    }

    public function upadevas_edit(string $id){
        $upadevas = upadeva::find($id);
        return view('admin.hom.upadevas_edit',['upadevas'=>$upadevas]);
    }

    public function upadevas_update(Request $request, string $id){
        $admin_banner =  upadeva::find($id);
        $admin_banner->heading = request("heading");
        $admin_banner->description = request("description");
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $admin_banner -> image = '/images/'.$imageName;
        }
        $admin_banner->content = request("content");

        $admin_banner->save();
        return redirect('/admin/home/upadevas/list');

    }
    public function upadevas_delete(string $id){
        $upadeva = upadeva::find($id);
        $upadeva->delete();
        return redirect('/admin/home/upadevas/list');
    }
}
