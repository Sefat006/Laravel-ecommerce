@extends('front.layouts.app')

@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">Faq</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a></li>
                    <li class="page-item">Faq</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- faq-area area start here  -->
    <div class="faq-area section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion" id="accordionFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    What shipping methods are availbale?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p class="faq-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                        ut blandit risus. Donec mollis nec tellus consequat quam a purus faucibus
                                        scelerisque. Mauris ac dui ante. Pellentesque congue porttitor Curabitur vel sem
                                        mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc
                                        nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus,
                                        dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget
                                        augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae
                                        dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec
                                        mi</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                    How long will it take to get my package to recive?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p class="faq-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                        ut blandit risus. Donec mollis nec tellus consequat quam a purus faucibus
                                        scelerisque. Mauris ac dui ante. Pellentesque congue porttitor Curabitur vel sem
                                        mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc
                                        nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus,
                                        dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget
                                        augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae
                                        dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec
                                        mi</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                    Do you ship internationally?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p class="faq-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                        ut blandit risus. Donec mollis nec tellus consequat quam a purus faucibus
                                        scelerisque. Mauris ac dui ante. Pellentesque congue porttitor Curabitur vel sem
                                        mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc
                                        nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus,
                                        dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget
                                        augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae
                                        dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec
                                        mi</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                    What payment methods are accepted?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p class="faq-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                        ut blandit risus. Donec mollis nec tellus consequat quam a purus faucibus
                                        scelerisque. Mauris ac dui ante. Pellentesque congue porttitor Curabitur vel sem
                                        mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc
                                        nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus,
                                        dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget
                                        augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae
                                        dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec
                                        mi</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                    Is buying on-line safe?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p class="faq-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                        ut blandit risus. Donec mollis nec tellus consequat quam a purus faucibus
                                        scelerisque. Mauris ac dui ante. Pellentesque congue porttitor Curabitur vel sem
                                        mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc
                                        nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus,
                                        dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget
                                        augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae
                                        dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec
                                        mi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq-area area end here  -->
@endsection