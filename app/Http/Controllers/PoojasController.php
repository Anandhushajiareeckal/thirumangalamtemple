<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pooja;
class PoojasController extends Controller
{
    
    public function index()
    {
        $id = 1;
        $pooja = pooja::find($id);
        return view('admin.poojas.poojas',['pooja'=>$pooja]);
    }

  
    public function update(Request $request)
    {
        $id = 1;
       $pooja = pooja::find($id);
       $pooja->morning_open = request('morning_open');
       $pooja->morning_close = request("morning_close");
       $pooja->evening_open = request("evening_open");
       $pooja->evening_close = request("evening_close");
       $pooja->save();
       return redirect('/admin/poojas');
    } 
}
