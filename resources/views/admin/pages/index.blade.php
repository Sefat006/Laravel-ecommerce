@extends('admin.layouts.app')



@section('content')


<div class="container-fluid">
    <div id="table-url" data-url="http://127.0.0.1:8000/admin/contact-us/index"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>Pages List</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a
                                    href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pages List</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="customers__area bg-style mb-30">
                <div class="item-title">
                    <!-- <div class="col-xs-6">
                        <a href="{{route('admin.slider.create')}}"
                            class="btn btn-md btn-info">Add Slider</a>
                    </div> -->
                </div>
                <div class="customers__table">
                    <div id="ContactUsTable_wrapper" class="dataTables_wrapper no-footer">
                        <div class="dataTables_length" id="ContactUsTable_length"><label>Show <select
                                    name="ContactUsTable_length" aria-controls="ContactUsTable"
                                    class="">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> entries</label></div>
                        <div id="ContactUsTable_filter" class="dataTables_filter"><label>Search:<input
                                    type="search" class="" placeholder=""
                                    aria-controls="ContactUsTable"></label></div>
                        <div id="ContactUsTable_processing" class="dataTables_processing"
                            style="display: none;">Processing...</div>
                        <table id="ContactUsTable"
                            class="dataTableHover row-border data-table-filter table-style dataTable no-footer"
                            role="grid" aria-describedby="ContactUsTable_info" style="width: 1196px;">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="ContactUsTable"
                                        rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending"
                                        style="width: 279px;">SL</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="ContactUsTable"
                                        rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending"
                                        style="width: 279px;">Title</th>
                                    <th class="sorting" tabindex="0" aria-controls="ContactUsTable"
                                        rowspan="1" colspan="1"
                                        aria-label="Contact Number: activate to sort column ascending"
                                        style="width: 185px;">Slug</th>
                                    <th class="sorting" tabindex="0" aria-controls="ContactUsTable"
                                        rowspan="1" colspan="1"
                                        aria-label="Contact Number: activate to sort column ascending"
                                        style="width: 185px;">Description</th>
                                    <th class="sorting" tabindex="0" aria-controls="ContactUsTable"
                                        rowspan="1" colspan="1"
                                        aria-label="Message: activate to sort column ascending"
                                        style="width: 205px;">Image</th>
                                    <th class="sorting" tabindex="0" aria-controls="ContactUsTable"
                                        rowspan="1" colspan="1"
                                        aria-label="Contact Number: activate to sort column ascending"
                                        style="width: 185px;">Meta Title</th>
                                    <th class="sorting" tabindex="0" aria-controls="ContactUsTable"
                                        rowspan="1" colspan="1"
                                        aria-label="Contact Number: activate to sort column ascending"
                                        style="width: 185px;">Meta Description</th>
                                    <th class="sorting" tabindex="0" aria-controls="ContactUsTable"
                                        rowspan="1" colspan="1"
                                        aria-label="Contact Number: activate to sort column ascending"
                                        style="width: 185px;">Meta Keywords</th>

                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                        aria-label="Action" style="width: 103px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pages as $data)
                                <tr role="row" class="odd">
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="sorting_1">{{ $data->title }}</td>
                                    <td>{{ $data->slug }}</td>
                                    <td>{{ $data->description }}</td>
                                    <td>
                                        <img width="80" src="{{ asset('front/assets/images/pages/' . $data->image) }}" alt="pages Image">
                                    </td>
                                    <td>{{ $data->meta_title }}</td>
                                    <td>{{ $data->meta_description }}</td>
                                    <td>{{ $data->meta_keywords }}</td>
                                    <td>
                                        <div class="action_buttons">
                                            <a href="{{ route('admin.page.edit', $data->id ) }}" class="btn-action" data-bs-target="#viewModal1" title="View">
                                                <i class="fas fa-pencil"></i>
                                            </a>
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

</div>

@endsection

@push('scripts') <!-- to app.blade.php, all the pages where "Add to Cart" button is placed -->

@endpush

<!-- <form action="{{route('admin.logout')}}" method="post">
    @csrf
    <label for="logout">Logout</label>
    <input type="submit" value="Logout">
</form> -->