@extends('layouts.app')

@section('content')
    <form action="{{ route('blogs.store') }}" method="POST">

        @csrf

        <div class="mb-3 w-25 m-auto">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="e.g Purrely">
        </div>
        <div class="mb-3 w-25 m-auto">
            <label for="" class="form-label">List</label>
            <input type="text" class="form-control" id="list" name="list" placeholder="Picture link">
        </div>
        <div class="mb-3 w-25 m-auto">
            <label for="" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Description">
        </div>
        <div class="mb-3 w-25 m-auto">
            <label for="" class="form-label">Category</label>
            <select name="category" class="form-select form-select-sm" aria-label=".form-select-lg example">
                <option value="" selected disabled>Please select</option>
                <option value="1">Meta</option>
                <option value="2">Rogue</option>
            </select>
        </div>
        <div class="mb-3 w-25 m-auto">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
@endsection
