@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
                <div class="col-6 offset-3">
                <div class="col col-lg-5 col-md-6 col-sm-8">
                    <div class="section-title-s4">
                        <h2>Edit Profile</h2>
                        <br>
                    </div>
                <br><br>
            </div>
            <form action="/profile/{{ $user -> id}}"  enctype="multipart/form-data" method="POST">
                @csrf

                @method('PATCH')
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">{{ __(' Title') }}</label>
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user ->profile ->title }}"  autocomplete="title">
                     @error('title')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">{{ __('Description') }}</label>
                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user ->profile ->description }}"  autocomplete="description">
                     @error('description')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label">{{ __('Url') }}</label>
                    <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user ->profile ->url }}"  autocomplete="url">
                     @error('url')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">{{ __('Profile Image') }}</label>
                    <input id="image" type="file" class="form-control" name="image">
                     @if($errors->has('image'))
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Save Profile</button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
