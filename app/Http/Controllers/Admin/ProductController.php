<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Rasta;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rasta=Rasta::all();
        $items=Product::all();
        return view('admin.product.index', compact('rasta', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rasta=Rasta::all();

        return view('admin.product.create', compact('rasta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        if ($request->hasFile('image')) {
            $file=$request->image;
            $image_name=time().$file->getClientOriginalName();
            $file->move('admin/images/product/', $image_name);
            $data['image']=$image_name;
        }

        Product::create($data);

        return redirect()->route('admin.product.index')->with('success', 'Muvaffaqiyatli yaratildi!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item=Product::find($id);
        return view('admin.product.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item=Product::find($id);
        $rasta=Rasta::all();
        return view('admin.product.edit', compact('item', 'rasta'));
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
        $item=Product::find($id);
        $data=$request->all();
        if ($request->hasFile('image')) {
            $file=$request->image;
            $image_name=time().$file->getClientOriginalName();
            $file->move('admin/images/product/', $image_name);
            $data['image']=$image_name;
        }
        $item->update($data);
        return redirect()->route('admin.product.index')->with('success', 'Muvaffaqiyatli yangilandi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('admin.product.index')->with('warning', 'Ma`lumot o`chirildi');
    }
}
