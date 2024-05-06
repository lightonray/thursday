@extends('layouts.app')

@section('content')
<div class="wrapper d-flex flex-column h-100">
    <div class="main-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="explore-list-items">
                        <div class="featured-controls">
                            <ul>
                                <li class="active" data-filter="*">All</li>
                                @foreach($symbols as $symbol)
                                     <li data-filter=".{{ strtolower($symbol->symbol) }}" class="">{{ $symbol->symbol }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="row featured-filter" id="MixItUp72DBFA">
                            @foreach($strategies as $strategy)
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mix {{ $strategy->category }}">
                                <div class="main-card mt-30">
                                    <a href="item_view.html" class="nft-img">
                                        <img src="https://picsum.photos/800/1000" alt="">
                                    </a>
                                    <div class="item-detail-group">
                                        <div class="item-creators-options">
                                            <div class="item-creators-group">
                                                <div>
                                                    <h5>{{ $strategy->name }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-text-dt">
                                            <a href="#" class="item-title">Free</a>
                                            <div class="item-text-bottom">
                                                <button class="btn btn-primary">Add Strategy</button>
                                                <span class="like-btn"><i class="uil uil-heart"></i><ins>45</ins></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-sm-12 text-center">
                                <button class="main-btn btn-hover h-40 mt-5 mb-3">Load More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
