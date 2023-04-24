@extends('layouts.app')

@section('content')
    <h1>Booking Details</h1>
    <p>ID: {{ $booking->id }}</p>
    <p>Pitch ID: {{ $booking->pitch_id }}</p>
    <p>Customer ID: {{ $booking->customer_id }}</p>
    <p>Booking Details: {{ $booking->Booking }}</p>
    <a href="{{ route('bookings.edit', $booking) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('bookings.destroy', $booking) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection





{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Booking Details</h1>
        <p>Pitch: {{ $booking->pitch->name }}</p>
        <p>Customer: {{ $booking->customer->name }}</p>
        <p>Date: {{ $booking->date }}</p>
    </div>
@endsection --}}












































































