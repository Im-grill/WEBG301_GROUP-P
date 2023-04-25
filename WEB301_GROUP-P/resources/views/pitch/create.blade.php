@extends('layouts.app')
@section('title', 'Create Pitch')
@section('content')
    <form method="POST" action="/pitch">
        <h1> Creat Pitch </h1>
        @csrf
        <div>
            <label for="Pitch">Pitch</label>
            <input type="text" name="Pitch" id="Pitch">
        </div>
        <div>
            <label for="Slot">Slot</label>
            <input type="text" name="Slot" id="Slot">
        </div>
        <div>
            <label for="Status">Status</label>
            <input type="text" name="Status" id="Status">
        </div>
        <div>
            <label for="Image">Image</label>
            <input type="text" name="Image" id="Image">
        </div>
        <div>
            <button type="submit">Create</button>
        </div>


    </form>
@endsection
