@extends('admin.layouts.app')



@section('content')


<div class="container-fluid">


    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>Transactions</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <a href="{{ route('admin.dashboard') }}">Home</a>
                            <li class="breadcrumb-item active" aria-current="page">Transactions</li>
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
                <div class="customers__table">
                    <div id="AdvertiseTable_wrapper" class="dataTables_wrapper no-footer">
                        <div class="dataTables_length" id="AdvertiseTable_length"><label>Show <select
                                    name="AdvertiseTable_length" aria-controls="AdvertiseTable"
                                    class="">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> entries</label></div>
                        <div id="AdvertiseTable_filter" class="dataTables_filter"><label>Search:<input
                                    type="search" class="" placeholder=""
                                    aria-controls="AdvertiseTable"></label></div>
                        <div id="AdvertiseTable_processing" class="dataTables_processing"
                            style="display: none;">Processing...</div>
                        <table id="AdvertiseTable"
                            class="row-border data-table-filter table-style dataTable no-footer"
                            role="grid" aria-describedby="AdvertiseTable_info" style="width: 1195px;">
                            <thead>
                                <tr role="row">
                                    <th>SL</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="AdvertiseTable"
                                        rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="Customer Email: activate to sort column descending"
                                        style="width: 161px;">Customer Email</th>
                                    <th class="sorting" tabindex="0" aria-controls="AdvertiseTable"
                                        rowspan="1" colspan="1"
                                        aria-label="Transactions ID: activate to sort column ascending"
                                        style="width: 244px;">Transactions ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="AdvertiseTable"
                                        rowspan="1" colspan="1"
                                        aria-label="Order Status: activate to sort column ascending"
                                        style="width: 220px;">Order Status</th>
                                    <th class="sorting" tabindex="0" aria-controls="AdvertiseTable"
                                        rowspan="1" colspan="1"
                                        aria-label="Payment Method: activate to sort column ascending"
                                        style="width: 244px;">Payment Method</th>
                                    <th class="sorting" tabindex="0" aria-controls="AdvertiseTable"
                                        rowspan="1" colspan="1"
                                        aria-label="Total Amount: activate to sort column ascending"
                                        style="width: 126px;">Total Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transactions as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->user->email  ?? 'Guest'}}</td>
                                    <td>{{ $data->transaction_id ?? "N/A" }}</td>
                                    <td><span class="status bg-primary-light-varient">{{ $data->order_status ?? ""}}</span>
                                    </td>
                                    <td>{{ $data->payment_method ?? ""}}</td>
                                    <td>{{ $data->subtotal_amount ?? "0.00"}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection


@push('scripts') <!-- to app.blade.php, all the pages where "Add to Cart" button is placed -->

@endpush