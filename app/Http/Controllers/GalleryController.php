<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\image_category;
use App\Models\image;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = image_category::all();
        return view('admin.gallery.gallery_category', ['category'=>$category]);
    }
    public function list(string $id)
    {
        
        $image = image::where('category_id', $id)->get();
        return view('admin.gallery.gallery', ['image'=>$image, 'id'=>$id]);
    }

    public function store(Request $request, $id)
    {
        $image = new image;
        if ($request->file('image')) {
            $images = $request->file('image');
            $imageName = time().'.'.$images->getClientOriginalExtension();
            $images->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $image -> image = '/images/'.$imageName;
        };
        $image->category_id = $id;
        $image->save();
        return redirect('/admin/gallery/images/'.$id);
    }

    public function destroy(string $id, $cat_id)
    {
        $image = image::find($id);
        $image->delete();
        return redirect('/admin/gallery/images/'.$cat_id);
    }

    public function category(Request $request){
        $image_category = new image_category;
        $image_category->category = request("category");
        $image_category->save();
        return redirect('/admin/gallery');
    }

    public function category_edit( string $id){
        $category = image_category::find($id);
        return view('admin.gallery.catogory_edit', ['item'=>$category, $id]);
    }
    public function category_update(Request $request, string $id){
        $image_category = image_category::find($id);
        $image_category->category = request("category");
        $image_category->save();
        return redirect('/admin/gallery');
    }

    public function category_delete(string $id){
        $image_category = image_category::find($id);
        $image_category->delete();
        return redirect('/admin/gallery');
    }
    
    
}

