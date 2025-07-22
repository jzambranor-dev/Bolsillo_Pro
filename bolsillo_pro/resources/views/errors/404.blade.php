@extends('layouts.app')
@section('title', 'Inicio')

@section('content')

<div class="px-3">
    <div class="row min-vh-100 flex-center p-5">
        <div class="col-12 col-xl-10 col-xxl-8">
            <div class="row justify-content-center align-items-center g-5">
                <div class="col-12 col-lg-6 text-center order-lg-1"><img class="img-fluid w-lg-100 d-dark-none" src="../resources/phoenix/media/404-illustration.png" alt="" width="400"><img class="img-fluid w-md-50 w-lg-100 d-light-none" src="../resources/phoenix/media/dark_404-illustration.png" alt="" width="540"></div>
                <div class="col-12 col-lg-6 text-center text-lg-start"><img class="img-fluid mb-6 w-50 w-lg-75 d-dark-none" src="../resources/phoenix/media/404.png" alt=""><img class="img-fluid mb-6 w-50 w-lg-75 d-light-none" src="../resources/phoenix/media/dark_404.png" alt="">
                    <h2 class="text-body-secondary fw-bolder mb-3">Page Missing!</h2>
                    <p class="text-body mb-5">But no worries! Our ostrich is looking everywhere <br class="d-none d-sm-block">while you wait safely. </p><a class="btn btn-lg btn-primary" href="{{ route('home') }}">Go Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="support-chat-container show">
    <div class="container-fluid support-chat">
        <div class="card bg-body-emphasis">
            <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom border-translucent">
                <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<svg class="svg-inline--fa fa-circle fs-11 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                    </svg><!-- <span class="fa-solid fa-circle text-success fs-11"></span> Font Awesome fontawesome.com --></h5>
                <div class="btn-reveal-trigger"><button class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex" type="button" id="support-chat-dropdown" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis text-body" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                        </svg><!-- <span class="fas fa-ellipsis-h text-body"></span> Font Awesome fontawesome.com --></button>
                    <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.23.0/pages/errors/404.html#!">Request a callback</a><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.23.0/pages/errors/404.html#!">Search in chat</a><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.23.0/pages/errors/404.html#!">Show history</a><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.23.0/pages/errors/404.html#!">Report to Admin</a><a class="dropdown-item btn-support-chat" href="https://prium.github.io/phoenix/v1.23.0/pages/errors/404.html#!">Close Support</a></div>
                </div>
            </div>
            <div class="card-body chat p-0">
                <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
                    <div class="text-end mt-6"><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="https://prium.github.io/phoenix/v1.23.0/pages/errors/404.html#!">
                            <p class="mb-0 fw-semibold fs-9">I need help with something</p><svg class="svg-inline--fa fa-paper-plane fs-9 ms-3 text-primary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480l0-83.6c0-4 1.5-7.8 4.2-10.8L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"></path>
                            </svg><!-- <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span> Font Awesome fontawesome.com -->
                        </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="https://prium.github.io/phoenix/v1.23.0/pages/errors/404.html#!">
                            <p class="mb-0 fw-semibold fs-9">I can’t reorder a product I previously ordered</p><svg class="svg-inline--fa fa-paper-plane fs-9 ms-3 text-primary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480l0-83.6c0-4 1.5-7.8 4.2-10.8L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"></path>
                            </svg><!-- <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span> Font Awesome fontawesome.com -->
                        </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="https://prium.github.io/phoenix/v1.23.0/pages/errors/404.html#!">
                            <p class="mb-0 fw-semibold fs-9">How do I place an order?</p><svg class="svg-inline--fa fa-paper-plane fs-9 ms-3 text-primary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480l0-83.6c0-4 1.5-7.8 4.2-10.8L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"></path>
                            </svg><!-- <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span> Font Awesome fontawesome.com -->
                        </a><a class="false d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="https://prium.github.io/phoenix/v1.23.0/pages/errors/404.html#!">
                            <p class="mb-0 fw-semibold fs-9">My payment method not working</p><svg class="svg-inline--fa fa-paper-plane fs-9 ms-3 text-primary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480l0-83.6c0-4 1.5-7.8 4.2-10.8L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"></path>
                            </svg><!-- <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span> Font Awesome fontawesome.com -->
                        </a></div>
                    <div class="text-center mt-auto">
                        <div class="avatar avatar-3xl status-online"><img class="rounded-circle border border-3 border-light-subtle" src="../resources/phoenix/media/30.webp" alt=""></div>
                        <h5 class="mt-2 mb-3">Eric</h5>
                        <p class="text-center text-body-emphasis mb-0">Ask us anything – we’ll get back to you here or by email within 24 hours.</p>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center gap-2 border-top border-translucent ps-3 pe-4 py-3">
                <div class="d-flex align-items-center flex-1 gap-3 border border-translucent rounded-pill px-4"><input class="form-control outline-none border-0 flex-1 fs-9 px-0" type="text" placeholder="Write message"><label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0" for="supportChatPhotos"><svg class="svg-inline--fa fa-image" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="image" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32l384 0c35.3 0 64 28.7 64 64l0 320c0 35.3-28.7 64-64 64L64 480c-35.3 0-64-28.7-64-64L0 96zM323.8 202.5c-4.5-6.6-11.9-10.5-19.8-10.5s-15.4 3.9-19.8 10.5l-87 127.6L170.7 297c-4.6-5.7-11.5-9-18.7-9s-14.2 3.3-18.7 9l-64 80c-5.8 7.2-6.9 17.1-2.9 25.4s12.4 13.6 21.6 13.6l96 0 32 0 208 0c8.9 0 17.1-4.9 21.2-12.8s3.6-17.4-1.4-24.7l-120-176zM112 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z"></path>
                        </svg><!-- <span class="fa-solid fa-image"></span> Font Awesome fontawesome.com --></label><input class="d-none" type="file" accept="image/*" id="supportChatPhotos"><label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0" for="supportChatAttachment"> <svg class="svg-inline--fa fa-paperclip" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paperclip" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M364.2 83.8c-24.4-24.4-64-24.4-88.4 0l-184 184c-42.1 42.1-42.1 110.3 0 152.4s110.3 42.1 152.4 0l152-152c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-152 152c-64 64-167.6 64-231.6 0s-64-167.6 0-231.6l184-184c46.3-46.3 121.3-46.3 167.6 0s46.3 121.3 0 167.6l-176 176c-28.6 28.6-75 28.6-103.6 0s-28.6-75 0-103.6l144-144c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-144 144c-6.7 6.7-6.7 17.7 0 24.4s17.7 6.7 24.4 0l176-176c24.4-24.4 24.4-64 0-88.4z"></path>
                        </svg><!-- <span class="fa-solid fa-paperclip"></span> Font Awesome fontawesome.com --></label><input class="d-none" type="file" id="supportChatAttachment"></div><button class="btn p-0 border-0 send-btn"><svg class="svg-inline--fa fa-paper-plane fs-9" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor" d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480l0-83.6c0-4 1.5-7.8 4.2-10.8L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"></path>
                    </svg><!-- <span class="fa-solid fa-paper-plane fs-9"></span> Font Awesome fontawesome.com --></button>
            </div>
        </div>
    </div>
</div>
@endsection