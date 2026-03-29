@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>Create Purchase</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Purchase</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('admin.purchases.store') }}">
        @csrf

        <div class="row">
            <div class="col-md-12">
                <div class="form-vertical__item bg-style">
                    <div class="item-title">
                        <h4>Purchase Information</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input__group mb-25">
                                <label>Supplier <span class="text-danger">*</span></label>
                                <select name="supplier_id" class="form-control">
                                    <option value="">-- Select Supplier --</option>
                                    @foreach($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input__group mb-25">
                                <label>Invoice Number</label>
                                <input type="text" name="invoice_number" placeholder="INV-001">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input__group mb-25">
                                <label>Purchase Date <span class="text-danger">*</span></label>
                                <input type="date" name="purchase_date" value="{{ date('Y-m-d') }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input__group mb-25">
                                <label>Notes</label>
                                <textarea name="notes" rows="2" placeholder="Optional notes"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-30">
            <div class="col-md-12">
                <div class="customers__area bg-style">
                    <div class="item-title d-flex justify-content-between align-items-center">
                        <h4>Add Products</h4>
                    </div>

                    <div class="table-responsive">
                        <table class="table-style" id="productTable" style="width: 100%; border-collapse: collapse;">
                            <thead>
                                <tr>
                                    <th style="width: 45%;">Product</th>
                                    <th style="width: 120px;" class="text-center">Qty</th>
                                    <th style="width: 150px;" class="text-center">Price</th>
                                    <th style="width: 150px;" class="text-center">Subtotal</th>
                                    <th style="width: 80px;" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <select name="product_id[]" class="form-control" style="width: 100%;" required>
                                            <option value="">Select Product</option>
                                            @foreach($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->en_name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input type="number" name="quantity[]" class="qty text-center" value="1" min="1" style="width: 100%;">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" name="price[]" class="price text-center" placeholder="0.00" style="width: 100%;">
                                    </td>
                                    <td>
                                        <input type="text" class="subtotal text-center" value="0.00" readonly style="width: 100%;">
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-danger btn-sm removeRow">X</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" id="addRow" class="btn btn-info btn-sm mb-20">+ Add Row</button>
                    </div>

                    <div class="justify-content-start mb-20">
                        <div class="col-md-4">
                            <div class="input__group">
                                <label class="fw-bold">Grand Total</label>
                                <input type="text" name="total_amount" id="totalAmount" class="form-control text-center fw-bold" readonly value="0.00">
                            </div>
                        </div>
                    </div>

                    <div class="input__button mt-20">
                        <button type="submit" class="btn btn-blue">Save Purchase</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@push('scripts')
@push('scripts')
<script>
    // Create row (MATCHES your existing HTML exactly)
    function createRow() {
        return `
        <tr>
            <td>
                <select name="product_id[]" class="form-control" style="width: 100%;" required>
                    <option value="">Select Product</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->en_name }}</option>
                    @endforeach
                </select>
            </td>
            <td>
                <input type="number" name="quantity[]" class="qty text-center" value="1" min="1" style="width: 100%;">
            </td>
            <td>
                <input type="number" step="0.01" name="price[]" class="price text-center" placeholder="0.00" style="width: 100%;">
            </td>
            <td>
                <input type="text" class="subtotal text-center" value="0.00" readonly style="width: 100%;">
            </td>
            <td class="text-center">
                <button type="button" class="btn btn-danger btn-sm removeRow">X</button>
            </td>
        </tr>`;
    }

    // Add row
    document.getElementById('addRow').addEventListener('click', function() {
        document.querySelector('#productTable tbody')
            .insertAdjacentHTML('beforeend', createRow());
    });

    // Remove row (fixed click handling)
    document.addEventListener('click', function(e) {
        const btn = e.target.closest('.removeRow');
        if (btn) {
            const rows = document.querySelectorAll('#productTable tbody tr');

            if (rows.length > 1) {
                btn.closest('tr').remove();
                calculateTotal();
            } else {
                alert("At least one product is required.");
            }
        }
    });

    // Calculate subtotal (LIVE)
    document.addEventListener('input', function(e) {
        if (e.target.classList.contains('qty') || e.target.classList.contains('price')) {

            const row = e.target.closest('tr');

            const qty = parseFloat(row.querySelector('.qty').value) || 0;
            const price = parseFloat(row.querySelector('.price').value) || 0;

            const subtotal = qty * price;

            row.querySelector('.subtotal').value = subtotal.toFixed(2);

            calculateTotal();
        }
    });

    // Calculate grand total
    function calculateTotal() {
        let total = 0;

        document.querySelectorAll('#productTable tbody .subtotal').forEach(function(el) {
            total += parseFloat(el.value) || 0;
        });

        document.getElementById('totalAmount').value = total.toFixed(2);
    }

    // Initial calculation (important)
    document.addEventListener('DOMContentLoaded', function() {
        calculateTotal();
    });
</script>
@endpush
@endpush