<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Magazyn;



class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $magazyns = Magazyn::all();
        return view('auth.register')->with('magazyns', $magazyns);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
             'role' => ['required', 'string', 'in:admin,uzytkownik'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $magazyns = Magazyn::all();
           
        if (!$magazyns->count()) {
            return redirect()->route('magazyny.create')->withErrors(['message' => 'Najpierw utwórz Magazyn.']);
        }

        $selectedOptionValue = intval($request->get('magazyn'));
        //dd($selectedOptionValue);

        $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role'=> $request->role,
                'password' => Hash::make($request->password),
                'magazyn_id' => $selectedOptionValue ,
                
            ]);

          
            
        event(new Registered($user));
        


        //Auth::login($user);
        
        session()->flash('brawo', 'Nowy użytkownik został pomyślnie utworzony');
        return redirect(RouteServiceProvider::HOME);
        
    }
}
