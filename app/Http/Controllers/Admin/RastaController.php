<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rasta;

class RastaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Rasta::all();
       
        return view('admin.rasta.index', compact('items'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rasta.create');
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
            $file->move('admin/images/rasta/', $image_name);
            $data['image']=$image_name;
        }
       
        Rasta::create($data);
        
        return redirect()->route('admin.rasta.index')->with('success', 'Muvaffaqiyatli yaratildi!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item=Rasta::find($id);
        return view('admin.rasta.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item=Rasta::find($id);
        return view('admin.rasta.edit', compact('item'));
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
        $item=Rasta::find($id);
        $data=$request->all();
        if ($request->hasFile('image')) {
            $file=$request->image;
            $image_name=time().$file->getClientOriginalName();
            $file->move('admin/images/rasta/', $image_name);
            $data['image']=$image_name;
        }
        $item->update($data);
        return redirect()->route('admin.rasta.index')->with('success', 'Muvaffaqiyatli yangilandi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rasta::destroy($id);
        return redirect()->route('admin.rasta.index')->with('warning', 'Rasta o`chirildi');
    }
}
