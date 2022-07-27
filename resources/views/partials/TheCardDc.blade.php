<div>
    <div class="card-image">
        <a href=" {{ route("Dc.show", $DcCard['id']) }} "><img src="{{ $DcCard["thumb"] }}" alt="{{ $DcCard["series"] }}" /></a>
    </div>

    <div class="card-body">
        <div class="card-title text-uppercase">{{ $DcCard["title"] }}</div>
        
        {{-- queste mi serviranno domani, dove dovrò costruire il layout finale --}}
        {{-- <div> {{ $DcCard["description"]}}</div> --}}
        {{-- <div>{{$DcCard["price"]}}</div> --}}
        
    </div>
</div>