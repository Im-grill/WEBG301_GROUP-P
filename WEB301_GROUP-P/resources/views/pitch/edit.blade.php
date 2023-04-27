@extends('layouts.app')
@section('title', 'Edit Pitch')
@section('content')
<form method="POST" action="{{ route('pitch.update', $pitch->id) }}">
    @csrf
    @method('PUT')
    <h1> Edit Pitch </h1>
    <div>
        <label for="Pitch">Pitch</label>
        <input type="text" name="Pitch" id="Pitch" value="{{ $pitch->Pitch }}">
    </div>
    <div>
        <label for="Slot">Slot</label>
        <input type="text" name="Slot" id="Slot" value="{{ $pitch->Slot }}">
    </div>
    <div>
        <label for="Status">Status</label>
        <input type="text" name="Status" id="Status" value="{{ $pitch->Status }}">
    </div>
    <div>
        <label for="Image">Image</label>
        <input type="text" name="Image" id="Image" value="{{ $pitch->Image }}">
    </div>
    <div>
        <button type="submit">Update</button>
    </div>
</form>
@endsection