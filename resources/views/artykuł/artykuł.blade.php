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
                            <form action="{{route('artykuł.store')}}" method="post">
                                @csrf
                                <h1 class="mb-5 font-bold text-lg text-left text-white">
                                  

                                    Tworzenie artykułu
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
                                    <label for="nazwa"
                                        class=" text-left mb-3 block text-base font-medium text-[#83c41c]">
                                        Nazwa artykułu
                                    </label>
                                    <input type="text" name="nazwa" id="nazwa"
                                        class="w-full rounded-md border border-[#abaab6]  py-3 px-6 text-base font-medium text-[#fefeff] outline-none focus:border-[#6A64F1] focus:shadow-md bg-slate-800" />
                                </div>

                                <div class="mb-5">
                                    <label for="Jednostka_miary"
                                        class=" text-left mb-3 block text-base font-medium text-[#83c41c]">
                                        Jednostka miary
                                    </label>
                                    <input type="text" name="Jednostka_miary" id="Jednostka_miary"
                                        class="w-full rounded-md border border-[#abaab6] py-3 px-6 text-base font-medium text-[#fefeff] outline-none focus:border-[#6A64F1] focus:shadow-md bg-slate-800" />
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