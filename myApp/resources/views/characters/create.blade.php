@extends('characters.layout')

@section('content')
    <div class="card-body">
        <form action="{{ url('characters') }}" method="post">
            {!! csrf_field() !!}
            <div class="col">

                <div class="img">
                    <img id="characterImage" src="" alt="Character Image" class="img-fluid">
                </div>
                <label>Name</label>
                <input type="text" name="name" id="name" class="form-control"><br>
                <label>Level</label>
                <input type="text" name="level" id="level" class="form-control"><br>
                <label>Class</label>
                <input type="text" name="class" id="class" class="form-control"><br>
                <label>Image URL</label>
                <input type="text" name="image_url" id="image_url" class="form-control"
                    placeholder="Enter image URL"><br>
                <div class="buttons content row">
                    <div class="col">
                        <input type="submit" value="Save" class="btn btn-success">
                    </div>
                    <div class="col text-right">
                        <a class="btn btn-primary" href="{{ route('characters.index') }}">Back</a>
                    </div>
                </div>
            </div>

        </form>
    </div>




    <style>
        .card-body {
            border: 1px solid black;
            border-radius: 10px;
            width: 500px;
            height: 500px;
            /* Adjust the value to control the roundness */
            padding: 10px;
            box-shadow: 11 5px 5px rgba(0, 0, 0, 0.1);
            /* Adjust the values to control the shadow effect */
        }

        .img {
            border: 1px solid black;
            border-radius: 10px;
            height: 200px;
            width: 200px;
            padding: 5px;
        }

        .card-body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80%;
            /* Adjust the height to fit your requirements */
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#image_url').on('input', function() {
                var imageUrl = $(this).val();
                if (imageUrl.trim() === '') {
                    imageUrl =
                        'https://th.bing.com/th/id/OIG.pTw.ptymPTZONzpyEdAB?pid=ImgGn'; // Replace 'default-image.jpg' with your default image source
                }
                $('#characterImage').attr('src', imageUrl);
            });
        });
    </script>
@endsection
