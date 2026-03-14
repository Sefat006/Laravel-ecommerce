@extends('front.layouts.app')

@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-wrap text-center">
            <h2 class="page-title">Order Success</h2>
            <ul class="breadcrumb-pages">
                <li class="page-item"><a class="page-item-link" href="{{ url('/') }}">Home</a></li>
                <li class="page-item">Success</li>
            </ul>
        </div>
    </div>
</div>
<div class="order-success-area section" style="padding: 80px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="success-card p-5" style="background: #fff; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                    
                    <div class="icon-wrap mb-4">
                        <div style="width: 100px; height: 100px; background: #28a745; color: #fff; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 50px;">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>

                    <h2 class="mb-3" style="font-weight: 700; color: #333;">Thank You for Your Purchase!</h2>
                    <p class="lead text-muted mb-4">Your order has been received and is now being processed. We've sent a confirmation email to your inbox.</p>
                    
                    <div class="order-info-box mb-5 p-4" style="background: #f8f9fa; border-radius: 10px; border: 1px dashed #ddd;">
                        <h5 class="mb-2">Order Number: <span class="text-primary">#{{ request()->order }}</span></h5>
                        <p class="small mb-0 text-muted">A copy of the invoice has been sent to your email.</p>
                    </div>

                    <div class="action-buttons">
                        <a href="{{ url('/products') }}" class="btn btn-primary btn-lg px-5 mr-3" style="border-radius: 30px;">
                            Continue Shopping
                        </a>
                        <!-- <a href="{{ route('user.orders') }}" class="btn btn-outline-secondary btn-lg px-5" style="border-radius: 30px;">
                            View My Orders
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection