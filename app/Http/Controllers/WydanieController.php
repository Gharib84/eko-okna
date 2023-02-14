<?php

namespace App\Http\Controllers;

use App\Models\Wydanie;
use Illuminate\Http\Request;
use App\Models\artykuł;
use Illuminate\Support\Facades\DB;

class WydanieController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $data = artykuł::all();
        return view('Wydanie.Wydanie',[
            'data' => $data
        ]);
        
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
        $request->validate([
            'Ilość_wydana' => ['required', 'numeric']
           ],[
             'Ilość_wydana.required' => 'Ilość wydana jest wymagane',
             'Ilość_wydana.numeric' => 'Ilość wydana musi być liczbą'

           ]);
        
        $row = DB::table('artykułs')->where('nazwa', $request->get('nazwa_artykuł'))->first();

        if(!$row){
            return redirect()->back()->withErrors('nazwa artykuł jest wymagane')->withInput();
        }

        $wydanie = Wydanie::create([
            'nazwa_artykuł' => $request->get('nazwa_artykuł'),
            'Ilość_wydana' =>  $request->get('Ilość_wydana')
        ]);

        session()->flash('brawo', 'Wydanie artykułu wysłał do administracji');
        return redirect()->intended('/dashboard');

    }
}
