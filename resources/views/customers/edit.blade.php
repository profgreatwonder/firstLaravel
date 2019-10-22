@extends('layout')

@section('title', 'Edit Details for '. $customer->name)

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Edit Details for {{ $customer->name}} </h1>
        {{-- <p><a href="customers/create">Add New Customer</a></p> --}}
    </div>
</div>


    <!-- <li>customer 1</li>

    <li>customer 2</li>

    <li>customer 3</li> -->

    <div class="row">
        <div class="col-12">
            <form action="/customers/{{$customer->id}}" method="POST">

                @method('PATCH')

                @include('customers.form')

                <button type="submit" class="btn btn-primary pt-3
                ">Save Customer</button>


            </form>
        </div>
    </div>
    @endsection
    {{-- <hr> --}}

    {{-- <div class="row">
        <div class="col-6">
            <h3>Active Customers</h3>
            <ul>

                // foreach ($customers as $customer) {
                //     echo '<li>' . $customer . '</li>';
                // }

            <!-- The above can be re-written as below -->

                    {{-- @foreach ($customers as $customer)
                         <li> {{ $customer->name }} <span class="text-muted"> {{ $customer->email }} </span> </li>
                        --}}
                    {{-- @foreach ($activeCustomers as $activeCustomer)
                    <li> {{ $activeCustomer->name }} <span class="text-muted"> ({{ $activeCustomer->company->name }}) </span> </li>
                    @endforeach
            </ul>
        </div>

        <div class="col-6">

            <h3>Inactive Customers</h3>
                <ul>
                        @foreach ($inactiveCustomers as $inactiveCustomer)
                        <li> {{ $inactiveCustomer->name }} <span class="text-muted"> ({{ $inactiveCustomer->company->name }}) </span> </li>
                        @endforeach
                </ul>
            </div>
    </div>

    <div class="row">
        {{-- <div class="col-12">
            @foreach ($companies as $company)
            <h3> {{ $company->name }} </h3>

            <ul>
                @foreach($company->customers as $customer) <li> {{ $customer->name }} </li>
                @endforeach
            </ul> --}}

            {{-- <ul>
                @foreach($company->$customers as $customer)
            <li> {{ $customer->name }} </li>

            @endforeach --}}
            {{-- </ul> --}}
            {{-- @endforeach
        </div>
    </div> --}}

