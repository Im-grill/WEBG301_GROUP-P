@extends('layouts.app')
@section('title', 'Edit Customer')
@section('content')
<style>
    body {
        background: rgb(238,174,202);
background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
}
  th{
    background: rgb(238,174,202);
    background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 48%);
  }
  h1{
    text-align: center;
  }
    </style>
    <form action="{{ route('customer.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="Name">Name</label>
            <input type="text" name="Name" id="Name" value="{{ $customer->Name }}">
        </div>
        <div>
            <label for="Sex">Sex</label>
            <input type="text" name="Sex" id="Sex" value="{{ $customer->Sex }}">
        </div>
        <div>
            <label for="phoneNumber">Phone Number</label>
            <input type="integer" name="phoneNumber" id="phoneNumber" {{ $customer->phoneNumber  }}>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
@endsection