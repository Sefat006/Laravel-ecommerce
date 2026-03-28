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
                            <h2>Edit/Update Supplier</h2>
                        </div>
                    </div>
                    <div class="breadcrumb__content__right">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Supplier</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form -->
        <div class="row">
            <div class="col-md-12">
                <div class="gallery__area bg-style">
                    <div class="gallery__content">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">

                                <form method="POST" action="{{ route('admin.supplier.update', $supplier->id) }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-vertical__item bg-style">

                                                <div class="input__group mb-25">
                                                    <label for="name">Name</label>
                                                    <input type="text" id="name" name="name"
                                                        value="{{ $supplier->name }}" placeholder="Supplier Name" required>
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="email">Email</label>
                                                    <input type="email" id="email" name="email"
                                                        value="{{ $supplier->email }}" placeholder="Supplier Email">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="phone">Phone</label>
                                                    <input type="text" id="phone" name="phone"
                                                        value="{{ $supplier->phone }}" placeholder="Supplier Phone">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="address">Address</label>
                                                    <textarea id="address" name="address" placeholder="Supplier Address">{{ $supplier->address }}</textarea>
                                                </div>

                                                <div class="input__button">
                                                    <button type="submit" class="btn btn-blue">Update Supplier</button>
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

