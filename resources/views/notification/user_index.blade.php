
@extends('layouts.app')


@section('content')


    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header asside">

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>

                                <td>data</td>
                                <td>action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($notifications as $notification)
                                <tr>

                                    <td>{{$notification->data['message']}}  <small> {{$notification->created_at->diffForHumans()}}  </small> </td>
                                    <td><small><a href="#">mark as Read</a></small></td>

                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
<span>


</span>



                            </tfoot>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div> </div>
    </div>

@endsection

