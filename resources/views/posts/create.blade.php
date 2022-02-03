@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
                <div class="col col-lg-5 col-md-6 col-sm-8">
                    <div class="section-title-s4">
                        <h2>Create A Post</h2>
                        <br>
                    </div>
                <br><br>
            </div>
            <form action="/p"  enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">{{ __('Post caption') }}</label>
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}"  autocomplete="caption">
                     @error('caption')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">{{ __('Image') }}</label>
                    <input id="image" type="file" class="form-control" name="image">
                     @if($errors->has('image'))
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Add New Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
