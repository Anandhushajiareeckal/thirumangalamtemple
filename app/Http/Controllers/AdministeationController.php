<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\administration;
class AdministeationController extends Controller
{
    public function index(){
        $administration = administration::all();
        return view('admin.administration.administration',['administration'=>$administration]);
    }

    public function store(Request $request){
        $administration = new administration();
        $administration-> heading = request('heading');
        $administration->save();
        return redirect('/admin/administration');
    }

    public function update(Request $request, string $id){
        $administration = administration::find($id);
        $administration-> heading = request('heading');
        $administration->save();
        return redirect('/admin/administration');
    }

    public function content(){
        $id = 1;
        $administration = administration::find($id);
        $data = $administration->content;
        return view('admin.administration.content',['data'=>$data]);
    }

    public function content_update(Request $request){
        $id = 1;
        $administration = administration::find($id);
        $administration-> content = request('content');
        $administration->save();
        return redirect('/admin/administration/content');
    }
}
