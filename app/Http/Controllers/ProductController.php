<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Cart;

use App\Models\Order;

use Session;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index(Product $product)
    {
        $product= Product::all();

       return view('product',['products'=>$product]);
    }
    function detail($id)
    {
        $data =Product::find($id);
        return view('detail',['product'=>$data]);
    }
    
    public function store(Request $request)
    {
        //
        $product=new Product;
        $product->name=$request->get('name');
        $product->price=$request->get('price');
        $product->category=$request->get('category');
        $product->sub_category=$request->get('sub_category');
        $product->description=$request->get('description');
        $product->gallery=$request->get('gallery');
        $product->save();

        return redirect('/products');
       
    }

    public function show(Product $product)
    {
        //
        $product=Product::all();
        return view('products',['products'=>$product]);
        //return view('admin',['products'=>$product]);
    }

    public function edit(Product $product,$id)
    {
        $product = Product::find($id);
        return view('editProducts', ['product'=>$product]);

    }

    public function update(Request $request, Product $product,$id)
    {
        //
        $product = Product::find($id);
        $product->name=$request->get('name');
        $product->price=$request->get('price');
        $product->category=$request->get('category');
        $product->sub_category=$request->get('sub_category');
        $product->description=$request->get('description');
        $product->gallery=$request->get('gallery');
        $product->save();

        return redirect('/products');
    }

    public function destroy(Product $product,$id)
    {
        //
        
        $product=Product::find($id);
        $product->delete();
        return redirect('products');
    }

    function search(Request $req)
    {
        $data= Product::
        where('name', 'like', '%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
           $cart= new Cart;
           $cart->user_id=$req->session()->get('user')['id'];
           $cart->product_id=$req->product_id;
           $cart->save();
           return redirect('/');

        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
     $userId=Session::get('user')['id'];
     return Cart::where('user_id',$userId)->count();
    }
    function cartList()
    {
        $userId=Session::get('user')['id'];
       $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow()
    {
        $userId=Session::get('user')['id'];
        $total= $products= DB::table('cart')
         ->join('products','cart.product_id','=','products.id')
         ->where('cart.user_id',$userId)
         ->sum('products.price');
 
         return view('ordernow',['total'=>$total]);
    }
    function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];
         $allCart= Cart::where('user_id',$userId)->get();
         foreach($allCart as $cart)
         {
             $order= new Order;
             $order->product_id=$cart['product_id'];
             $order->user_id=$cart['user_id'];
             $order->status="pending";
             $order->payment_method=$req->payment;
             $order->payment_status="pending";
             $order->address=$req->address;
             $order->save();
             Cart::where('user_id',$userId)->delete(); 
         }
         $req->input();
         return redirect('/');
    }
    function myOrders()
    {
        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->get();
 
         return view('myorders',['orders'=>$orders]);
    }
}
