
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

                        @if($notification->type=='App\Notifications\SaleCreatedNotification')
                            <li class="nav-link"> fs Number : <span class="text-bold-400 text-primary label--pressed"> {{$notification->data['sale']['fs_number']}}</span></li>


                            <li class="nav-link"> machine_number : <span  class="text-bold-400 text-primary label--pressed"> {{$notification->data['sale']['machine_number']}}</span></li>
                            <li class="nav-link"> TAX Type : <span  class="text-bold-400 text-primary label--pressed"> {{$notification->data['sale']['tax_type']}}</span></li>
                            <li class="nav-link"> TAX : <span  class="text-bold-400 text-primary label--pressed"> {{$notification->data['sale']['tax_amount']}}</span></li>
                            <li class="nav-link"> Subtotal <span  class="text-bold-400 text-primary label--pressed"> {{$notification->data['sale']['subtotal']}}</span></li>
                            <li class="nav-link"> Client <span><a href="/client/{{$notification->data['sale']['client_id']}}">Show Client</a></span></li>

                        @elseif($notification->type=='App\Notifications\PurchaseCreatedNotification')
                            <li class="nav-link"> fs Number : <span class="text-bold-400 text-primary label--pressed"> {{$notification->data['purchase']['fs_number']}}</span></li>


                            <li class="nav-link"> machine_number : <span  class="text-bold-400 text-primary label--pressed"> {{$notification->data['purchase']['machine_number']}}</span></li>
                            <li class="nav-link"> TAX Type : <span  class="text-bold-400 text-primary label--pressed"> {{$notification->data['purchase']['tax_type']}}</span></li>
                            <li class="nav-link"> TAX : <span  class="text-bold-400 text-primary label--pressed"> {{$notification->data['purchase']['tax_amount']}}</span></li>
                            <li class="nav-link"> Subtotal <span  class="text-bold-400 text-primary label--pressed"> {{$notification->data['purchase']['subtotal']}}</span></li>
                            <li class="nav-link"> Client <span><a href="/vendor/{{$notification->data['purchase']['vendor_id']}}">Show Vendor</a></span></li>

                        @endif

                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div> </div>
    </div>

@endsection

