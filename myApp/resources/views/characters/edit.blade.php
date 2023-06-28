@extends('Characters.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Edit page</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('characters/' . $characters->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" value="{{ $characters->id }}" />
                <label>Name</label>
                <input type="text" name="name" value="{{ $characters->name }}" class="form-control" />
                <label>Class</label>
                <input type="text" name="class" value="{{ $characters->class }}" class="form-control" />
                <label>Level</label>
                <input type="text" name="level" value="{{ $characters->level }}" class="form-control" />
                <label>Image URL</label>
                <input type="text" name="image_url" value="{{ $characters->image_url }}" class="form-control" />
                <label>Description</label>
                <textarea name="description" rows="4" class="form-control">{{ $characters->description }}</textarea>

                <div class="col text-right" style="padding-top: 10px;">
                    <input type="submit" value="Update" class="btn btn-success" />
                    <a class="btn btn-primary float-right" href="{{ route('characters.index') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
