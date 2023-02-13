<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\artykuł;
use App\Http\Controllers\ArtykułController;
use App\Models\PrzyjęcieArtykuł;
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

        $artykuły = artykuł::all();

        $request->validate([
            'nazwa_artykuł' => ['required'],
            'Ilość_przyjęta' => ['required', 'numeric'],
            'Jednostka_miary' => ['required'],
            'vat' => ['required', 'numeric'],
            'Cena_jednostkowa' => ['required', 'numeric'],
            'file' => ['required', 'file', 'mimes:pdf,xml', 'max:4096'],



        ],[
            'nazwa_artykuł.required' => 'Nazwa artykułu jest wymagana',
            'nazwa_artykuł.string' => 'Nazwa musi być ciągiem',
            'nazwa_artykuł.regex' => 'Nazwa może zawierać tylko litery i spacje',
            'Ilość_przyjęta.required' => 'Ilość przyjęta jest wymagana',
            'Ilość_przyjęta.numeric' => 'Ilość przyjęta musi być liczbą',
            'Jednostka_miary.required' => 'ednostka miary jest wymagana',
            'vat.required' => 'VAT jest wymagany',
            'vat.numeric' => 'VAT musi być liczbą',
            'Cena_jednostkowa.required' => 'Cena jednostkowa jest wymagana',
            'Cena_jednostkowa.numeric' => 'Cena jednostkowa musi być liczbą',
            'file.required' => 'plik jest wymagana',
            'file.file' => 'Plik musi być plikiem'
        ]);

        #stworzyc tutaj

      $nazwa = $request->get('nazwa_artykuł');  
      $Jednostka_miary = $request->get('Jednostka_miary');
      $row = DB::table('artykułs')->where('nazwa', $nazwa)->where('Jednostka_miary',$Jednostka_miary )->first();
     
      if (!$row) {
        return redirect()->back()->withErrors(['Nieprawidłowa jednostka miary']);
        
      }

      
       $PrzyjęcieArtykuł = PrzyjęcieArtykuł::create([
        'nazwa_artykuł' => $request->get('nazwa_artykuł'),
        'Ilość_przyjęta' => $request->get('Ilość_przyjęta'),
        'Jednostka_miary' => $request->get('Jednostka_miary'),
        'vat' => $request->get('vat'),
        'Cena_jednostkowa' => $request->get('Cena_jednostkowa'),
        'file' => $request->get('file'),
        'total' => $request->get('Cena_jednostkowa') + ($request->get('Cena_jednostkowa') * $request->get('vat') / 100)

    ]);


     session()->flash('brawo', 'Przyjęcie Artykuł juz  jest Stworzonie');
     return redirect()->intended('/dashboard');



    }

  
}
