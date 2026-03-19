@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>Customers List</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Customers List</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="customers__area bg-style mb-30">

                <div class="customers__table">
                    <table class="table-style dataTable">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Zip Code</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($customers as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    @if($data->image)
                                        <img width="50" src="{{ asset('uploads/users/'.$data->image) }}" alt="user-image" style="border-radius: 50%;">
                                    @else
                                        <img width="50" src="{{ asset('admin/assets/images/default-user.png') }}" alt="default">
                                    @endif
                                </td>

                                <td>{{ $data->name }}</td>
                                
                                <td>{{ $data->email }}</td>

                                <td>{{ $data->phone }}</td>

                                <td>{{ $data->address }}</td>

                                <td>{{ $data->zipcode }}</td>

                                <td>
                                    <div class="action_buttons">

                                        <a href="{{ route('admin.customer.edit', $data->id) }}" class="btn-action">
                                            <i class="fas fa-pencil"></i>
                                        </a>

                                        <form action="{{ route('admin.customer.destroy', $data->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-action"
                                                onclick="return confirm('Are you sure you want to delete this customer?')"
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

<!-- @push('scripts')

@endpush -->