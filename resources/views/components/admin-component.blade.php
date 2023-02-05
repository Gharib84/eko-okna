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
    <a href="{{ route('Tworzenie-użytkownika') }}" class="underline text-yellow-300">Tworzenie użytkownika</a>
</div>
