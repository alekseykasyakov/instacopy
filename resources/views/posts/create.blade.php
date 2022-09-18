@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="container-body">
        <form action="/p" enctype="multipart/form-data" method="post">
            @csrf

                <div class="row mb-3">
                    <h2>Add new post</h2>
                </div>
                <div class="row mb-3">
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

                    <div class="col-md-6">
                        <input id="caption"
                               type="text"
                               class="form-control @error('caption') is-invalid @enderror"
                               name="caption"
                               value="{{ old('caption') }}"
                                autocomplete="caption" autofocus>

                        @error('caption')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="image" class="col-md-4 col-form-label">Post Caption</label>
                    <input id="image"
                           type="file"
                           class="form-control-file"
                           name="image">
                    @error('image')

                                        <strong>{{ $message }}</strong>

                    @enderror
                </div>
                <div class="row mb-3 pt-4 col-md-3">
                    <button class="btn btn-primary btn">Add new Post</button>
                </div>

        </form>
    </div>
</div>
@endsection
