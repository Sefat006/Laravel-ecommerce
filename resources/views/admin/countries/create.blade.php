@extends('admin.layouts.app')

@section('content')

<!-- Container Fluid-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>Create Country</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Country</li>
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
                        <div class="tab-pane fade show active" id="nav-one" role="tabpanel">

                            <form method="POST" action="{{ route('admin.countries.store') }}">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-vertical__item bg-style">

                                            <div class="input__group mb-25">
                                                <label for="name">Country Name</label>
                                                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Country name">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="code">Country Code</label>
                                                <input type="text" id="code" name="code" value="{{ old('code') }}" placeholder="Country code (e.g. BD, US)">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="tax_rate">Tax Rate (%)</label>
                                                <input type="number" step="0.01" id="tax_rate" name="tax_rate" value="{{ old('tax_rate') }}" placeholder="Tax rate">
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