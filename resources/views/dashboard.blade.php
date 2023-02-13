<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (session('brawo'))
                    <div role="alert" x-data="{ show: true }" x-show="show" id="alert-session"
                        class="w-full bg-fuchsia-500 mb-2 py-2 text-center">
            
                        <span class="mt-3 text-xl text-white text-center font-bold w-full">
            
                            {{ session('brawo') }} 
            
                        </span>
            
                    </div>
            
                    @php
                        
                        session()->forget('brawo');
                        
                    @endphp
                @endif
                    {{ __("Witamy Cie!") }}



                    @if (Auth::check())
                        @php
                            $user = Auth::user();
                        @endphp
                    @endif

                    @can('JestAdmin', $user)
                        <x-admin-component></x-admin-component>
                    @elsecan('JestUzytkownik', $user)
                       
                        <a href="{{route('Przyjęcieartykułu.create')}}" class="block text-blue-400">Przyjęcie artykułu </a>

                          

                      


                    @endcan
                        
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
