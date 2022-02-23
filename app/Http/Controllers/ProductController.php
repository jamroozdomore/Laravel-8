<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Requests;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $products = product::all();
        return view('product', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $this->validate($request, [
        //     'category' => 'required',
        // ]);

        // $validate = $request->validate([
        //     'category' => 'required',
        //     'title' => 'required',
        //     'description' => 'required',
        //     'price' => ['required', 'min:100']
        // ]);

        $this->validate($request, [
            'category' => 'required',
            'title' => 'required',
            'description' => 'required|max:20',
            'price' => 'required'
        ]);


        $products = new product;
        $products->cat = $request->category;
        $products->title = $request->title;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->save();
        return redirect(route('indexproduct'));
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) 
    {
        $products = product::find($id);
        return view('edit', ['products' => $products]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products = product::find($id);
        $products->cat = $request->input('category');
        $products->title = $request->input('title');
        $products->description = $request->input('description');
        $products->price = $request->input('price');
        $products->save();
        return redirect(route('indexproduct'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        product::destroy($id);
        return redirect(route('indexproduct'));
    }
}
