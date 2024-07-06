<?php

namespace App\Http\Controllers\Admin;

use App\Models\laptop;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\MobilStoreRequest;
use App\Http\Requests\Admin\MobilUpdateRequest;
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Carbon;


class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobils = laptop::latest()->get();
        return view('admin.laptop.index', compact('mobils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.laptop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MobilStoreRequest $request,)
    {
       $v = $request->all();
       laptop::create($v);
        return redirect()->route('mobils.index')->with([
            'message'=> 'Data Berhasil DiTambahkan',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laptop = laptop::findOrFail($id);
        return view('admin.laptop.edit', compact('laptop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MobilUpdateRequest $request, $id)
    {
        $vali = $request->all();
        $v = laptop::findOrFail($id);
        $v->update($vali);
        
        return redirect()->route('mobils.index')->with([
            'message'=> 'Data Berhasil DiEdit',
            'alert-type' => 'info'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $v = laptop::findOrFail($id);
        $v ->delete();
        return redirect()->back()->with([
            'message'=> 'Data Berhasil DiHapus',
            'alert-type' => 'danger'
        ]);
    }

}
