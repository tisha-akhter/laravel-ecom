<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Catagory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CatagoryController extends Controller
{
    public function createCatagory()
    {
        return view('backend.catagory.create');
    }
    public function storeCatagory(Request $request)
    {
        $catagory = new Catagory();

        $catagory->name = $request->name;
        $catagory->slug = Str::slug($request->name);

        if (isset($request->image)) {

            $imageName = rand() . '-catagory-' . '.' . $request->image->extension();
            $request->image->move('backend/images/catagory/', $imageName);

            $catagory->image = $imageName;
        }

        $catagory->save();
        return redirect()->back();
    }
    public function listCatagory()
    {
        $catagories = Catagory::get();
        return view('backend.catagory.list', compact('catagories'));
    }
    public function deleteCatagory($id)
    {
        $catagory = Catagory::find($id);

        If($catagory->image && file_exists('backend/images/catagory/'.$catagory->image)){
            unlink('backend/images/catagory/'.$catagory->image);
        }
        $catagory->delete();
        
        return redirect()->back();
    }
    public function editCatagory($id)
    {
        $catagory = Catagory::find($id);
        return view ('backend.catagory.edit', compact('catagory'));
    }
    public function updateCatagory(Request $request,$id)
    {
        $catagory = Catagory::find($id);

        $catagory->name = $request->name;
        $catagory->slug = str::slug ($request->name);

        if(isset($request->image)){
            if($catagory->image && file_exists('backend/images/catagory/'.$catagory->image)){
                unlink('backend/images/catagory/'.$catagory->image);
            }

            $imageName = rand().'-catagoryupdate-'.'.'.$request->image->extension();
            $request->image->move('backend/images/catagory/',$imageName);
            $catagory->image = $imageName;
        }

        $catagory->save();
        return redirect('/admin/list-catagory');
    }
}
