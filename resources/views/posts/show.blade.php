@extends('layouts.app')
@section('content')
    <div class="col-md-6 col-md-offset-3">
        <h1>Your Details</h1>
        <div class="form-group">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('posts.update', $post->id) }}">
                {{ method_field('PUT') }}
                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title" class="col-md-8">Title</label>

                    <div class="col-md-10">
                        <input id="title" type="text" class="form-control" name="title" value="{{ $post->title }}">

                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-8">Passowrd</label>

                    <div class="col-md-10">
                        <input id="password" type="text" class="form-control" name="password" value="{{ $post->password }}">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                    <label for="url" class="col-md-8">Url</label>

                    <div class="col-md-10">
                        <input id="url" type="text" class="form-control" name="url" value="{{ $post->url }}">

                        @if ($errors->has('url'))
                            <span class="help-block">
                                <strong>{{ $errors->first('url') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description" class="col-md-8">Description</label>

                    <div class="col-md-10">
                        <textarea type="text" class="form-control" name="description" rows="10">{{ $post->description }}
                        </textarea>

                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4" style="text-align: right">
                        <button type="submit" class="btn btn-primary">
                            Create Post
                        </button>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>



@endsection



