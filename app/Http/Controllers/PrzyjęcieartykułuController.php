<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artykuł;
use App\Http\Controllers\ArtykułController;
use APP\Models\PrzyjęcieArtykuł;
class PrzyjęcieartykułuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $artykuły = artykuł::all();
        
        return view('artykuł.PrzyjęcieArtykułu', [
            
            'artykuły' => $artykuły,
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
        //code
        /**
         * nazwa_artykuł
         * Ilość_przyjęta
         * Jednostka_miary
         * vat
         * Cena_jednostkowa
         * file
         * total
         */

        $artykuły = Artykuł::all();

        $request->validate([
            'nazwa_artykuł' => ['required', 'string'],
            'Ilość_przyjęta' => ['required', 'numeric'],
            'Jednostka_miary' => ['required', 'in:'.implode(',', $artykuły->pluck('jednostka_miary')->toArray())],
            'vat' => ['required'],
            'Cena_jednostkowa' => ['required', 'numeric'],
            'file' => ['required', 'file'],



        ]);

        #stworzyc tutaj

        PrzyjęcieArtykuł::create([
            'nazwa_artykuł' => $request->get('nazwa_artykuł'),
            'Ilość_przyjęta' => $request->get('Ilość_przyjęta'),
            'Jednostka_miary' => $request->get('Jednostka_miary'),
            'vat' => $request->get('vat'),
            'Cena_jednostkowa' => $request->get('Cena_jednostkowa'),
            'file' => $request->get('Cena_jednostkowa')

        ]);




    }

  
}
