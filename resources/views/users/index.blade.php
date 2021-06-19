@extends('layouts.admin')

@section('content')

    <div class="container">
        <a href="/user/create" class="btn btn-outline-primary"> Create New User</a>
        <div class="row justify-content-center">
            <div class="col-md-12 p-2 m-3">
                <div class="card">

                    <table class="table">
                        <thead>
                        <tr>
                            <th class="border-top-0">Id</th>
                            <th class="border-top-0"> Name</th>
                            <th class="border-top-0">Email</th>
                            <th class="border-top-0">Role</th>
                            <th class="border-top-0">Action </th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @if($user->hasRole('admin'))
                                        admin
                                    @elseif($user->hasRole('user'))
                                        user
                                    @elseif($user->hasRole('editor'))
                                        Editor
                                    @elseif($user->hasRole('author'))
                                        Author
                                    @else
                                        No-Role
                                    @endif

                                </td>
                                <td><a href="/user/{{$user->id}}/edit" class="btn btn-outline-primary">Edit</a> &nbsp; <a href="/user/{{$user->id}}/edit" class="btn btn-outline-danger">Delete</a>  </td>

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
