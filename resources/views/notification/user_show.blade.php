
@extends('layouts.app')

@section('content')


    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header asside">

                </div>
                <div class="card-body">
                    <div class="row">


                    <div class="col-md-4">
                        <img src="{{$notification->data['thumb']}}" alt="{{!! $notification->data['title']  }}" class="img img-fluid img-thumbnail">
                    </div>
                    <div class="col-md-8">
                        <h2>{{$notification->data['title']}}</h2>
                        <p>{{$notification->data['detail']}}</p>
                        <a href="{{$notification->data['action']}}" class="btn btn-outline-info"> More Detail</a>
                    </div>

                </div>



                </div>
            </div>
        </div>
    </div>
    <div> </div>
    </div>

@endsection

