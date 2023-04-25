@extends('layouts.app')

@section('content')
    <h1>Edit Booking</h1>
    <form action="{{ route('bookings.update', $booking) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="customer_id">Customer</label>
            <select name="customer_id" id="customer_id">
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}" {{ $booking->customer_id == $customer->id ? 'selected' : '' }}>{{ $customer->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="pitch_id">Pitch</label>
            <select name="pitch_id" id="pitch_id">
                @foreach ($pitches as $pitch)
                    <option value="{{ $pitch->id }}" {{ $booking->pitch_id == $pitch->id ? 'selected' : '' }}>{{ $pitch->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Update Booking</button>
    </form>
@endsection

















































































