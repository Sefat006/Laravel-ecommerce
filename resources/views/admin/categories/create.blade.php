@extends('admin.layouts.app')



@section('content')


<!-- Container Fluid-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb__content">
                    <div class="breadcrumb__content__left">
                        <div class="breadcrumb__title">
                            <h2>Create Category</h2>
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
                                <form enctype="multipart/form-data" method="POST" action="{{ route('admin.category.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-vertical__item bg-style">

                                                <div class="input__group mb-25">
                                                    <label for="en_category_name">Category Name</label>
                                                    <input type="text" id="en_category_name" name="en_category_name" value="" placeholder="Category name">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="en_short_info">Short Info</label>
                                                    <input type="text" id="en_short_info" name="en_short_info" value="" placeholder="Short info">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="desc">Description</label>
                                                    <textarea id="desc" name="desc" placeholder="Description"></textarea>
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="meta_title">Meta Title</label>
                                                    <input type="text" id="meta_title" name="meta_title" placeholder="Meta title">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="meta_dsc">Meta Description</label>
                                                    <textarea id="meta_dsc" name="meta_dsc" placeholder="Meta description"></textarea>
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="meta_keywords">Meta Keywords</label>
                                                    <input type="text" id="meta_keywords" name="meta_keywords" placeholder="Meta keywords">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="image">Image</label>
                                                    <input type="file" class="putImage2" name="image" id="image">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="status">Status</label>
                                                    <select name="status" id="status">
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>

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

