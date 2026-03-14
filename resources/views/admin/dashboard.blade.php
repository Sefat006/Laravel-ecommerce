@extends('admin.layouts.app')

@php

$featured = $data['featured'];
$onsale = $data['onsale'];
$bestselling = $data['bestselling'];
$newarrival = $data['newarrival'];

@endphp



@section('content')


@endsection

@push('scripts') <!-- to app.blade.php, all the pages where "Add to Cart" button is placed -->

@endpush

<!-- <form action="{{route('admin.logout')}}" method="post">
    @csrf
    <label for="logout">Logout</label>
    <input type="submit" value="Logout">
</form> -->