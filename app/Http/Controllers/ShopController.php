<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopModel;

class ShopController extends Controller
{
    public function get_all_products()
    {
        $all_products = ShopModel::all();
        return view("all_products", compact('all_products'));
    }

    public function send_product(Request $request)
    {
        $request->validate([
            "name" => "required|string",
            "description" => "required|string",
            "amount" => "required|integer",
            "price" => "required|integer"
        ]);

        ShopModel::create([
            "name" => $request->get("name"),
            "description" => $request->get("description"),
            "amount" => $request->get("amount"),
            "price" => $request->get("price")
        ]);

        return redirect("/admin/products");
    }



    
}
