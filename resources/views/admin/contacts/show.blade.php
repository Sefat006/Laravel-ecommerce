@extends('admin.layouts.app')



@section('content')


<div class="container-fluid">
    <div id="table-url" data-url="http://127.0.0.1:8000/admin/contact-us/index"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a
                                    href="http://127.0.0.1:8000/admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
                    <div id="ContactUsTable_wrapper" class="dataTables_wrapper no-footer">
                        <table>
                            <tr>
                                <td><strong>Name: </strong></td>
                                <td>{{ $contact->firstname }} {{ $contact->lastname }}</td>
                            </tr>
                            <tr>
                                <td><strong>Email: </strong></td>
                                <td>{{ $contact->email }}</td>
                            </tr>
                            <tr>
                                <td><strong>Phone: </strong></td>
                                <td>{{ $contact->phone }}</td>
                            </tr>
                            <tr>
                                <td><strong>Message: </strong></td>
                                <td>{{ $contact->message }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

