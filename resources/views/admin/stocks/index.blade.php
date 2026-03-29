@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">

    <!-- Breadcrumb -->
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>Stock List</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Stocks</li>
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
               

                <div class="customers__table">
                    <table class="table-style dataTable">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Product Name</th>
                                <th>Stock Type</th>
                                <th>Quantity</th>
                                <th>Reference Type</th>
                                <th>Reference ID</th>
                                <th>Note</th>
                                <th>Purchase Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($stocks as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $data->productName->en_name ?? 'N/A' }}</td>

                                <td>{{ ucfirst($data->stock_type) ?? 'N/A' }}</td>

                                <td>{{ $data->quantity ?? '0' }}</td>

                                <td>{{ $data->reference_type ?? 'N/A' }}</td>

                                <td>{{ $data->reference_id ?? 'N/A' }}</td>

                                <td>{{ $data->purchase_name?->notes ?? 'N/A' }}</td>

                                <td>{{ $data->stock_date ?? 'N/A' }}</td>

                                <td>
                                    <div class="action_buttons">

                                        <!-- Edit -->
                                      
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