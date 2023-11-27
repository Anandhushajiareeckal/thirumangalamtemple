<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\banner;
use App\Models\home_service;
use App\Models\upadeva;
use App\Models\temple;
use App\Models\offering;
use App\Models\offering_detail;
use App\Models\pooja;
use App\Models\image;
use App\Models\event;
use App\Models\image_category;
use App\Models\contact;
use  App\Models\festival;
use  App\Models\administration;
class FrontendController extends Controller
{

    public function index()
    {
        $id = 1;
        $contact  = contact::find($id);
        $banner = banner::all();
        $service =home_service::all();
        $upadeva =upadeva::all();
        $image = image::all();
        $event = event::all();
        $image_category = image_category::all();
        return view('frontend.index', [
            'banner'=>$banner, 
            'service'=>$service, 
            'upadeva'=>$upadeva, 
            'image'=>$image, 
            'image_category'=>$image_category,
            'event'=>$event,
            'contact'=>$contact
        ]);
    }


    public function upadevas(string $id)
    {
        $upadeva =upadeva::all();
        $upadeva_detail =upadeva::find($id);
        return view('frontend.upadevas',['upadeva'=>$upadeva,  'upadeva_detail'=>$upadeva_detail]);
    }

    public function temple(){
        $id = 1;
        $temple = temple::find($id);
        $event = event::all();
        $upadeva =upadeva::all();
        return view('frontend.temple',[
            'temple'=>$temple,
            'upadeva'=>$upadeva,
            'event'=>$event
            
        ]);
    }
    
    public function offerings(){
        $upadeva =upadeva::all();
        $event = event::all();
        $offering = offering::all();
        $offering_details = offering_detail::all();
        return view('frontend.offerings',[
            'offering'=>$offering,
            'offering_details'=>$offering_details,
            'upadeva'=>$upadeva,
            'event'=>$event

            ]);
    }

    public function pooja(){
        $id = 1;
        $pooja =pooja::find($id);
        $upadeva =upadeva::all();
        $event = event::all();
        return view('frontend.poojas',[
            'pooja'=>$pooja,
            'upadeva'=>$upadeva,
            'event'=>$event
        ]);
    }

    public function gallery(){
        $image = image::all();
        $image_category = image_category::all();
        return view('frontend.gallery',['image'=>$image, 'image_category'=>$image_category]);
    }
    public function events(){
        $event = event::all();
        return view('frontend.events',['event'=>$event]);
    }

    public function event_detail(string $id){
        $upadeva =upadeva::all();
        $event = event::find($id);
        return view('frontend.event_detail',['event'=>$event, 'upadeva'=>$upadeva]);
    }
    public function contact(){
        $id = 1;
        $contact  = contact::find($id);
        return view('frontend.contact',['contact'=>$contact]);

    }

    public function festival(){
        $id = 1;
        $festival = festival::find($id);
        $upadeva =upadeva::all();
        $event = event::all();
        return view('frontend.festivals',[
            'festival'=>$festival,
             'upadeva'=>$upadeva,
             'event'=>$event
            ]);
    }

    public function administration(){
        $administration = administration::all();
        $upadeva =upadeva::all();
        $event = event::all();
        return view('frontend.administration',[

            'administration'=>$administration, 
            'upadeva'=>$upadeva,
            'event'=>$event


        ]);

    }
   
}
