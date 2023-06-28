@extends('characters.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Create Page</h2>
        </div>
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <form action="{{ url('characters') }}" method="post">
                        {!! csrf_field() !!}
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control"><br>
                        <label for="level">Level</label>
                        <input type="text" name="level" id="level" class="form-control"><br>
                        <label for="class">Class</label>
                        <input type="text" name="class" id="class" class="form-control"><br>
                        <label for="image_url">Image URL</label>
                        <input type="text" name="image_url" id="image_url" class="form-control"
                            placeholder="Enter image URL"><br>
                        <label for="description">Description</label>
                        <textarea class="form-control" rows="4" placeholder="Enter your text" name="description" id="description"></textarea>

                        <div class="col text-right">
                            <input type="submit" value="Update" class="btn btn-success" onclick="return validateForm()" />
                            <a class="btn btn-primary float-right" href="{{ route('characters.index') }}">Back</a>
                        </div>

                    </form>
                </div>
            </div>

            <div class="col">
                <div class="img">
                    <img id="characterImage" src="" alt="Character Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <style>
        .card-body {
            width: 400px;
            height: 90%;
        }

        .img:hover {
            transform: scale(1.1);
        }

        .col {
            margin: 30px;
        }

        .img {
            border: 1px solid rgb(107, 107, 107);
            border-radius: 10px;
            height: 300px;
            width: 300px;
            padding: 5px;
            transition: transform 0.3s ease;
        }

        .card {
            height: 90%;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function validateForm() {
            var name = $('#name').val();
            var level = $('#level').val();
            var characterClass = $('#class').val();
            var imageUrl = $('#image_url').val();
            var description = $('#description').val();

            if (name.trim() === '' || level.trim() === '' || characterClass.trim() === '' || imageUrl.trim() === '' ||
                description.trim() === '') {
                alert('Please fill in all the fields');
                return false;
            }

            return true;
        }

        $(document).ready(function() {
            $('#image_url').on('input', function() {
                var imageUrl = $(this).val();
                if (imageUrl.trim() === '') {
                    imageUrl =
                    'https://th.bing.com/th/id/OIG._weSeNvrW03PPp0bGru5?pid=ImgGn'; // Replace 'default-image.jpg' with your default image source
                }
                $('#characterImage').attr('src', imageUrl);
            });
        });
    </script>
@endsection
