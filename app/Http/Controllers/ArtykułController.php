<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artykuł;

class ArtykułController extends Controller
{
    /**
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
        //
    }
}
