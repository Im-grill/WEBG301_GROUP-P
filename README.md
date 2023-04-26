# WEBG301_GROUP-P


edit.blade.php


 @extends('layouts.app')


@section('content')
    <h1>Edit Pitch</h1>
    <form action="{{ route('pitch.update', $pitch->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="pitch">Pitch:</label>
            <input type="text" id="pitch" name="pitch" value="{{ $pitch->Pitch }}">
        </div>
        <div>
            <label for="slot">Slot:</label>
            <input type="text" id="slot" name="slot" value="{{ $pitch->Slot }}">
        </div>
        <div>
            <label for="status">Status:</label>
            <input type="text" id="status" name="status" value="{{ $pitch->Status }}">
        </div>
        <div>
            <label for="image">Image:</label>
            <input type="text" id="image" name="image" value="{{ $pitch->Image }}">
        </div>
        <button type="submit">Save</button>
    </form>
@endsection
