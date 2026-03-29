@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">

    <!-- Breadcrumb -->
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>Stock Status</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Current Stock</li>
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
                    <table class="table-style dataTable" style="width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr>
                                <th style="width: 1%; white-space: nowrap; padding-right: 20px;">SL</th>
                                <th style="text-align: left;">Product Name</th>
                                <th>Category</th>
                                <th>Stock In</th>
                                <th >Stock Out</th>
                                <th >Current</th>
                                <th >Min. Stock</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($products as $product)
                            @php
                            $isLowStock = $product->current_stock < ($product->minimum_stock ?? 0);
                                @endphp
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td >{{ $product->en_name ?? 'N/A' }}</td>
                                    <td >{{ $product->category->en_category_name ?? 'N/A' }}</td>
                                    <td >{{ $product->stock_in ?? 0 }}</td>
                                    <td >{{ $product->stock_out ?? 0 }}</td>
                                    <td >{{ $product->current_stock ?? 0 }}</td>
                                    <td >{{ $product->minimum_stock ?? 0 }}</td>
                                    <td>
                                        @if($isLowStock)
                                        <span style="display:inline-block; background-color:#f87171; color:white; font-size:10px; padding:2px 8px; border-radius:4px;">Low</span>
                                        @else
                                        <span style="display:inline-block; background-color:#4ade80; color:white; font-size:10px; padding:2px 8px; border-radius:4px;">OK</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.stock.create') }}"
                                            class="btn btn-sm btn-warning"
                                            style="font-size:10px; padding:2px 8px; white-space: nowrap;">Reorder</a>
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