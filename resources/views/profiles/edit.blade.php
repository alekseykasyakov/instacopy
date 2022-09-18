@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="container-body">
        <div class="row justify-content-center">
            <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PATCH')

                <div class="row mb-3">
                    <h2>Edit Profile</h2>
                </div>
                <div class="row mb-3">
                    <label for="title" class="col-md-4 col-form-label">Title</label>

                    <div class="col-md-6">
                        <input id="title"
                               type="text"
                               class="form-control @error('title') is-invalid @enderror"
                               name="title"
                               value="{{ old('title') ?? $user->profile->title}}"
                               autocomplete="title" autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="description" class="col-md-4 col-form-label">Description</label>

                    <div class="col-md-6">
                        <input id="description"
                               type="text"
                               class="form-control @error('description') is-invalid @enderror"
                               name="description"
                               value="{{ old('description') ?? $user->profile->description }}"
                               autocomplete="description" autofocus>

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="url" class="col-md-4 col-form-label">URL</label>

                    <div class="col-md-6">
                        <input id="url"
                               type="text"
                               class="form-control @error('url') is-invalid @enderror"
                               name="url"
                               value="{{ old('url') ?? $user->profile->url}}"
                               autocomplete="url" autofocus>

                        @error('url')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                    <input id="image"
                           type="file"
                           class="form-control-file"
                           value="{{ old('image') ?? $user->profile->image}}"
                           name="image">
                    @error('image')

                    <strong>{{ $message }}</strong>

                    @enderror
                </div>
                <div class="row mb-3 pt-4 col-md-3">
                    <button class="btn btn-primary btn">Save Profile</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
