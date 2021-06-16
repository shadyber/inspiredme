@extends('layouts.app')
@section('content')
    <div class="page-title">
        <div class="container">
            <h2>{{__('Terms and Conditions')}}</h2>
            <ul class="nav">
                <li><a href="/l">{{__('Home')}}</a></li>
                <li>{{__('Terms and Conditions')}}</li>
            </ul>
        </div>
    </div>




    <div class="container pt-120 pb-90">
        <div class="row">
            <div class="col-md-12">

                <div class="col-md-10 offset-md-1">
                    <div class="page-text">
                        <div class="page-primary-text pb-60">
                            <div class="page-para-title h2">{{__('Information we collect')}}</div>
                            <p>Hi! I'm a UX designer living in Zurich, Switzerland. I currently works freelance in Zurich. I help companies to create memorable experiences through user centered design.  I’m experienced UX designer who loves to develops brands. My value is intersecting logical and emotional concepts. I started working 5 years ago and since then I’ve had the opportunity to work with various disciplines such as graphic design, art direction, front-end development, user experience and interface.</p>
                        </div>

                        <div class="page-primary-text pb-40">
                            <div class="page-para-title h3"> {{__('Payment')}}</div>
                            <p>Once you subscribed to our website or service you can use for free for 3 days then will charge 1 birr per day untill you send unsubscription request . you can send unsubscribe request by clicking "unsubscribe" link on the home page.</p>
                        </div>


                        <div class="page-primary-text pb-40">
                            <div class="page-para-title h3"> {{__('Registration')}}</div>
                            <p>
                                Dear customer, you will be registered as a user of the service by sending OK to 6475</p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
