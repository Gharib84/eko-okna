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
                    {{ __('List artykuły') }}

                    @if (count($artykuły) == 0)
                        <div role="alert" x-data="{ show: true }" x-show="show" id="alert-session"
                            class="w-full bg-fuchsia-500 mb-2 py-2 text-center">

                            <span class="mt-3 text-xl text-white text-center font-bold w-full">

                                Nie Ma Artykuły

                            </span>

                        </div>
                    @endif

                    <div class="text-green-400">
                        <ul>
                            @foreach ($artykuły as $artykuł)
                                <li class="list-disc">
                                    {{ $artykuł->nazwa }}
                                </li>
                            @endforeach
                        </ul>

                    </div>


                    @if (count($artykuły) == 0)
                        <a href="{{ route('artykuł.create') }}" class="underline text-blue-300 block mt-2">Tworzenie
                            artykułu</a>


                </div>
                @endif

            </div>
        </div>
    </div>
    </div>



</x-app-layout>
