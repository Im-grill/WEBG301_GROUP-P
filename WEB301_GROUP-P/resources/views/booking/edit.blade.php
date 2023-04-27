@extends('layouts.app')

@section('content')
    <div style="max-width: 500px; margin: 0 auto;">
        <h1 style="color: #4CAF50; text-align: center; font-size: 2.5rem; margin-bottom: 20px;">Edit Booking</h1>
        <form action="{{ route('booking.update', $booking->id) }}" method="POST" style="display: flex; flex-direction: column;">
            @csrf
            @method('PUT')
            <div style="margin-bottom: 20px;">
                <label for="customer_id" style="display: block; font-size: 1.2rem; margin-bottom: 10px;">Customer</label>
                <select name="customer_id" id="customer_id" style="width: 100%; padding: 10px; font-size: 1.2rem;">
                    @foreach ($customer as $customer)
                        <option value="{{ $customer->id }}" {{ $booking->customer_id == $customer->id ? 'selected' : '' }}>{{ $customer->Name }}</option>
                    @endforeach
                </select>
            </div>
            <div style="margin-bottom: 20px;">
                <label for="pitch_id" style="display: block; font-size: 1.2rem; margin-bottom: 10px;">Pitch</label>
                <select name="pitch_id" id="pitch_id" style="width: 100%; padding: 10px; font-size: 1.2rem;">
                    @foreach ($pitch as $pitch)
                        <option value="{{ $pitch->id }}" {{ $booking->pitch_id == $pitch->id ? 'selected' : '' }}>{{ $pitch->Pitch }}</option>
                    @endforeach
                </select>
            </div>
            <div style="margin-bottom: 20px;">
                <label for="Booking" style="display:block; font-size:1.2rem; margin-bottom:10px;">Booking Date:</label>
                <input type="datetime" name ="Booking" id="Booking" value="{{$booking->Booking}}" style="width:100%; padding:10px; font-size:1.2rem;">
            </div>
            <button type="submit" style="background-color:#4CAF50; color:white; padding:15px; border:none; cursor:pointer; font-size:1.2rem;">Update Booking</button>
        </form>
    </div>
@endsection