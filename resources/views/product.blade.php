@extends('master')

@section('content')

<div class="container mb-7">
    <div class="bd-example mx-2 mb-4">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($products as $product)
                <div class="carousel-item slider {{$product['id']==1? 'active' : ''}}">
                    <a href="detail/{{$product['id']}}">
                        <img class="img-slider" src="{{$product['image']}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{$product['name']}}</h5>
                            <p>{{$product['description']}}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="trending-wrapper mx-2 ">
        <h3>Trending Products</h3>
        <div class="trending-section mb-4">
            @foreach($products as $product)
            <div class="trending-item">
                <a href="detail/{{$product['id']}}">
                    <img class="img-trending" src="{{$product['image']}}" class="d-block w-100" alt="...">
                    <h6>{{$product['name']}}</h6>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection