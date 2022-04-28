<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {
      // dd(session('cartItems'));

        return view('cart.cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cartItems = session()->get('cartItems', []);
        // dd( $product);

        if(isset($cartItems[$id])) {
           $cartItems[$id]['quantity']++;
        } else {
            $cartItems[$id] = [
                'id' => $id,
                'image_path' => $product->image_path,
                'name' => $product->name,
                'details' => $product->details,
                'price' => $product->price,
                'quantity' => 1,
            ];
        }

        session()->put('cartItems', $cartItems);

        return redirect()->back()->with('success', 'Product added to cart!');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateFromCart(Request $request, $id)
    {
        if($request->id && $request->quantity) {
            $cartItems = session()->get('cartItems');
            $cartItems[$request->id]["quantity"] = $request->quantity;
            session()->put('cartItems', $cartItems);
        }
        return redirect()->back()->with('success', 'Cart Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        if($request->id) {
            
            $cartItems = session()->get('cartItems');

            if(isset($cartItems[$request->id])) {
                unset($cartItems[$request->id]);
                session()->put('cartItems', $cartItems);
            }
            return redirect()->back()->with('success', 'Product deleted successfully');
        }
    }
}
