<div class="mx-auto">
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

    <!--To Jest Admin UI-->
    <a href="{{ route('rejester') }}" class="underline text-yellow-300">Tworzenie użytkownika</a>

    <a href="{{ route('magazyny.create') }}" class="underline text-blue-300 block mt-2">Tworzenie Magazyny</a>

    <a href="{{ route('artykuł.create') }}" class="underline text-blue-300 block mt-2">Tworzenie artykułu</a>

    <a href="{{route('artykuł.index')}}" class="underline block mt-2">artykuły List</a>
</div>
