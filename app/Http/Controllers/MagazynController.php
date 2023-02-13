<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Magazyn;

class MagazynController extends Controller
{
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('magazyny.tworzenie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //stworzenie nasze magazyn 

        $request->validate([
            'magazyn_nazwa' => ['required', 'string','regex:/^[a-zA-Z\s]+$/', 'unique:magazyns,magazyn_nazwa']
        ],[
            'magazyn_nazwa.required' =>  'magazyn nazwa jest wymagany',
            'magazyn_nazwa.string' => ' magazyn nazwa musi być ciągiem',
            'magazyn_nazwa.regex' => 'Nazwa może zawierać tylko litery i spacje',
            'magazyn_nazwa.unique' => 'Nazwa artykułu jest już zajęta'
        ]);

        $magazyn = new Magazyn();
        $magazyn->magazyn_nazwa = $request->get('magazyn_nazwa');
        $magazyn->save();
        session()->flash('brawo', 'magazyn został pomyślnie utworzony');
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
