    @extends('front.layouts.app')


    @section('title', $data->meta_title)
    @section('description', $data->meta_description)
    @section('keywords', $data->meta_keywords)

    @section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{ $data->title ?? " " }}</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item">
                        <a class="page-item-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="page-item">{{ $data->title ?? " " }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- privacy-policy-area start here  -->
    <div class="privacy-policy-area section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="privacy-policy-info">
                        <div class="single-privacy-policy">
                            <h3 class="privacy-policy-title">{{ $data->title ?? " "}}</h3>

                            <div class="privacy-policy-text">
                                {!! nl2br(e($data->description ?? " ")) !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- privacy-policy-area end here  -->
    @endsection