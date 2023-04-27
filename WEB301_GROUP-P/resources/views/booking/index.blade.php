@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 style="color: #4CAF50;">Bookings</h1>
        <a href="{{ route('booking.create') }}" class="btn btn-success">Add Booking</a>
    </div>
    <table class="table table-striped">
        <thead style="background-color: #4CAF50; color: white;">
            <tr>
                <th>ID</th>
                <th>Pitch ID</th>
                <th>Customer ID</th>
                <th>Booking Details</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($booking as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->pitch_id }}</td>
                    <td>{{ $booking->customer_id }}</td>
                    <td>{{ $booking->Booking }}</td>
                    <td class="d-flex">
                        <a href="{{ route('booking.edit', $booking) }}" class="btn btn-info mr-2">Edit</a>
                        <form action="{{ route('booking.destroy', $booking) }}" method="POST">
                            @csrf
                            @method('DELETE')
                         <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">No bookings found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
