<div class="mx-auto">
    <ul>
        @foreach ($artykuły as $artykuł)
            <li>
                {{$artykuł->nazwa}}
            </li>
        @endforeach
    </ul>
</div>