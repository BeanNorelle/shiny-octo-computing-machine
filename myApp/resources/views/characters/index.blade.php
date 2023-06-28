@extends('characters.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="header">
                <div class="float-right" style="padding: 10px;">
                    <a class="btn btn-success" href="{{ url('/characters/create') }}"> Create New Product</a>
                </div>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">

        <div class="row">
            @foreach ($characters as $character)
                <div class="col-lg-4 mb-4">
                    <div class="card character-card" style="width: 18rem;">
                        <div class="card-body">

                            <p class="card-text">ID: {{ $character->id }}</p>
                            <img class="media-img" src="{{ $character->image_url }}" alt="Character Image">
                            <h5 class="card-title">{{ $character->name }}</h5>
                            <p class="card-text">Class: {{ $character->class }}</p>
                            <p class="card-text">Level: {{ $character->level }}</p>


                            <div class="btn-group">
                                <a href="{{ url('/characters/' . $character->id) }}" title="View Characters">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                        View</button>
                                </a>
                                <a href="{{ url('/characters/' . $character->id . '/edit') }}" title="Edit Characters">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                            aria-hidden="true"></i> Edit</button>
                                </a>
                                <form method="POST" action="{{ url('/characters' . '/' . $character->id) }}"
                                    accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Character"
                                        onclick="return confirm(&quot;Confirm delete?&quot;)">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                    </button>
                                </form>
                            </div>

                        </div>



                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagination-sm">
            paginate >>
        </div>
    </table>




    <style>
        .character-card {
            border: 1px solid black;
            border-radius: 10px;
            width: 200px;
            height: 400px;
            /* Adjust the value to control the roundness */
            padding: 10px;
            box-shadow: 11 5px 5px rgba(0, 0, 0, 0.1);
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
    {{-- {{ $characters->links() }} --}}
@endsection
