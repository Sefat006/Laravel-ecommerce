@extends('front.layouts.app')

@section('title', $data->meta_title)
@section('description', $data->meta_description)
@section('keywords', $data->meta_keywords)

@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{ $data->title }}</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item">
                        <a class="page-item-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="page-item">{{ $data->title }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- about us area start here  -->
    <div class="about-us-area section">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-lg-5 offset-lg-1 col-md-6">
                    <div class="about-us-image">
                        <img 
                            src="{{ asset('front/assets/images/about_us_page/'.$data->image) }}" 
                            alt="{{ $data->title }}" 
                        />
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="about-us-content">
                        <div class="section-header-area">
                            <h3 class="sub-title">
                                {{ $data->title }}
                            </h3>
                            <h2 class="section-title">
                                {{ $data->meta_title ?? 'Innovative solutions' }} <br />
                                to boost your projects
                            </h2>
                        </div>

                        <div class="about-us-text">
                            {!! nl2br(e($data->description)) !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
