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
                            <h2>Edit/Update User</h2>
                        </div>
                    </div>
                    <div class="breadcrumb__content__right">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">User</li>
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
                        <div class="tab-content">
                            <div class="tab-pane fade show active">

                                <form enctype="multipart/form-data" method="POST"
                                    action="{{ route('admin.user.update', $user->id) }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-vertical__item bg-style">

                                                <!-- Name -->
                                                <div class="input__group mb-25">
                                                    <label>Name</label>
                                                    <input type="text" name="name"
                                                        value="{{ $user->name }}"
                                                        placeholder="User name">
                                                </div>

                                                <!-- Email -->
                                                <div class="input__group mb-25">
                                                    <label>Email</label>
                                                    <input type="email" name="email"
                                                        value="{{ $user->email }}"
                                                        placeholder="Email">
                                                </div>

                                                <!-- New Password -->
                                                <div class="input__group mb-25">
                                                    <label>New Password (optional)</label>
                                                    <input type="password" name="password" placeholder="Enter new password">
                                                </div>

                                                <!-- Confirm Password -->
                                                <div class="input__group mb-25">
                                                    <label>Confirm Password</label>
                                                    <input type="password" name="password_confirmation" placeholder="Confirm password">
                                                </div>

                                                <!-- Image -->
                                                <div class="input__group mb-25">
                                                    <label>Image</label>
                                                    <input type="file" name="image">

                                                    @if($user->image)
                                                    <img width="80"
                                                        src="{{ asset('front/assets/images/'.$user->image) }}">
                                                    @endif
                                                </div>

                                                <!-- Status -->
                                                <div class="input__group mb-25">
                                                    <label>Status</label>
                                                    <select name="status">
                                                        <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>
                                                            Active
                                                        </option>
                                                        <option value="0" {{ $user->status == 0 ? 'selected' : '' }}>
                                                            Inactive
                                                        </option>
                                                    </select>
                                                </div>

                                                <div class="input__button">
                                                    <button type="submit" class="btn btn-blue">
                                                        Update
                                                    </button>
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

@push('scripts')
@endpush