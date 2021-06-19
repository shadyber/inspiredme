@extends('layouts.app')
@section('title','About Us')
@section('content')
    <div class="page-title">
        <div class="container">
            <h2>{{__('About')}}</h2>
            <ul class="nav">
                <li><a href="/l">{{__('Home')}}</a></li>
                <li>{{__('About')}}</li>
            </ul>
        </div>
    </div>




    <div class="container pt-120 pb-90">
        <div class="row">
            <div class="col-md-12">
                <div class="page-thumb">
                    <img src="/assets/images/banner/4.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-10 offset-md-1">
                    <div class="page-text">
                        <div class="page-primary-text pb-60">
                            <div class="page-para-title h2">{{__('What We Do?')}}</div>
                            <p>Hi! I'm a UX designer living in Zurich, Switzerland. I currently works freelance in Zurich. I help companies to create memorable experiences through user centered design.  I’m experienced UX designer who loves to develops brands. My value is intersecting logical and emotional concepts. I started working 5 years ago and since then I’ve had the opportunity to work with various disciplines such as graphic design, art direction, front-end development, user experience and interface.</p>
                        </div>

                        <div class="page-primary-text pb-40">
                            <div class="page-para-title h3"> {{__('Our Service')}}</div>
                            <p>Duis porta, ligula rhoncus euismod pretium, nisi tellus eleifend odio, luctus viverra sem dolor id sem. Maecenas a venenatis enim, quis porttitor magna. Etiam nec rhoncus neque. Sed quis ultrices eros. Curabitur sit amet eros eu arcu consectetur pulvinar. Aliquam sodales, turpis eget tristique tempor, sapien lacus facilisis diam, molestie efficitur sapien velit nec magna. Maecenas interdum efficitur tempor.</p>
                        </div>


                        <div class="page-primary-text pb-40">
                            <div class="page-para-title h3"> {{__('Our Vision')}}</div>
                            <p>Duis porta, ligula rhoncus euismod pretium, nisi tellus eleifend odio, luctus viverra sem dolor id sem. Maecenas a venenatis enim, quis porttitor magna. Etiam nec rhoncus neque. Sed quis ultrices eros. Curabitur sit amet eros eu arcu consectetur pulvinar. Aliquam sodales, turpis eget tristique tempor, sapien lacus facilisis diam, molestie efficitur sapien velit nec magna. Maecenas interdum efficitur tempor.</p>
                        </div>

                        <div class="page-primary-text pb-40">
                            <div class="page-para-title h3"> {{__('Our Mission')}}</div>
                            <p>Duis porta, ligula rhoncus euismod pretium, nisi tellus eleifend odio, luctus viverra sem dolor id sem. Maecenas a venenatis enim, quis porttitor magna. Etiam nec rhoncus neque. Sed quis ultrices eros. Curabitur sit amet eros eu arcu consectetur pulvinar. Aliquam sodales, turpis eget tristique tempor, sapien lacus facilisis diam, molestie efficitur sapien velit nec magna. Maecenas interdum efficitur tempor.</p>
                        </div>


                        <div class="page-primary-text pb-40">
                            <div class="page-para-title h3"> {{__('Our Goal')}}</div>
                            <p>Duis porta, ligula rhoncus euismod pretium, nisi tellus eleifend odio, luctus viverra sem dolor id sem. Maecenas a venenatis enim, quis porttitor magna. Etiam nec rhoncus neque. Sed quis ultrices eros. Curabitur sit amet eros eu arcu consectetur pulvinar. Aliquam sodales, turpis eget tristique tempor, sapien lacus facilisis diam, molestie efficitur sapien velit nec magna. Maecenas interdum efficitur tempor.</p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
