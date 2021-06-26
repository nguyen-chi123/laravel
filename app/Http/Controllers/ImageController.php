<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{

    public function store(Request $request, $product_id)
    {
        $img = new Image();
        $img->product_id = $product_id;
        $img->img_path = $request->img_path;
        $img->type = 1;
        $img->save();
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }

}
