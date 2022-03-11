<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(){
      $products = Product::all();
      return view('products', ['products' => $products]);
    }

    public function save(Request $request, $id = null){

      // Si el request es post
      if ($request->isMethod('post')) {
        $data = $request->all();

        if(isset($data['id'])){ // Si el producto existe se actualiza
          $product = Product::find($data['id']);
        }else{
          $product = new Product();
        }
        $product->name = $data['name'];
        $product->description = $data['description'];
        $product->sku = $data['sku'];
        $product->stock = $data['stock'];
        
        $product->save();

        return redirect()->action([ProductsController::class, 'index']);
      }

      if(isset($id)){
        $product = Product::find($id);

        $data = [
          'id' => $product->id,
          'name' => $product->name,
          'description' => $product->description,
          'sku' => $product->sku,
          'stock' => $product->stock
        ];
      }else{
        $data = [
          'id' => null,
          'name' => '',
          'description' => '',
          'sku' => '',
          'stock' => '',
        ];
      }

      
      return view('new', $data);
    }

    public function delete($id){

      $product = Product::find($id);
      $product->delete();


      return redirect()->action([ProductsController::class, 'index']);

    }
}
