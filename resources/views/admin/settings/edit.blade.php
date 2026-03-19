@extends('admin.layouts.app')



@section('content')


<!-- Container Fluid-->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>Edit/Update Setting</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Setting</li>
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
                            <form enctype="multipart/form-data" method="POST" action="{{ route('admin.setting.update', $setting->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-vertical__item bg-style">

                                            <div class="input__group mb-25">
                                                <label for="site_name">Site Name <span style="color: red;">*</span></label>
                                                <input type="text" id="site_name" name="site_name" value="{{ $setting->site_name }}" placeholder="site name">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="address">Address <span style="color: red;">*</span></label>
                                                <input type="text" id="address" name="address" value="{{ $setting->address }}" placeholder="address">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="phone">Phone <span style="color: red;">*</span></label>
                                                <input type="text" id="phone" name="phone" value="{{ $setting->phone }}" placeholder="phone">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="email">Email <span style="color: red;">*</span></label>
                                                <input type="text" id="email" name="email" value="{{ $setting->email }}" placeholder="email">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="fb">FB</label>
                                                <input type="text" id="fb" name="fb" value="{{ $setting->fb }}" placeholder="fb">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="twitter">Twitter</label>
                                                <input type="text" id="twitter" name="twitter" value="{{ $setting->twitter }}" placeholder="twitter">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="linkedin">Linkedin</label>
                                                <input type="text" id="linkedin" name="linkedin" value="{{ $setting->linkedin }}" placeholder="linkedin">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="instagram">Instagram</label>
                                                <input type="text" id="instagram" name="instagram" value="{{ $setting->instagram }}" placeholder="instagram">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="copyright">Copyright</label>
                                                <input type="text" id="copyright" name="copyright" value="{{ $setting->copyright }}" placeholder="copyright">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="map_iframe">Map Iframe</label>
                                                <textarea id="map_iframe" name="map_iframe">{{ $setting->map_iframe }}</textarea>
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="meta_title">Meta Title <span style="color: red;">*</span> (Max 60 Characters)</label>
                                                <input type="text" id="meta_title" name="meta_title" value="{{ $setting->meta_title }}" placeholder="meta title">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="meta_desc">Meta Description <span style="color: red;">*</span> (Max 160 Characters)</label>
                                                <textarea id="meta_desc" name="meta_desc" placeholder="meta desc">{{ $setting->meta_desc }}</textarea>
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="meta_keywords">Meta Keywords <span style="color: red;">*</span> (comma separated value)</label>
                                                <input type="text" id="meta_keywords" name="meta_keywords" value="{{ $setting->meta_keywords }}" placeholder="meta keywords">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="logo">Logo </label>
                                                <input type="file" class="putImage2" name="logo" id="logo">
                                                <img width="80" src="{{ asset('front/assets/images/settings/'.$setting->logo) }}" alt="logo">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="favicon">Favicon </label>
                                                <input type="file" class="putImage2" name="favicon" id="favicon">
                                                <img width="80" src="{{ asset('front/assets/images/settings/'.$setting->favicon) }}" alt="favicon">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="og_image">Og Image </label>
                                                <input type="file" class="putImage2" name="og_image" id="og_image">
                                                <img width="80" src="{{ asset('front/assets/images/settings/'.$setting->og_image) }}" alt="og_image">
                                            </div>

                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">Update</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
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
    "use strict";
    $(document).ready(function() {
        $('#description').summernote({
            placeholder: 'Description',
            height: 300
        });
        $('.dropdown-toggle').dropdown();
    });
</script>
@endpush