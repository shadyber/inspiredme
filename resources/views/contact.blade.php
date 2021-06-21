@extends('layouts.app')
@section('title',__('Contact Us'))
@section('content')

    <div class="page-title">
        <div class="container">
            <h2>Contact Us</h2>
            <ul class="nav">
                <li><a href="/">{{__('Home')}}</a></li>
                <li><a href="/contact"></a>{{__('Contact Us')}}</li>
            </ul>
        </div>
    </div>

    <div class="container pt-120 pb-120">
        <!-- Contact Cover -->
        <div class="contact-cover">
            <img src="/assets/images/blog/4.jpg" alt="" class="img-fluid">
        </div>
        <!-- End of Contact Cover -->

        <div class="biz-contact-form">
            <!-- Contact Form Title -->
            <div class="title text-center">
                <h2>{{__('Get In Touch')}}</h2>
                <p>Feel Free to contact us .</p>
            </div>
            <!-- End of Contact Form Title -->

            <div class="my-contact-form-cover">
                <form class="my-contact-form" action="/contact" method="POST" >
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="email" class="form-control" placeholder="Your Email" required="">
                        </div>
                        <div class="col-md-12">
                            <textarea name="message" class="form-control" placeholder="Your Message" required=""></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Send </button>
                        </div>
                    </div>
                </form>
                <div class="form-response"></div>
            </div>
        </div>
    </div>




@endsection
