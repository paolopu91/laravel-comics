@php
    $currentCardDc = config("comics");
@endphp

<div class="bg-dark-gray">
    <div class="container text-center py-5 position-relative">
        <div class="title-card-container">Current Series</div>
        <div class="row row-cols-6 justify-content-center py-4">
            @foreach ($currentCardDc as $DcCard)
            <div class="col my-3" >
                @include('partials.TheCardDc')
            </div>
            @endforeach
        </div>
        <button class="btn btn-primary">Load More</button>
    </div>
</div>