@extends('characters.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show character</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('characters.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="col-lg-4 mb-4">
        <div class="card character-card" style="width: 18rem;">
            <div class="card-body">

                <p class="card-text">ID: {{ $characters->id }}</p>
                <img class="media-img" src="{{ $characters->image_url }}" alt="Character Image">
                <h5 class="card-title">{{ $characters->name }}</h5>
                <p class="card-text">Class: {{ $characters->class }}</p>
                <p class="card-text">Level: {{ $characters->level }}</p>
                <p class="card-text">description: {{ $characters->description }}</p>

            </div>
        </div>
    </div>

    <style>
        .character-card {
            border: 1px solid black;
            border-radius: 10px;
            margin: 30px;
            width: 600px;
            height: 500px;
            /* Adjust the value to control the roundness */
            padding: 10px;
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.1);
            /* Adjust the values to control the shadow effect */

        }

        .media-img {
            border: 1px solid black;
            border-radius: 10px;
            max-height: 70%;
            max-width: 70%;
            padding: 5px;
        }

        .btn-group button {
            margin-top: 10px;
            margin-right: 10px;
        }
    </style>
@endsection
