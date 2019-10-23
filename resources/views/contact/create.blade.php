@extends('layouts.app')

{{-- @section('title')

    Contact Us

@endsection--}}

{{-- The code above is a long method but the code below is a shorter method --}}

@section('title', 'Contact Us')

@section('content')
<h1>Contact Us</h1>

{{-- <p>Company Name</p>
<p>123-123-123</p> --}}

@if (! session()->has('message'))

{{-- instead of the url helper "<form action="{{ url('/contact') }}" method="POST">", we use the route in its place. This helps in a situation where you eventually change ur route name, the change gets to show up in the view--}}
<form action="{{ route('contact.store') }}" method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <div class="form-group pb-5">
            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
            <div>{{ $errors->first('name') }}</div>
        </div>

        <div class="form-group">
        <label for="email">Email</label>
        <div class="form-group pb-5">
            <input type="text" name="email" value=" {{ old('email') }}" class="form-control">
            <div>{{ $errors->first('email') }}</div>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <div class="form-group pb-5">
                <textarea name="message" id="message" cols="30" rows="10" class="form-control"> {{ old('message') }}</textarea>
                <div>{{ $errors->first('message') }}</div>
            </div>

            @csrf

            <button type="submit" class="btn btn-primary">Send Message</button>
</form>

@endif

@endsection
