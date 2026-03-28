@extends('admin.layouts.app')



@section('content')


<!-- Container Fluid-->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb__content">
                    <div class="breadcrumb__content__left">
                        <div class="breadcrumb__title">
                            <h2>Edit/Update Product</h2>
                        </div>
                    </div>
                    <div class="breadcrumb__content__right">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Product</li>
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
                                <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-vertical__item bg-style">

                                                <div class="input__group mb-25">
                                                    <label for="category_id">Category</label>
                                                    <select name="category_id" id="category_id" class="form-control" required>
                                                        @foreach($categories as $category)
                                                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                            {{ $category->en_category_name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="brand_id">Brand</label>
                                                    <select name="brand_id" id="brand_id" class="form-control" required>
                                                        @foreach($brands as $brand)
                                                        <option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : '' }}>
                                                            {{ $brand->en_brand_name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="en_name">Product Name</label>
                                                    <input type="text" id="en_name" name="en_name" value="{{ $product->en_name }}" class="form-control" required>
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="thumb">Thumbnail</label>
                                                    <input type="file" id="thumb" name="thumb" class="form-control">
                                                    @if($product->thumb)
                                                    <div class="mt-10">
                                                        <img width="80" src="{{ asset('front/assets/images/products/' . $product->thumb) }}" alt="Thumbnail">
                                                    </div>
                                                    @endif
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="en_desc">Description</label>
                                                    <textarea id="en_desc" name="en_desc" class="form-control">{{ $product->en_desc }}</textarea>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="input__group mb-25">
                                                            <label for="price">Price</label>
                                                            <input type="number" step="0.01" id="price" name="price" value="{{ $product->price }}" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="input__group mb-25">
                                                            <label for="discount">Discount (%)</label>
                                                            <input type="number" step="0.01" id="discount" name="discount" value="{{ $product->discount }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="input__group mb-25">
                                                            <label for="discounted_price">Discounted Price</label>
                                                            <input type="number" step="0.01" id="discounted_price" name="discounted_price" value="{{ $product->discounted_price }}" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="status">Status</label>
                                                    <select name="status" id="status" class="form-control" required>
                                                        <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Active</option>
                                                        <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Inactive</option>
                                                    </select>
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label>
                                                        <input type="checkbox" name="is_featured" value="1" {{ $product->is_featured ? 'checked' : '' }}> Featured
                                                    </label><br>

                                                    <label>
                                                        <input type="checkbox" name="is_best_selling" value="1" {{ $product->is_best_selling ? 'checked' : '' }}> Best Selling
                                                    </label><br>

                                                    <label>
                                                        <input type="checkbox" name="is_new_arrival" value="1" {{ $product->is_new_arrival ? 'checked' : '' }}> New Arrival
                                                    </label><br>

                                                    <label>
                                                        <input type="checkbox" name="is_onsale" value="1" {{ $product->is_onsale ? 'checked' : '' }}> On Sale
                                                    </label>
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="meta_title">Meta Title</label>
                                                    <input type="text" id="meta_title" name="meta_title" value="{{ $product->meta_title }}" class="form-control">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="meta_description">Meta Description</label>
                                                    <textarea id="meta_description" name="meta_description" class="form-control">{{ $product->meta_description }}</textarea>
                                                </div>

                                                <div class="input__button">
                                                    <button type="submit" class="btn btn-primary">Update Product</button>
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

@push('scripts') <!-- to app.blade.php, all the pages where "Add to Cart" button is placed -->

@endpush

<!-- <form action="{{route('admin.logout')}}" method="post">
    @csrf
    <label for="logout">Logout</label>
    <input type="submit" value="Logout">
</form> -->