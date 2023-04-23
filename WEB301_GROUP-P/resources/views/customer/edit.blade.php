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
        <h1>Update Customer</h1>
        <div class="input-group mb-3">
            <span class="input-group-text">Name</span>
            <input type="text" class="form-control" placeholder="Username" name="Name" id="Name" value="{{ $customer->Name }}">
          <span class="input-group-text">Sex</span>
          <input type="text" class="form-control"  name="Sex" id="Sex" value="{{ $customer->Sex }}">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text">Phone Number</span>
            <input type="text" class="form-control" placeholder="Username" name="phoneNumber" id="phoneNumber" value="{{ $customer->phoneNumber }}">
        </div>
        <div>
            <button type="submit" class="btn btn-outline-success">Update</button>
            <button type="cancel" class="btn btn-outline-secondary" a href="/index">Cancel</button>
        </div>
@endsection