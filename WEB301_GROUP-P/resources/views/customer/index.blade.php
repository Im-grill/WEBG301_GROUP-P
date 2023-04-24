@extends('layouts.app')
@section('title', 'Customers')
@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th> ID </th>
                <th>  Name  </th>
                <th>  Sex  </th>
                <th>  Phone Number  </th>
                <th>  Action  </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customer as $customers)
                <tr>
                    <td>{{ $customers->id }}</td>
                    <td>{{ $customers->Name }}</td>
                    <td>{{ $customers->Sex }}</td>
                    <td>{{ $customers->phoneNumber }}</td>
                    <td>
                        <a href="{{ route('customer.edit', $customers->id) }}" class="btn btn-primary">Edit</a>
                        <a class ="btn btn-sm">
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