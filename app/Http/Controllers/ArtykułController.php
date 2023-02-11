<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\artykuł;
use Illuminate\View\View;
use App\Http\Controllers\PrzyjęcieartykułuController;
class ArtykułController extends Controller
{


    public function __construct()
    {
        $this->authorizeResource(artykuł::class, 'artykuł');
    }

    /**
     * function index 
     * @return View 
     */

     public function index(Request $request): View
{
    if ($this->authorize('viewAny',artykuł::class ) === 'uzytkownik') {

        $artykuły = artykuł::all();
        return redirect()->action('PrzyjęcieartykułuController@create', ['artykuły' => $artykuły]);
        
    }

    if ($this->authorize('viewAny',artykuł::class )) {
        $artykuły = artykuł::all();
        return view('artykuł.artykułList', [
            'artykuły' => $artykuły
        ]);
    }
}

    /**
     *
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('artykuł.artykuł');
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
       
       if ( $this->authorize('create',artykuł::class )) {
       
        $request->validate([
            'nazwa' => ['required', 'string', 'unique:artykułs,nazwa'],
            'Jednostka_miary' => ['required', 'string']
        ]);

        $artykuł = artykuł::create([
            'nazwa' => $request->get('nazwa'),
            'Jednostka_miary' => $request->get('Jednostka_miary')
        ]);

        session()->flash('brawo', 'artykuł został pomyślnie utworzony');
        return redirect()->intended('/dashboard');
       }
        
        

    }
}
