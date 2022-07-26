@php
$linkFooterComics = ['Characters', 'Comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'Fans', 'news', 'shop'];
$linkFooterShop = ['Shop Dc', 'shop dc collectibles'];
$linkFooterDc = ['Characters', 'Comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'Fans', 'news', 'shop'];
$linkFooterSites = ['Characters', 'Comics', 'movies', 'tv', 'games', 'collectibles'];
@endphp

<div class="container">
    <div class="row justify-content-between">
        <div class="col-5 py-5">
            <div class="row">
                <div class="col">
                    <h4 class="text-uppercase fw-bold text-start">dc comics</h4>
                    <ul class="list-unstyled">
                        @foreach ($linkFooterComics as $link)
                        <li class="p-1 text-menu" >
                            {{ $link }}
                        </li>
                        @endforeach
                    </ul>
                    <h4 class="text-uppercase fw-bold text-start">Shop</h4>
                    <ul class="list-unstyled">
                        @foreach ($linkFooterShop as $link)
                        <li class="p-1 text-menu">
                            {{ $link }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col">
                    <h4 class="text-uppercase fw-bold text-start">dc</h4>
                    <ul class="list-unstyled">
                        @foreach ($linkFooterDc as $link)
                        <li class="p-1 text-menu">
                            {{ $link }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col">
                    <h4 class="text-uppercase fw-bold text-start">sites</h4>
                    <ul class="list-unstyled">
                        @foreach ($linkFooterSites as $link)
                        <li class="p-1 text-menu">
                            {{ $link }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col dc-logo-bg">

        </div>
    </div>
</div>
