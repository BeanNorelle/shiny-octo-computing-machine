@extends('Characters.layout')
@section('content')

    <div class="card">
        <div class="card-header">Edit page</div>
        <div class="card-body">

            <form action="{{ url('characters/' . $characters->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $characters->id }}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{ $characters->name }}"
                    class="form-control"></br>
                <label>class</label></br>
                <input type="text" name="class" id="class" value="{{ $characters->class }}"
                    class="form-control"></br>
                <label>level</label></br>
                <input type="text" name="level" id="level" value="{{ $characters->level }}"
                    class="form-control"></br>
                <label>image_url</label></br>
                <input type="text" name="image_url" id="image_url" value="{{ $characters->image_url }}"
                    class="form-control"></br>


            </form>
            <div class="col text-right">
                <input type="submit" value="Update" class="btn btn-success"><br>
                <a class="btn btn-primary float-right" href="{{ route('characters.index') }}">Back</a>
            </div>
        </div>
    </div>

@stop
