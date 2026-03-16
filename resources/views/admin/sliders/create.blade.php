@extends('admin.layouts.app')



@section('content')


<!-- Container Fluid-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb__content">
                    <div class="breadcrumb__content__left">
                        <div class="breadcrumb__title">
                            <h2>Create Slider</h2>
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
                                <form enctype="multipart/form-data" method="POST" action="{{ route('admin.sliders.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-vertical_item bg-style">

                                                <div class="input_group mb-25">
                                                    <label for="title">Title</label>
                                                    <input type="text" id="title" name="title" value="" placeholder="Title">
                                                </div>

                                                <div class="input_group mb-25">
                                                    <label for="subtitle">Sub Title</label>
                                                    <input type="text" id="subtitle" name="subtitle" value="" placeholder="Sub Title">
                                                </div>

                                                <div class="input_group mb-25">
                                                    <label for="description">Description</label>
                                                    <textarea id="description" name="description" placeholder="Description"></textarea>
                                                </div>

                                                <div class="input_group mb-25">
                                                    <label for="link">Link</label>
                                                    <input type="text" id="link" name="link" placeholder="link">
                                                </div>

                                                <div class="input_group mb-25">
                                                    <label for="image">Image</label>
                                                    <input type="file" class="putImage2" name="image" id="image">
                                                </div>

                                                <div class="input_group mb-25">
                                                    <label for="status">Status</label>
                                                    <select name="status" id="status">
                                                        <option value="1">Active</option>
                                                        <option value="2">Inactive</option>
                                                    </select>
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

