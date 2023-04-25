@extends('layouts.app')

@section('content')
    <h1>Edit Booking</h1>
    <form action="{{ route('booking.update', $booking) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="customer_id">Customer</label>
            <select name="customer_id" id="customer_id">
                @foreach ($customer as $customer)
                    <option value="{{ $customer->id }}" {{ $booking->customer_id == $customer->id ? 'selected' : '' }}>{{ $customer->Name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="pitch_id">Pitch</label>
            <select name="pitch_id" id="pitch_id">
                @foreach ($pitch as $pitch)
                    <option value="{{ $pitch->id }}" {{ $booking->pitch_id == $pitch->id ? 'selected' : '' }}>{{ $pitch->Pitch }}</option>
                @endforeach
            </select>
        </div>

        <div>

                    <label> Booking date
                    <input type="datetime" name ="Booking" id="Booking" value="{{$booking->Booking}}" >


        </div>
        <button type="submit">Update Booking</button>
    </form>
@endsection

















































































