@extends('admin.layouts.app')



@section('content')


<!-- Container Fluid-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb__content">
                    <div class="breadcrumb__content__left">
                        <div class="breadcrumb__title">
                            <h2>Create FAQ</h2>
                        </div>
                    </div>
                    <div class="breadcrumb__content__right">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Create FAQ</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="gallery__area bg-style">
                    <div class="gallery__content">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                                <form enctype="multipart/form-data" method="POST" action="{{ route('admin.faq.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-vertical_item bg-style">

                                                <div class="input_group mb-25">
                                                    <label for="question">Question</label>
                                                    <input type="text" id="question" name="question" value="" placeholder="question">
                                                </div>

                                                <div class="input_group mb-25">
                                                    <label for="answer">Answer</label>
                                                    <textarea id="answer" name="answer" placeholder="answer"></textarea>
                                                </div>

                                                <div class="input_button">
                                                    <button type="submit" class="btn btn-blue">Create</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

