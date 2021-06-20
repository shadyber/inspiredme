@extends('layouts.admin')

@section('content')

    <div class="container">
        <a href="#" class="btn btn-outline-primary"> Create New Message</a>
        <div class="row justify-content-center">
            <div class="col-md-12 p-2 m-3">
                <div class="card">

                    <table class="table">
                        <thead>
                        <tr>
                            <th class="border-top-0">Id</th>
                            <th class="border-top-0"> Email</th>
                            <th class="border-top-0">Name</th>
                            <th class="border-top-0">Created At</th>
                            <th class="border-top-0">Action </th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($newsletters as $newsletter)
                            <tr>
                                <td>{{$newsletter->id}}</td>
                                <td>{{$newsletter->email}}</td>
                                <td>{{$newsletter->email}}</td>
                                <td>
                                  {{$newsletter->created_at->diffForHumans()}}

                                </td>
                                <td>
                                    <a href="#"> Send New Message</a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>




                        </tfoot>

                    </table>
                </div>
            </div>

        </div>

    </div>

@endsection
