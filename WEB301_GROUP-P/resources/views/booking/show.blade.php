


@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="color: green;">Booking Details</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $booking->id }}</td>
            </tr>
            <tr>
                <th>Pitch ID</th>
                <td>{{ $booking->pitch_id }}</td>
            </tr>
            <tr>
                <th>Customer ID</th>
                <td>{{ $booking->customer_id }}</td>
            </tr>
            <tr>
                <th>Booking</th>
                <td>{{ $booking->Booking }}</td>
            </tr>
        </table>
    </div>
@endsection












































































