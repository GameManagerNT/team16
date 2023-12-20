<?php

namespace App\Http\Controllers;


use App\Models\Brand;
use App\Http\Requests\CreateBrandRequest;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Brand::all()->toArray();
        //從Model拿資料
        //$p = Brand::all()->toArray();
        //把資料傳送給View
        //return view('brands.index')->with('brands',$p);

        // 從 Model 拿資料
        $brands = Brand::all();
        // 把資料送給 view
        return view('brands.index')->with('brands', $brands);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBrandRequest $request)
    {
        $name = $request->input('name');
        $country = $request->input('country');
        $since = $request->input('since');
        $founder = $request->input('founder');
        $headquarters = $request->input('headquarters');
        $web = $request->input('web');

        Brand::create([
            'name' => $name,
            'country' => $country,
            'since' => $since,
            'founder' => $founder,
            'headquarters' => $headquarters,
            'web' => $web
        ]);

        return redirect('brands');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $brand = Brand::findOrFail($id);
        $headphones=$brand->headphones;
        return view('brands.show',['brand'=>$brand,'headphones'=>$headphones]);//->with('brand',$brand);
        
         //Brand::findOrFail($id)->toArray();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return Brand::findOrFail($id)->toArray();
        $brand = Brand::findOrFail($id);
        return view('brands.edit', ['brand'=>$brand]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateBrandRequest $request, $id)
    {
        $brand = Brand::findOrFail($id);

        $brand->name = $request->input('name');
        $brand->country = $request->input('country');
        $brand->since = $request->input('since');
        $brand->founder = $request->input('founder');
        $brand->headquarters = $request->input('headquarters');
        $brand->web = $request->input('web');
        $brand->save();

        return redirect('brands');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand=Brand::findOrFail($id);
        $brand->delete();
        return redirect('brands');
    }
}
