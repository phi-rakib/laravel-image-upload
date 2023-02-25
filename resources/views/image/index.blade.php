@extends('layout')

@section('content')
    <div class="panel-heading">
        <h2>Laravel Image Upload</h2>
    </div>

    <div class="panel-body">

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
            <img src="images/{{ Session::get('image') }}" alt="">
        @endif
        
        <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="inputImage" class="form-label">
                    <strong>Image</strong>
                </label>
                <input type="file" name="image" id="inputImage" class="form-control @error('image') is-invalid @enderror">

                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                    
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">
                        Upload
                    </button>
                </div>

            </div>
        </form>
    </div>
@endsection
