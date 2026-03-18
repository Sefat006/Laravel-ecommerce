@extends('admin.layouts.app')



@section('content')


<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>Categories List</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Categories List</li>
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
                    <a href="{{ route('admin.category.create') }}" class="btn btn-md btn-info">
                        Add Category
                    </a>
                </div>

                <div class="customers__table">
                    <table class="table-style dataTable">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Category Name(quantity)</th>
                                <th>Slug</th>
                                <th>Icon</th>
                                <th>Short Info</th>
                                <th>Description</th>
                                <th>Meta Title</th>
                                <th>Meta Description</th>
                                <th>Meta Keywords</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($categories as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $data->en_category_name }} {{ $data->prd_count ?? "0" }}</td>

                                <td>{{ $data->slug }}</td>

                                <td>
                                        <img width="50" src="{{ asset('front/assets/images/'.$data->icon) }}" alt="icon">
                                </td>

                                <td>{{ $data->en_short_info }}</td>

                                <td>
                                    {{ Str::limit($data->desc, 50) }}
                                </td>
                                <td>
                                    {{ $data->meta_title }}
                                </td>
                                <td>
                                    {{ $data->meta_description }}
                                </td>
                                <td>
                                    {{ $data->keyword }}
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
                                        <a href="{{ route('admin.category.edit', $data->id) }}" class="btn-action">
                                            <i class="fas fa-pencil"></i>
                                        </a>

                                        <!-- Delete -->
                                        <form action="{{ route('admin.category.destroy', $data->id) }}" method="POST" style="display:inline-block;">
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
