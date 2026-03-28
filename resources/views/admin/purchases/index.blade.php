@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">

    <!-- Breadcrumb -->
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>Purchase List</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Purchases</li>
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
                    <a href="{{ route('admin.purchase.create') }}" class="btn btn-md btn-info">
                        Add Purchase
                    </a>
                </div>

                <div class="customers__table">
                    <table class="table-style dataTable">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Supplier Name</th>
                                <th>Invoice No</th>
                                <th>Supplier</th>
                                <th>Total Amount</th>
                                <th>Purchase Date</th>
                                <th>Notes</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($purchases as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $data->SupplierName->name ?? 'N/A' }}</td>

                                <td>{{ $data->invoice_number ?? 'N/A' }}</td>

                                <td>
                                    {{ $data->supplier->name ?? 'N/A' }}
                                </td>

                                <td>{{ $data->total_amount ?? '0.00' }}</td>

                                <td>{{ $data->purchase_date ?? 'N/A' }}</td>

                                <td>
                                    {{ \Illuminate\Support\Str::limit($data->notes, 40) }}
                                </td>

                                <td>
                                    <div class="action_buttons">

                                        <!-- Edit -->
                                        <a href="{{ route('admin.purchase.edit', $data->id) }}" class="btn-action">
                                            <i class="fas fa-pencil"></i>
                                        </a>

                                        <!-- Delete -->
                                        <form action="{{ route('admin.purchase.destroy', $data->id) }}" method="POST" style="display:inline-block;">
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

@push('scripts')
@endpush