@extends('admin.layouts.app')

@section('content')

<!-- Container Fluid-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>Create State</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">State</li>
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
                        <div class="tab-pane fade show active" id="nav-one">

                            <form method="POST" action="{{ route('admin.states.store') }}">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-vertical__item bg-style">

                                            <!-- State Name -->
                                            <div class="input__group mb-25">
                                                <label for="name">State Name</label>
                                                <input type="text" id="name" name="name"
                                                    value="{{ old('name') }}" placeholder="State name">
                                            </div>

                                            <!-- Country -->
                                            <div class="input__group mb-25">
                                                <label for="country_id">Country</label>
                                                <select name="country_id" id="country_id">
                                                    <option value="">Select Country</option>
                                                    @foreach($countries as $data)
                                                        <option value="{{ $data->id }}">
                                                            {{ $data->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <!-- Shipping Charge -->
                                            <div class="input__group mb-25">
                                                <label for="shipping_charge">Shipping Charge</label>
                                                <input type="text" id="shipping_charge" name="shipping_charge"
                                                    value="{{ old('shipping_charge') }}" placeholder="Shipping charge">
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