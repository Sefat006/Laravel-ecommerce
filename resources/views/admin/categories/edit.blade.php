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
                            <h2>Edit/Update Category</h2>
                        </div>
                    </div>
                    <div class="breadcrumb__content__right">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Category</li>
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
                                <form enctype="multipart/form-data" method="POST" action="{{ route('admin.category.update', $category->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-vertical__item bg-style">

                                                <div class="input__group mb-25">
                                                    <label for="en_category_name">Category Name</label>
                                                    <input type="text" id="en_category_name" name="en_category_name"
                                                        value="{{ $category->en_category_name }}" placeholder="Category name">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="en_short_info">Short Info</label>
                                                    <input type="text" id="en_short_info" name="en_short_info"
                                                        value="{{ $category->en_short_info }}" placeholder="Short info">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="desc">Description</label>
                                                    <textarea id="desc" name="desc" placeholder="Description">{{ $category->desc }}</textarea>
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="meta_title">Meta Title</label>
                                                    <input type="text" id="meta_title" name="meta_title"
                                                        value="{{ $category->meta_title }}" placeholder="Meta title">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="meta_dsc">Meta Description</label>
                                                    <textarea id="meta_dsc" name="meta_dsc" placeholder="Meta description">{{ $category->meta_dsc }}</textarea>
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="meta_keywords">Meta Keywords (comma separated)</label>
                                                    <input type="text" id="meta_keywords" name="meta_keywords"
                                                        value="{{ $category->meta_keywords }}" placeholder="Meta keywords">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="image">Image</label>
                                                    <input type="file" class="putImage2" name="image" id="image">
                                                    @if($category->icon)
                                                    <img width="80" src="{{ asset('front/assets/images/'.$category->icon) }}">
                                                    @endif
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="status">Status</label>
                                                    <select name="status" id="status">
                                                        <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Active</option>
                                                        <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>Inactive</option>
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