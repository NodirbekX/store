<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function home(){
        $allProducts = $this->_getProducts();
        $featuredProducts = array_slice($allProducts, 0, 3);

        return view('home', ['featuredProducts' => $featuredProducts]);
    }
    public function index(){
        $products = $this->_getProducts();
        return view('products.index', ['products' => $products]);
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function contact_post(Request $request){
        $request->validate([
            'email' => 'required',
            'fullname' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Chat::create($request->all());

        return redirect()->route('contact')->with('success', 'Your message has been sent!');
    }

    public function test(){
        $posts = Chat::all();
        $post = Chat::where('email','ccnodirbekcc@gmail.com')->first();
        dd($post->fullname);
}

    /**
     * A private helper method to get product data.
     * This avoids duplicating the array in multiple methods.
     * Later, this can be replaced with a single database query.
     */
    private function _getProducts(): array
    {
        return [
            ['id' => 1, 'name' => 'Stylish T-Shirt', 'price' => '24.99', 'image' => 'product-1.jpg'],
            ['id' => 2, 'name' => 'Comfortable Jeans', 'price' => '59.99', 'image' => 'product-2.jpg'],
            ['id' => 3, 'name' => 'Running Shoes', 'price' => '89.99', 'image' => 'product-3.jpg'],
            ['id' => 4, 'name' => 'Classic Watch', 'price' => '149.99', 'image' => 'product-4.jpg'],
            ['id' => 5, 'name' => 'Leather Backpack', 'price' => '79.99', 'image' => 'product-5.jpg'],
            ['id' => 6, 'name' => 'Sunglasses', 'price' => '45.00', 'image' => 'product-6.jpg'],
        ];
    }


}
