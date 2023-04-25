@extends('layouts.app')

@section('content')
    <h1>Bookings</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pitch ID</th>
                <th>Customer ID</th>
                <th>Booking Details</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($booking as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->pitch_id }}</td>
                    <td>{{ $booking->customer_id }}</td>
                    <td>{{ $booking->Booking }}</td>
                    <td>
                        <a href="{{ route('booking.edit', $booking) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('booking.destroy', $booking) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection



















































































