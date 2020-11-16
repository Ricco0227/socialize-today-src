@extends('layouts.app')

@section('content')
<div class="container">
     <form action="/p" enctype="multipart/form-data" method="post">
            @csrf
         
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label">Post Title</label>

                        <input id="title"
                               type="text"
                               class="form-control @error('title') is-invalid @enderror"
                               name="title"
                               value="{{ old('title') }}"
                               required autocomplete="title" autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="post" class="col-md-4 col-form-label"></label>

                    <input id="post"
                           type="text"
                           class="form-control @error('post') is-invalid @enderror"
                           name="post"
                           value="{{ old('post') }}"
                           required autocomplete="post" autofocus>

                    @error('post')
                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>
        </div>
         <div class="row">
             <div class="col-8 offset-2">
                 <div class="form-group row">
                     <label for="image" class="col-md-4 col-form-label">Add Image</label>

                     <input id="image"
                            type="file"
                            class="form-control-file"
                            name="image">

                     @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                 </div>

             </div>
         </div>

         <div class="row">
             <button class="btn btn-primary offset-2" type="submit">Add New Post</button>
         </div>
    </form>
@endsection