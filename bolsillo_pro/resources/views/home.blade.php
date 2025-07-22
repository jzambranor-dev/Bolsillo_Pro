@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container-fluid bg-body-tertiary dark__bg-gray-1200">
    <div class="bg-holder" style="background-image:url(../resources/phoenix/media/bg-3.jpg);"></div>
    <!--/.bg-holder-->
    <div class="row flex-center position-relative min-vh-100 g-0 py-5">
        <div class="col-11 col-sm-10 col-xl-8">
            <div class="card border border-translucent auth-card">
                <div class="card-body pe-md-0">
                    <div class="row align-items-center gx-0 gy-7">
                        <div class="col-auto bg-body-highlight dark__bg-gray-1100 rounded-3 position-relative overflow-hidden auth-title-box">
                            <div class="bg-holder" ></div>
                            <!--/.bg-holder-->
                            <div class="position-relative px-4 px-lg-7 pt-7 pb-7 pb-sm-5 text-center text-md-start pb-lg-7 pb-md-7">
                                <h3 class="mb-3 text-body-emphasis fs-7">Phoenix Authentication</h3>
                                <p class="text-body-tertiary">Give yourself some hassle-free development process with the uniqueness of Phoenix!</p>
                                <ul class="list-unstyled mb-0 w-max-content w-md-auto">
                                    <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Fast</span></li>
                                    <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Simple</span></li>
                                    <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Responsive</span></li>
                                </ul>
                            </div>
                            <div class="position-relative z-n1 mb-6 d-none d-md-block text-center mt-md-15"><img class="auth-title-box-img d-dark-none" src="../resources/phoenix/media/auth.png" alt=""><img class="auth-title-box-img d-light-none" src="../resources/phoenix/media/auth-dark.png" alt=""></div>
                        </div>
                        <div class="col mx-auto">
                            <div class="auth-form-box">
                                <div class="text-center mb-7"><a class="d-flex flex-center text-decoration-none mb-4" href="https://prium.github.io/phoenix/v1.23.0/index.html">
                                        <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img src="../resources/phoenix/media/logo.png" alt="phoenix" width="58"></div>
                                    </a>
                                    <h3 class="text-body-highlight">Sign In</h3>
                                    <p class="text-body-tertiary">Get access to your account</p>
                                </div><button class="btn btn-phoenix-secondary w-100 mb-3"><svg class="svg-inline--fa fa-google fs-9 me-2 text-danger" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
                                    </svg><!-- <span class="fab fa-google text-danger me-2 fs-9"></span> Font Awesome fontawesome.com -->Sign in with google</button><button class="btn btn-phoenix-secondary w-100"><svg class="svg-inline--fa fa-facebook fs-9 me-2 text-primary" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"></path>
                                    </svg><!-- <span class="fab fa-facebook text-primary me-2 fs-9"></span> Font Awesome fontawesome.com -->Sign in with facebook</button>
                                <div class="position-relative">
                                    <hr class="bg-body-secondary mt-5 mb-4">
                                    <div class="divider-content-center bg-body-emphasis">or use email</div>
                                </div>
                                <div class="mb-3 text-start"><label class="form-label" for="email">Email address</label>
                                    <div class="form-icon-container"><input class="form-control form-icon-input" id="email" type="email" placeholder="name@example.com"><svg class="svg-inline--fa fa-user form-icon fs-9 text-body" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z"></path>
                                        </svg><!-- <span class="fas fa-user text-body fs-9 form-icon"></span> Font Awesome fontawesome.com --></div>
                                </div>
                                <div class="mb-3 text-start"><label class="form-label" for="password">Password</label>
                                    <div class="form-icon-container" data-password="data-password"><input class="form-control form-icon-input pe-6" id="password" type="password" placeholder="Password" data-password-input="data-password-input"><svg class="svg-inline--fa fa-key form-icon fs-9 text-body" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="key" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17l0 80c0 13.3 10.7 24 24 24l80 0c13.3 0 24-10.7 24-24l0-40 40 0c13.3 0 24-10.7 24-24l0-40 40 0c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z"></path>
                                        </svg><!-- <span class="fas fa-key text-body fs-9 form-icon"></span> Font Awesome fontawesome.com --><button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle"><span class="uil uil-eye show"></span><span class="uil uil-eye-slash hide"></span></button></div>
                                </div>
                                <div class="row flex-between-center mb-7">
                                    <div class="col-auto">
                                        <div class="form-check mb-0"><input class="form-check-input" id="basic-checkbox" type="checkbox" checked="checked"><label class="form-check-label mb-0" for="basic-checkbox">Remember me</label></div>
                                    </div>
                                    <div class="col-auto"><a class="fs-9 fw-semibold" href="https://prium.github.io/phoenix/v1.23.0/pages/authentication/card/forgot-password.html">Forgot Password?</a></div>
                                </div><button class="btn btn-primary w-100 mb-3">Sign In</button>
                                <div class="text-center"><a class="fs-9 fw-bold" href="https://prium.github.io/phoenix/v1.23.0/pages/authentication/card/sign-up.html">Create an account</a></div>
                            </div>
                        </div>
                    </div>
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
                    <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.23.0/pages/authentication/card/sign-in.html#!">Request a callback</a><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.23.0/pages/authentication/card/sign-in.html#!">Search in chat</a><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.23.0/pages/authentication/card/sign-in.html#!">Show history</a><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.23.0/pages/authentication/card/sign-in.html#!">Report to Admin</a><a class="dropdown-item btn-support-chat" href="https://prium.github.io/phoenix/v1.23.0/pages/authentication/card/sign-in.html#!">Close Support</a></div>
                </div>
            </div>
            <div class="card-body chat p-0">
                <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
                    <div class="text-end mt-6"><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="https://prium.github.io/phoenix/v1.23.0/pages/authentication/card/sign-in.html#!">
                            <p class="mb-0 fw-semibold fs-9">I need help with something</p><svg class="svg-inline--fa fa-paper-plane fs-9 ms-3 text-primary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480l0-83.6c0-4 1.5-7.8 4.2-10.8L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"></path>
                            </svg><!-- <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span> Font Awesome fontawesome.com -->
                        </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="https://prium.github.io/phoenix/v1.23.0/pages/authentication/card/sign-in.html#!">
                            <p class="mb-0 fw-semibold fs-9">I can’t reorder a product I previously ordered</p><svg class="svg-inline--fa fa-paper-plane fs-9 ms-3 text-primary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480l0-83.6c0-4 1.5-7.8 4.2-10.8L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"></path>
                            </svg><!-- <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span> Font Awesome fontawesome.com -->
                        </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="https://prium.github.io/phoenix/v1.23.0/pages/authentication/card/sign-in.html#!">
                            <p class="mb-0 fw-semibold fs-9">How do I place an order?</p><svg class="svg-inline--fa fa-paper-plane fs-9 ms-3 text-primary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480l0-83.6c0-4 1.5-7.8 4.2-10.8L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"></path>
                            </svg><!-- <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span> Font Awesome fontawesome.com -->
                        </a><a class="false d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="https://prium.github.io/phoenix/v1.23.0/pages/authentication/card/sign-in.html#!">
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