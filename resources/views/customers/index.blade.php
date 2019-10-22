@extends('layout')

@section('title', 'Customer List')
{{-- Customer Lists --}}
{{-- @endsection --}}

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Customer List</h1>
        <p><a href="customers/create">Add New Customer</a></p>
    </div>
</div>


@foreach($customers as $customer)
<div class="row">
    <div class="col-2">
        {{ $customer->id }}
    </div>

    <div class="col-4">
        <a href="/customers/{{ $customer->id}}">  {{ $customer->name }}</a>

    </div>

    <div class="col-4">
        {{ $customer->company->name}}
    </div>
<div class="col-2">
    {{ $customer->active }}
</div>

@endforeach
<div>
@endsection
    {{-- <div class="col-6">
        <h3>Active Customers</h3>
        <ul>

                @foreach ($activeCustomers as $activeCustomer)
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

@endforeach --}}


{{--
    <!-- <li>customer 1</li>

    <li>customer 2</li>

    <li>customer 3</li> -->

    <div class="row">
        <div class="col">
            <form action="customers" method="POST">

                <label for="name">Name:</label>
                <div class="form-group pb-3">
                    <input type="text" name="name" value=" {{ old('name') }} " class="form-control">
                    <div>{{ $errors->first('name') }}</div>
                </div>

                <label for="email">Email:</label>
                <div class="form-group pb-3">
                    <input type="text" name="email" value=" {{ old('email ') }} " class="form-control">
                    <div>{{ $errors->first('email') }}</div>
                </div>

                <div class="form-group">
                    <label for="active">Status</label>
                    <select name="active" id="active" class="form-control">
                        <option value="" disabled>Select customer status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="company_id">Company</label>
                    <select name="company_id" id="company_id" class="form-control">
                        @foreach ($companies as $company)

                        <option value=" {{$company->id}}"> {{ $company->name}} </option>

                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary pt-3
                ">Add Customer</button>

                @csrf
            </form>
        </div>
    </div> --}}
    {{-- <hr> --}}


                <?php
                // foreach ($customers as $customer) {
                //     echo '<li>' . $customer . '</li>';
                // }
                ?>
            <!-- The above can be re-written as below -->

                    {{-- @foreach ($customers as $customer)
                         <li> {{ $customer->name }} <span class="text-muted"> {{ $customer->email }} </span> </li>
                        --}}

    {{-- <div>{{$companies->links()}}</div> --}}



