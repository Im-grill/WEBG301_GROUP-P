@extends('layouts.app')
@section('title', 'Customers')
@section('content')
<style>
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
    <h1>Customers</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>  Name  </th>
                <th>  Sex  </th>
                <th>  Phone Number  </th>
                <th>  Action  </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customer as $customers)
                <tr>
                    <td>{{ $customers->Name }}</td>
                    <td>{{ $customers->Sex }}</td>
                    <td>{{ $customers->phoneNumber }}</td>
                    <td>
                        <a href="{{ route('customer.show', $customers->id) }}" class="btn btn-info">Details</a>
                        <a href="{{ route('customer.edit', $customers->id) }}" class="btn btn-primary">Edit</a>
                        <a class = "btn btn-sm">
                        <form method="POST" action="{{ route('customer.destroy', $customers->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                      </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection