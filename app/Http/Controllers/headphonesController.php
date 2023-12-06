<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Headphone;
class HeadphonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Headphone::all()->toArray();
        //從Model拿資料
        //$h = Headphone::all()->toArray();
        //把資料傳送給View
        //return view('headphones.index')->with('headphones',$h);
        $headphones = Headphone::all();
        // 把資料送給 view
        return view('headphones.index')->with('headphones', $headphones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Headphone::findOrFail($id)->toArray();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $headphone = Heanphone::findOrFail($id);
       // return view('headphones.show')->with('headphone',$headphone);

       //$headphones = Headphone::all();
        // 把資料送給 view
        //return view('headphones.index')->with('headphones', $headphones);
        $headphone = Headphone::findOrFail($id);
        return view('headphones.show')->with('headphone',$headphone);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $headphone=Headphone::findOrFail($id);
        $headphone->delete();
        return redirect('headphones');
    }
}
