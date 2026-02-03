@extends('front.layouts.app')

@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">Faq</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a></li>
                    <li class="page-item">Faq</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- faq-area area start here  -->
    <div class="faq-area section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion" id="accordionFaq">
                        @foreach($faqs as $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{$faq->id}}" aria-expanded="true" aria-controls="collapse1">
                                    {{ $faq->en_question ?? ""}}
                                </button>
                            </h2>
                            <div id="collapse{{$faq->id}}" class="accordion-collapse collapse show" aria-labelledby="heading1"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        {{ $faq->en_answer ?? ""}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq-area area end here  -->
@endsection