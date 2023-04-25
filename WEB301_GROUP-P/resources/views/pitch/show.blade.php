@extends('layouts.app')
@section('title', 'Customer Details')
@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Pitch</th>
                <th> Slot </th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $pitch-> Pitch }}</td>
                <td>{{ $pitch-> Slot }}</td>
                <td>{{ $pitch-> Status }}</td>
            </tr>
        </tbody>
    </table>
@endsection