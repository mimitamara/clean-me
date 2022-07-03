@extends('layouts.app')

@section('content')
<section class="intro-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="my-5">
                    <img class="img-fluid" src="{{ asset('images/home/phone-1.png') }}" alt="">
                    <div class="circle-2"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-column h-100 justify-content-center text-margin">
                    <h1 style="max-width: 500px">Get things done with CleanME</h1>
                    <p>We will help you clean and keep track of your schedule</p>
                    <div>
                        <a class="btn btn-primary px-5" href="#">Find out more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-none d-lg-block circle-3"></div>
</section>

<section class="we-offer">
    <div class="container">
        <div class="row">
            <h2 class="h1 text-white">What we can offer you</h2>
            <p class="text-white">By joining you will never have to ask anyone for help.</p>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="offer-item d-flex flex-column h-100 justify-content-end align-items-center px-5">
                        <img class="img-fluid" src="{{ asset('images/home/cleaning.png') }}" alt="">
                        <div class="offer-title">
                            <p class="fs-4 text-white">Cleaning guide anytime anywhere</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="offer-item d-flex flex-column h-100 justify-content-end align-items-center px-5">
                        <img class="img-fluid" src="{{ asset('images/home/time-management.png') }}" alt="">
                        <div class="offer-title">
                            <p class="fs-4 text-white">Time Management</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="offer-item d-flex flex-column h-100 justify-content-end align-items-center px-5">
                        <img class="img-fluid" src="{{ asset('images/home/support.png') }}" alt="">
                        <div class="offer-title">
                            <p class="fs-4 text-white">24/7 Customer Service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@guest()
<section class="join-the-community py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <h3 class="h1 mb-5 pb-5">Join the<br> Community.</h3>
                    <img class="circle-block" src="{{ asset('images/home/circles.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="register-form border rounded p-5">
                    <form>
                        <h3 class="mb-3">Register here.</h3>
                        <div class="input-group flex-nowrap mb-4">
                            <input name="name" type="text" class="form-control" placeholder="Name" aria-label="Name">
                        </div>

                        <div class="input-group flex-nowrap mb-4">
                            <input name="email" type="email" class="form-control" placeholder="Email" aria-label="Email">
                        </div>

                        <div class="input-group flex-nowrap mb-4">
                            <input name="password" type="password" class="form-control" placeholder="Password" aria-label="Password">
                        </div>

                        <div class="input-group flex-nowrap mb-5">
                            <input name="confirm_password" type="password" class="form-control" placeholder="Confirm Password" aria-label="Confirm Password">
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary px-5">Join Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endguest

@auth
<section class="py-5">
    <div></div>
</section>
@endauth

@endsection
