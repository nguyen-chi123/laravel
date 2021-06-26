<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    

    public function store(Request $request, $product_id)
    {
        $warehouse = new Warehouse();
        $warehouse->shop_id = 1;
        $warehouse->product_id = $product_id;
        $warehouse->quantity = $request->quantity;
        $warehouse->save();
        
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
