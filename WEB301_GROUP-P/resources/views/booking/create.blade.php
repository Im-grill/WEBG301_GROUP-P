@extends('layouts.app')

@section('content')
    <h1>Create Booking</h1>
    <form action="{{ route('booking.store') }}" method="POST">
        @csrf
        <div>
            <label for="customer_id">Customer</label>
            <select name="customer_id" id="customer_id">
                @foreach ($customer as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->Name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="pitch_id">Pitch</label>
            <select name="pitch_id" id="pitch_id">
                @foreach ($pitch as $pitch)
                    <option value="{{ $pitch->id }}">{{ $pitch->Pitch }}</option>
                @endforeach
            </select>
        </div>
        <div>

            <label for="Booking"> Booking date
                <input type="date" id="Booking" name="Booking">
            </div>
        <button type="submit">Create Booking</button>
    </form>
@endsection