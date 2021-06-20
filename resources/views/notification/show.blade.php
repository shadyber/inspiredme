@extends('layouts.admin')

@section('content')


    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header asside">

                </div>
                <div class="card-body">

                    <h2>{{$notification->data['message']}}</h2>
                    <ul>


                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div> </div>
    </div>

@endsection

