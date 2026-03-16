@extends('admin.layouts.app')



@section('content')


<!-- Container Fluid-->
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb__content">
                    <div class="breadcrumb__content__left">
                        <div class="breadcrumb__title">
                            <h2>Edit/Update Slider</h2>
                        </div>
                    </div>
                    <div class="breadcrumb__content__right">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Slider</li>
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
                                <form enctype="multipart/form-data" method="POST" action="{{ route('admin.sliders.update', $slider->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-vertical__item bg-style">
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">Title</label>
                                                    <input type="text" id="title" name="title" value="{{ $slider->title }}" placeholder="Title">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">Sub Title</label>
                                                    <input type="text" id="subtitle" name="subtitle" value="{{ $slider->subtitle }}" placeholder="Sub Title">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="en_description">Description</label>
                                                    <textarea id="description" name="description" placeholder="Description">{{ $slider->description }}</textarea>
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">Link</label>
                                                    <input type="text" value="{{ $slider->link }}" id="link" name="link" placeholder="link">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="background_image">Image</label>
                                                    <input type="file" class="putImage2" name="image" id="image">
                                                    <img width="80" src="{{ asset('front/assets/images/slider/'.$slider->image) }}">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">Status</label>
                                                    <select name="status" id="status">
                                                        <option value="1" {{ $slider->status == 1 ? 'selected' : '' }}>Active</option>
                                                        <option value="2" {{ $slider->status == 2 ? 'selected' : '' }}>Inactive</option>
                                                    </select>
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
</div>

@endsection

@push('scripts') <!-- to app.blade.php, all the pages where "Add to Cart" button is placed -->

@endpush

<!-- <form action="{{route('admin.logout')}}" method="post">
    @csrf
    <label for="logout">Logout</label>
    <input type="submit" value="Logout">
</form> -->