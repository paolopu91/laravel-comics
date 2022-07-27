@extends('layouts.app');

@section('page_title', $DcCard["title"])

@section('page_content')
    @include('jumbotron')

    <div class="new-section">
        <div class="bg-primary blu-section">
            <div class="container">
                <div class="card-dc-position">
                    <img src=" {{$DcCard['thumb']}} " alt=" {{$DcCard ['title']}} ">
                </div>
            </div>
        </div>

        <div class="container pt-5">
            <h2 class="text-primary">{{$DcCard['title']}}</h2>
            <div class="row">

                <div class="col">
                    <div class="container-green">
                        <div>
                            {{-- container left --}}
                            <div class="d-flex justify-content-around">
                                <span>{{ "U.S. Price" . $DcCard ['price']}}</span>
                                <span> {{"AVAILABLE"}} </span>
                                <span>Check Availability</span>
                            </div>

                            {{-- description --}}
                            <div class="py-5">
                                <p>
                                    {{$DcCard['description']}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="{{$DcCard ['thumb']}}" alt="">
                    </div>
                </div>
            </div>
        </div>

        {{-- border bottom div --}}
        <div class="border-bottom"></div>

        {{-- container talent e specs --}}
        <div class="container pt-5 text-primary pb-5">
            <div class="row">
                <div class="col">
                    <h6 class="">TALENT</h6>

                    <div class="border-bottom"></div>

                    <div class="d-flex justify-content-between">
                        <div class="pt-3">
                            <h6>Artist:</h6>
                        </div>
                        <div class="pt-3 artist-names">
                            <p>{{ implode(',', $DcCard['artists']) }}</p>
                        </div>
                    </div>

                    <div class="border-bottom"></div>

                    <div class="d-flex justify-content-between">

                        <div class="pt-3">
                            <h6>Written By:</h6>
                        </div>

                        <div class="pt-3 writers-names">
                            <p>{{ implode(',', $DcCard['writers']) }}</p>
                        </div>

                    </div>

                </div>
                <div class="col">
                    <h6>Specs</h6>

                    <div class="border-bottom"></div>

                    <div class="d-flex justify-content-between">
                        <div class="pt-3">
                            <h6>Series:</h6>
                        </div>
                        <div class="pt-3 artist-names">
                            <p>{{ $DcCard['series'] }}</p>
                        </div>
                    </div>
                    <div class="border-bottom"></div>
                    <div class="d-flex justify-content-between">
                        <div class="pt-3">
                            <h6>U.S. Price:</h6>
                        </div>
                        <div class="pt-3 artist-names">
                            <p>{{ $DcCard['price'] }}</p>
                        </div>
                    </div>
                    <div class="border-bottom"></div>   
                    <div class="d-flex justify-content-between">
                        <div class="pt-3">
                            <h6>On Sale Date:</h6>
                        </div>
                        <div class="pt-3 artist-names">
                            <p>{{"Oct 02 2018"}}</p>
                        </div>
                    </div>
                    <div class="border-bottom"></div>

                </div>
            </div>
        </div>

        {{-- border bottom div --}}
        <div class="border-bottom"></div>
        
        
    </div>
@endsection
    
