<?php

namespace App\Http\Controllers;


use App\Models\Headphone;
use App\Models\Brand;
use App\Http\Requests\CreateHeadphoneRequest;
use Illuminate\Http\Request;




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
        
        $headphones = Headphone::paginate(10);
        $genres = Headphone::allGenres()->pluck('headphones.genre', 'headphones.genre');
        // 把資料送給 view
        //return view('headphones.index')->with('headphones',$h);
        //return view('headphones.index')->with('headphones', $headphones);
        return view('headphones.index', ['headphones' => $headphones, 'genres'=>$genres, 'selectedGenre'=>null]);
    }

    public function cheappirce()
    {
         $headphones = Headphone::cheappirce()->paginate(10);
         $genres = Headphone::allGenres()->pluck('headphones.genre', 'headphones.genre');
         return view('headphones.index', ['headphones' => $headphones, 'genres'=>$genres, 'selectedGenre'=>null]);
    }
    
    public function eppirce()
    {
         $headphones = Headphone::eppirce()->paginate(10);
         $genres = Headphone::allGenres()->pluck('headphones.genre', 'headphones.genre');
         return view('headphones.index', ['headphones' => $headphones, 'genres'=>$genres, 'selectedGenre'=>null]);
    }

    public function genre(Request $request)
    {
        $headphones = Headphone::genre($request->input('gen'))->paginate(10);
        $genres = Headphone::allGenres()->pluck('headphones.genre', 'headphones.genre');
        $selectedGenre = $request->input('gen');
        return view('headphones.index', ['headphones' => $headphones, 'genres'=>$genres, 'selectedGenre'=>$selectedGenre]);
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return Headphone::findOrFail($id)->toArray();
       // return view('headphones.create');
       $brands = Brand::orderBy('brands.id', 'asc')->pluck('brands.name', 'brands.id');
        return view('headphones.create', ['brands' =>$brands, 'brandSelected' => null]);
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateHeadphoneRequest $request)
    {
        $name = $request->input('name');
        $tid = $request->input('tid');
        $genre = $request->input('genre');
        $hz = $request->input('hz');
        $spl = $request->input('spl');
        $oi = $request->input('oi');
        $weight = $request->input('weight');
        $ts = $request->input('ts');
        $price = $request->input('price');

        $headphone = Headphone::create([
            'name'=>$name,
            'tid'=>$tid,
            'genre'=>$genre,
            'hz'=>$hz,
            'spl'=>$spl,
            'oi'=>$oi,
            'weight'=>$weight,
            'ts'=>$ts,
            'price'=>$price]);
        return redirect('headphones');
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
       // $headphone = Headphone::findOrFail($id);
       // return view('headphones.edit', ['headphone' =>$headphone]);
       $headphone = Headphone::findOrFail($id);
       $brands = Brand::orderBy('brands.id', 'asc')->pluck('brands.name', 'brands.id');
       $selected_tags = $headphone->brand->id;
       return view('headphones.edit', ['headphone' =>$headphone, 'brands' => $brands, 'brandSelected' => $selected_tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateHeadphoneRequest $request, $id)
    { 
        $headphone = Headphone::findOrFail($id);

        $headphone->name = $request->input('name');
        $headphone->tid = $request->input('tid');
        $headphone->genre = $request->input('genre');
        $headphone->hz = $request->input('hz');
        $headphone->spl = $request->input('spl');
        $headphone->oi = $request->input('oi');
        $headphone->weight = $request->input('weight');
        $headphone->ts = $request->input('ts');
        $headphone->price = $request->input('price');
        $headphone->save();

        return redirect('headphones');
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
