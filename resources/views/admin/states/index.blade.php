@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">

    <!-- Breadcrumb -->
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>States List</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">States List</li>
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

                <!-- Add Button -->
                <div class="item-title">
                    <a href="{{ route('admin.state.create') }}" class="btn btn-md btn-info">
                        Add State
                    </a>
                </div>

                <div class="customers__table">
                    <table class="table-style dataTable">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>State Name</th>
                                <th>Country</th>
                                <th>Shipping Charge</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($states as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $data->name }}</td>

                                <td>
                                    {{ $data->country->name ?? 'N/A' }}
                                </td>

                                <td>{{ $data->shipping_charge }}</td>

                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>

                                <td>
                                    <div class="action_buttons">

                                        <!-- Edit -->
                                        <a href="{{ route('admin.state.edit', $data->id) }}" class="btn-action">
                                            <i class="fas fa-pencil"></i>
                                        </a>

                                        <!-- Delete -->
                                        <form action="{{ route('admin.state.destroy', $data->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="btn-action"
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

@push('scripts')

@endpush