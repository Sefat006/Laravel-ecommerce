@extends('admin.layouts.app')



@section('content')


<!-- Container Fluid-->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb__content">
                    <div class="breadcrumb__content__left">
                        <div class="breadcrumb__title">
                            <h2>Edit/Update Page</h2>
                        </div>
                    </div>
                    <div class="breadcrumb__content__right">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Page</li>
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
                                <form enctype="multipart/form-data" method="POST" action="{{ route('admin.page.update', $page->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-vertical__item bg-style">
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">Title</label>
                                                    <input type="text" id="title" name="title" value="{{ $page->title }}" placeholder="Title">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="en_description">Description</label>
                                                    <textarea id="description" name="description" placeholder="Description">{{ $page->description }}</textarea>
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">Meta Title</label>
                                                    <input type="text" value="{{ $page->meta_title }}" id="meta_title" name="meta_title" placeholder="Meta Title">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">Meta keywords</label>
                                                    <input type="text" value="{{ $page->meta_keywords }}" id="meta_keywords" name="meta_keywords" placeholder="Meta keywords">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="en_description">Meta Description</label>
                                                    <textarea id="meta_description" name="meta_description" placeholder="Meta Description">{{ $page->meta_description }}</textarea>
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="background_image">Image</label>
                                                    <input type="file" class="putImage2" name="image" id="image">
                                                    <img width="80" src="{{ asset('front/assets/images/pages/'.$page->image) }}">
                                                </div>

                                                <div class="input__button">
                                                    <button type="submit" class="btn btn-blue">Update</button>
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

@push('scripts')
    <script>
        "use strict";
        $(document).ready(function() {
            $('#description').summernote({
                placeholder: 'Description',
                height: 300
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>
@endpush
