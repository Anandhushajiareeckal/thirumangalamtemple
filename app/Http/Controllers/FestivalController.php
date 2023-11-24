<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\festival;
class FestivalController extends Controller
{
    public function index(){
        $id = 1;
        $festival = festival::find($id);
        return view('admin.festivals.festivals',['festival'=>$festival]);
    }
}
