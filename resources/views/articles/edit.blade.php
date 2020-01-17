@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <h1>edit article</h1>
                <form method="POST" action="/articles/{{$article->id}}">
                    @csrf
                    @method('PUT')
                    <div class="field">
                        <label class="label" for="title">Title</label>
                        <div class="control">

{{--                            <input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" id="title" value="{{$article->title}}">--}}
{{--                            @if ($errors->has('title'))--}}
{{--                                <p>{{ $errors->first('title') }}</p>--}}
{{--                            @endif--}}

                            <input class="input @error('title') 'is-danger' @enderror" type="text" name="title" id="title" value="{{$article->title}}">
                            @error('title')
                                <p>{{ $errors->first('title') }}</p>
                            @enderror
                        </div>

                    </div>

                    <div class="field">
                        <label class="label" for="excerpt">Excerpt</label>
                        <div class="control">
                            <textarea class="textarea @error('excerpt') 'is-danger' @enderror" name="excerpt" id="excerpt" >{{$article->excerpt}}</textarea>
                            @error('excerpt')
                            <p>{{ $errors->first('excerpt') }}</p>
                            @enderror
                        </div>

                    </div>

                    <div class="field">
                        <label class="label" for="body">body</label>
                        <div class="control">
                            <textarea class="textarea @error('body') 'is-danger' @enderror" name="body" id="body" >{{$article->body}}</textarea>
                            @error('body')
                            <p>{{ $errors->first('body') }}</p>
                            @enderror
                        </div>

                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Submit</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
