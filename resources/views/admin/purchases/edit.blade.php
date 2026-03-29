@extends('admin.layouts.app')

@section('content')
<style>
    #productTable input, #productTable select {
        border: 1px solid #e5e5e5;
        border-radius: 5px;
        padding-left: 15px; /* Added left margin/padding for value */
        height: 45px;
        width: 100%;
        outline: none;
    }
    #productTable .removeRow {
        background: #ff4d4d;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>Edit/Update Purchase</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Purchase</li>
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
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                            <form method="POST" action="{{ route('admin.purchase.update', $purchase->id) }}">
                                @csrf
                                @method('PUT')

                                <div class="input__group mb-25">
                                    <label>Supplier</label>
                                    <select name="supplier_id">
                                        @foreach($suppliers as $supplier)
                                        <option value="{{ $supplier->id }}"
                                            {{ $purchase->supplier_id == $supplier->id ? 'selected' : '' }}>
                                            {{ $supplier->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="input__group mb-25">
                                    <label>Invoice</label>
                                    <input type="text" name="invoice_number" value="{{ $purchase->invoice_number }}">
                                </div>

                                <div class="input__group mb-25">
                                    <label>Date</label>
                                    <input type="date" name="purchase_date" value="{{ $purchase->purchase_date }}">
                                </div>

                                <div class="input__group mb-25">
                                    <label>Notes</label>
                                    <textarea name="notes">{{ $purchase->notes }}</textarea>
                                </div>

                                <table class="table-style" id="productTable">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th>Subtotal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($purchase->purchaseItems as $item)
                                        <tr>
                                            <td>
                                                <select name="product_id[]">
                                                    @foreach($products as $product)
                                                    <option value="{{ $product->id }}"
                                                        {{ $item->product_id == $product->id ? 'selected' : '' }}>
                                                        {{ $product->en_name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <input type="number" name="quantity[]" class="qty" value="{{ $item->quantity }}">
                                            </td>
                                            <td>
                                                <input type="number" name="price[]" class="price" value="{{ $item->purchase_price }}">
                                            </td>
                                            <td>
                                                <input type="text" class="subtotal" value="{{ $item->subtotal }}" readonly>
                                            </td>
                                            <td>
                                                <button type="button" class="removeRow">X</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <button type="button" id="addRow" class="btn btn-blue mt-20">+ Add Row</button>

                                <div class="input__group mt-20">
                                    <label style="margin-top: 10px; font-size: 1rem; font-weight: bold;">Total</label>
                                    <input type="text" name="total_amount" id="totalAmount" value="{{ $purchase->total_amount }}" readonly>
                                </div>

                                <button type="submit" class="btn btn-blue mt-20">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function createRow() {
        return `
        <tr>
            <td>
                <select name="product_id[]" required>
                    <option value="">Select Product</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->en_name }}</option>
                    @endforeach
                </select>
            </td>
            <td>
                <input type="number" name="quantity[]" class="qty" value="1" min="1">
            </td>
            <td>
                <input type="number" name="price[]" class="price" step="0.01" value="0.00">
            </td>
            <td>
                <input type="text" class="subtotal" value="0.00" readonly>
            </td>
            <td>
                <button type="button" class="removeRow">X</button>
            </td>
        </tr>
        `;
    }

    document.getElementById('addRow').addEventListener('click', function() {
        document.querySelector('#productTable tbody').insertAdjacentHTML('beforeend', createRow());
    });

    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('removeRow')) {
            const rows = document.querySelectorAll('#productTable tbody tr');
            if (rows.length > 1) {
                e.target.closest('tr').remove();
                calculateTotal();
            } else {
                alert("At least one product is required.");
            }
        }
    });

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

    function calculateTotal() {
        let total = 0;
        document.querySelectorAll('#productTable .subtotal').forEach(function(el) {
            total += parseFloat(el.value) || 0;
        });
        document.getElementById('totalAmount').value = total.toFixed(2);
    }

    document.addEventListener('DOMContentLoaded', function() {
        calculateTotal();
    });
</script>
@endpush