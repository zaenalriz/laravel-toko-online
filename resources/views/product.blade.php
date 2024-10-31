@extends('layouts.master')

@section('content')
    <div class="slider-sub ">
        <div class="bg-img"> <img src="{{ asset('banner/banner.jpg') }}" alt="banner"></div>
        <div class="container">
            <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white" href="index.html">Home</a><i
                    class="ph ph-caret-double-right text-white"></i>
                <div class="caption1 text-white">Produk Kami</div>
            </div>
            <div class="text-nav">
                <div class="heading3 text-white">Produk Kami</div>
                <div class="sub-heading mt-8 text-white fw-400">Banyak bermacam produk yang menarik disini!</div>
            </div>
        </div>
    </div>
    <div class="case-studies-block style-two mt-100">
        <div class="container">
            <div class="list-nav flex-center gap-8">
                <a href="{{ route('product') }}">
                    <div class="nav-item text-button-small  text-secondary pt-8 pb-8 pl-20 pr-20 pointer">Semua</div>
                </a>
                @foreach ($category as $item)
                    <a href="{{ route('product') }}?category={{ $item->id }}">
                        <div class="nav-item text-button-small  text-secondary pt-8 pb-8 pl-20 pr-20 pointer">
                            {{ $item->title }}</div>
                    </a>
                @endforeach
            </div>
            <div class="row mt-40 row-gap-40 mb-5">
                @foreach ($product as $item)
                    <div class="col-12 col-xl-4 col-sm-6 item-filter">
                        <div class="item-main">
                            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block"
                                    src="{{ asset($item->file) }}" alt=""></div>
                            <div class="infor bg-white bora-8 pt-24">
                                <p>{{ $item->title }}</p>
                                <b class=" text-black mt-8">Rp {{ number_format($item->price - $item->discount) }}
                                    @if ($item->discount > 0)
                                        <del>Rp {{ number_format($item->price) }}</del>
                                    @endif
                                </b>
                                <br>
                                <a  href="https://api.whatsapp.com/send?phone=62898387373&text=hallo saya ingin membeli produk {{$item->title}}" class="text-blue">Order Wa</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
