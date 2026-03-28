@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>Create Product</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="gallery__area bg-style">
                <div class="gallery__content">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-one" role="tabpanel">
                            <form enctype="multipart/form-data" method="POST" action="{{ route('admin.products.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-vertical__item bg-style">

                                            <!-- Product Name -->
                                            <div class="input__group mb-25">
                                                <label for="en_name">Product Name</label>
                                                <input type="text" id="en_name" name="en_name" value="{{ old('en_name') }}" placeholder="Product name">
                                            </div>

                                            <!-- Category -->
                                            <div class="input__group mb-25">
                                                <label for="category_id">Category</label>
                                                <select name="category_id" id="category_id">
                                                    <option value="">-- Select Category --</option>
                                                    @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->en_category_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <!-- Brand -->
                                            <div class="input__group mb-25">
                                                <label for="brand_id">Brand</label>
                                                <select name="brand_id" id="brand_id">
                                                    <option value="">-- Select Brand --</option>
                                                    @foreach($brands as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->en_brand_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <!-- Description -->
                                            <div class="input__group mb-25">
                                                <label for="en_desc">Description</label>
                                                <textarea id="en_desc" name="en_desc" placeholder="Description">{{ old('en_desc') }}</textarea>
                                            </div>

                                            <!-- Shipping Info -->
                                            <div class="input__group mb-25">
                                                <label for="en_shipping">Shipping Info</label>
                                                <textarea id="en_shipping" name="en_shipping" placeholder="Shipping information">{{ old('en_shipping') }}</textarea>
                                            </div>

                                            <!-- Additional Info -->
                                            <div class="input__group mb-25">
                                                <label for="en_additional_info">Additional Info</label>
                                                <textarea id="en_additional_info" name="en_additional_info" placeholder="Additional information">{{ old('en_additional_info') }}</textarea>
                                            </div>

                                            <!-- Price -->
                                            <div class="input__group mb-25">
                                                <label for="price">Price</label>
                                                <input type="text" id="price" name="price" value="{{ old('price') }}" placeholder="Price">
                                            </div>

                                            <!-- Discount -->
                                            <div class="input__group mb-25">
                                                <label for="discount">Discount (%)</label>
                                                <input type="text" id="discount" name="discount" value="{{ old('discount') }}" placeholder="Discount in %">
                                            </div>

                                            <!-- Discounted Price -->
                                            <div class="input__group mb-25">
                                                <label for="discounted_price">Discounted Price</label>
                                                <input type="text" id="discounted_price" name="discounted_price" value="{{ old('discounted_price') }}" placeholder="Discounted price">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="quantity">Quantity</label>
                                                <input type="number" id="quantity" name="quantity" value="{{ old('quantity', 0) }}" placeholder="Quantity">
                                            </div>

                                            <!-- Product Image -->
                                            <div class="input__group mb-25">
                                                <label for="thumb">Product Image</label>
                                                <input type="file" class="putImage2" name="thumb" id="thumb">
                                            </div>

                                            <!-- Meta Title -->
                                            <div class="input__group mb-25">
                                                <label for="meta_title">Meta Title</label>
                                                <input type="text" id="meta_title" name="meta_title" value="{{ old('meta_title') }}" placeholder="Meta title">
                                            </div>

                                            <!-- Meta Description -->
                                            <div class="input__group mb-25">
                                                <label for="meta_description">Meta Description</label>
                                                <textarea id="meta_description" name="meta_description" placeholder="Meta description">{{ old('meta_description') }}</textarea>
                                            </div>

                                            <!-- Meta Keywords -->
                                            <div class="input__group mb-25">
                                                <label for="meta_keywords">Meta Keywords</label>
                                                <input type="text" id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords') }}" placeholder="Meta keywords">
                                            </div>

                                            <!-- Status -->
                                            <div class="input__group mb-25">
                                                <label for="status">Status</label>
                                                <select name="status" id="status">
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>



                                            {{-- Feature Flags --}}
                                            <div class="input__group mb-25">
                                                <label><input type="checkbox" name="is_featured"
                                                        value="1"> Featured</label><br>
                                                <label><input type="checkbox" name="is_best_selling"
                                                        value="1"> Best Selling</label><br>
                                                <label><input type="checkbox" name="is_new_arrival"
                                                        value="1"> New Arrival</label><br>
                                                <label><input type="checkbox" name="is_onsale"
                                                        value="1"> On Sale</label>
                                            </div>

                                            <!-- Submit -->
                                            <div class="input__button">
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