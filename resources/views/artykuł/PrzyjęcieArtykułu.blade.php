<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-none text-center bg-slate-800">

                  
                    <div class="flex items-center justify-center p-12">
                       
                        <div class="mx-auto w-full">
                            <form action="{{route('Przyjęcieartykułu.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <h1 class="mb-5 font-bold text-lg text-left text-white">
                                  

                                    Przyjęcie artykułu
                                </h1>

                                @if ($errors->any())
                                    <div role="alert" class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="mb-5">
                                    <label for="nazwa_artykuł"
                                        class=" text-left mb-3 block text-base font-medium text-[#83c41c]">
                                        Nazwa Artykuł
                                    </label>
                                    <select name="nazwa_artykuł" id="magazyn" class="block mt-1 w-full bg-slate-700 text-white">
                                        <option selected>Wybierz nazwę</option>
                                        @foreach ($artykuły as $artykuł)
                                            <option class="white" value="{{ $artykuł->nazwa}}">{{ $artykuł->nazwa }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-5">
                                    <label for="Ilość_przyjęta"
                                        class=" text-left mb-3 block text-base font-medium text-[#83c41c]">
                                        Ilość Przyjęta
                                    </label>
                                    <input type="number" min="1" name="Ilość_przyjęta" id="Ilość_przyjęta"
                                        class="w-full rounded-md border border-[#abaab6] py-3 px-6 text-base font-medium text-[#fefeff] outline-none focus:border-[#6A64F1] focus:shadow-md bg-slate-800" />
                                </div>

                                <div class="mb-5">
                                    <label for="Jednostka_miary"
                                        class=" text-left mb-3 block text-base font-medium text-[#83c41c]">
                                        Jednostka Miary
                                    </label>
                                    <select name="Jednostka_miary" id="Jednostka_miary" class="block mt-1 w-full bg-slate-700 text-white">
                                        <option selected>Wybierz jednostkę miary</option>
                                        @foreach ($artykuły as $artykuł)
                                            <option class="white" value="{{$artykuł->Jednostka_miary}}">{{ $artykuł->Jednostka_miary }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-5">
                                    <label for="vat"
                                        class=" text-left mb-3 block text-base font-medium text-[#83c41c]">
                                        Vat
                                    </label>
                                    <input type="text"  name="vat" id="vat"
                                        class="w-full rounded-md border border-[#abaab6] py-3 px-6 text-base font-medium text-[#fefeff] outline-none focus:border-[#6A64F1] focus:shadow-md bg-slate-800" />
                                </div>

                                <div class="mb-5">
                                    <label for="Cena_jednostkowa"
                                        class=" text-left mb-3 block text-base font-medium text-[#83c41c]">
                                        Cena Jednostkowa
                                    </label>
                                    <input type="text"  name="Cena_jednostkowa" id="Cena_jednostkowa'" 
                                        class="w-full rounded-md border border-[#abaab6] py-3 px-6 text-base font-medium text-[#fefeff] outline-none focus:border-[#6A64F1] focus:shadow-md bg-slate-800" />
                                </div>

                                <div class="mb-5">
                                    <label for="file"
                                        class=" text-left mb-3 block text-base font-medium text-[#83c41c]">
                                        Wybierz Plik
                                    </label>
                                    <input type="file"  name="file" id="file"
                                        class="w-full rounded-md border 
                                        border-[#abaab6] py-3 px-6 text-base font-medium text-[#83c41c] outline-none 
                                        focus:border-[#6A64F1] focus:shadow-md bg-slate-800" 
                                        
                                        />
                                </div>

                                <div>
                                    <button type="submit"
                                        class="hover:shadow-form rounded-md bg-[#5660ee] py-3 px-8 text-base font-semibold text-white outline-none block">
                                        Stworz
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>