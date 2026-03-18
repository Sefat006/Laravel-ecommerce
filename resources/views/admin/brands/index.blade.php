@extends('admin.layouts.app')



@section('content')


<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>Brands List</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Brands List</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="row">
        <div class="col-md-12">
            <div class="customers__area bg-style mb-30">

                <div class="item-title">
                    <a href="{{ route('admin.brand.create') }}" class="btn btn-md btn-info">
                        Add Brand
                    </a>
                </div>

                <div class="customers__table">
                    <table class="table-style dataTable">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Brand Name</th>
                                <th>Slug</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($brands as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $data->en_brand_name }}</td>

                                <td>{{ $data->slug }}</td>

                                <td>
                                    @if($data->image)
                                        <img width="50" src="{{ asset('front/assets/images/brands/'.$data->image) }}" alt="brand">
                                    @else
                                        <span>No Image</span>
                                    @endif
                                </td>

                                <td>
                                    @if($data->status == 1)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-secondary">Inactive</span>
                                    @endif
                                </td>

                                <td>
                                    <div class="action_buttons">

                                        <!-- Edit -->
                                        <a href="{{ route('admin.brand.edit', $data->id) }}" class="btn-action">
                                            <i class="fas fa-pencil"></i>
                                        </a>

                                        <!-- Delete -->
                                        <form action="{{ route('admin.brand.destroy', $data->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-action"
                                                onclick="return confirm('Are you sure?')"
                                                style="border:none;background:none;">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>

                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection


@push('scripts') <!-- to app.blade.php, all the pages where "Add to Cart" button is placed -->

@endpush
