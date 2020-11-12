@extends('..layouts.master')
@section('content')<br><br><br><br>
<div style="width: 50%; margin-left:22%;">
    <h2 style="margin-top: 12px;" class="text-center">Edit article</a></h2>
    <br>
    <form action="{{ route('articles.update', $article_info->id) }}" method="POST" name="update_article">
        {{ csrf_field() }}
        @method('PATCH')

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Title</strong>
                    <input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{ $article_info->title }}">
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <strong>Price</strong>
                    <textarea class="form-control" col="4" name="description" placeholder="Enter Price">{{ $article_info->description }}</textarea>
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <strong>Text</strong>
                    <input type="text" name="text" class="form-control" placeholder="Enter article Text" value="{{ $article_info->text }}">
                    <span class="text-danger">{{ $errors->first('text') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Image</strong>
                    <input type="text" name="img" class="form-control" placeholder="Enter link Image" value="{{ $article_info->img }}">
                    <span class="text-danger">{{ $errors->first('img') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
</div>
@endsection