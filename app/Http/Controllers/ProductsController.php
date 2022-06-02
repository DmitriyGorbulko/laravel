<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }

    public function addForm()
    {
        return view('add-phone');
    }

    public function add(Request $request)
    {
        $phone = new Product();

        $phone->name = $request->input('name');
        $phone->description = $request->input('description');
        $phone->photo = $request->input('photo');
        $phone->price = $request->input('price');

        $phone->save();

        return redirect()->route('index');
    }

    public function delete($id)
    {
        $phone = Product::findOrFail($id);
        $phone->destroy($id);

        return redirect()->route('index');
    }

    public function addToCart($id)
    {
        $phone = Product::findOrFail($id);

        $cartsPhones = session()->get('products');

        if (isset($cartsPhones[$id])){
            $cartsPhones[$id]['count'] += 1;
        }else{
            $cartsPhones[$id] = [
                "name" => $phone->name,
                "count" => 1,
                "price" => $phone->price,
                "photo" => $phone->image
            ];
        }

        session()->put('products', $cartsPhones);

        return redirect()->route('index');
    }

    public function deleteFromCart($id)
    {
        $cartsPhones = session()->get('products');
        if(isset($cartsPhones[$id])) {
            if($cartsPhones[$id]['count'] > 1){
                $cartsPhones[$id]['count'] -= 1;
            }else{
                unset($cartsPhones[$id]);
            }
        }
        
        session()->put('products', $cartsPhones);

        return redirect()->route('cart');
    }

    public function cart()
    {
        return view('/cart');
    }
}
