@extends('frontend.master')

@section('content')
    <section>
        <section>
            <!--== Page Title Area Start ==-->
            <div id="page-title-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="page-title-content">
                                <h1>Member Area</h1>
                                <ul class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="login-register.html" class="active">Login & Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== Page Title Area End ==-->
        </section>

        <section>
            <!--== Page Content Wrapper Start ==-->
            <div id="page-content-wrapper" class="p-9">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 m-auto">
                            <!-- Login & Register Content Start -->
                            <div class="login-register-wrapper">
                                <!-- Login & Register tab Menu -->
                                <nav class="nav login-reg-tab-menu">
                                    <a class="active" id="login-tab" data-toggle="tab" href="{{url('/')}}">Login</a>
                                    <a id="register-tab" data-toggle="tab" href="{{url('/login/register')}}">Register</a>
                                </nav>
                                <!-- Login & Register tab Menu -->

                                <div class="tab-content" id="login-reg-tabcontent">
                                    <div class="tab-pane fade show active" id="login" role="tabpanel">
                                        <div class="login-reg-form-wrap">
                                            <form action="#" method="post">
                                                <div class="single-input-item">
                                                    <input type="email" placeholder="Enter your Email" required />
                                                </div>

                                                <div class="single-input-item">
                                                    <input type="password" placeholder="Enter your Password" required />
                                                </div>

                                                <div class="single-input-item">
                                                    <div
                                                        class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                                        <div class="remember-meta">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="rememberMe">
                                                                <label class="custom-control-label"
                                                                    for="rememberMe">Remember
                                                                    Me</label>
                                                            </div>
                                                        </div>

                                                        <a href="{{url('/login/register')}}" class="forget-pwd">Forget Password?</a>
                                                    </div>
                                                </div>

                                                <div class="single-input-item">
                                                    <button class="btn-login">Login</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="register" role="tabpanel">
                                        <div class="login-reg-form-wrap">
                                            <form action="#" method="post">
                                                <div class="single-input-item">
                                                    <input type="text" placeholder="Full Name" required />
                                                </div>

                                                <div class="single-input-item">
                                                    <input type="email" placeholder="Enter your Email" required />
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <input type="password" placeholder="Enter your Password"
                                                                required />
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <input type="password" placeholder="Repeat your Password"
                                                                required />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="single-input-item">
                                                    <div class="login-reg-form-meta">
                                                        <div class="remember-meta">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="subnewsletter">
                                                                <label class="custom-control-label"
                                                                    for="subnewsletter">Subscribe
                                                                    Our Newsletter</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="single-input-item">
                                                    <button class="btn-login">Register</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Login & Register Content End -->
                        </div>
                    </div>
                </div>
            </div>
            <!--== Page Content Wrapper End ==-->
        </section>
    </section>
@endsection
