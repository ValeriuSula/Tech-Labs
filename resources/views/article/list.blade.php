@extends('..layouts.master')
@section('content')<br><br><br><br>
<div style="width: 50%; margin-left:22%;">
   <a href="{{ route('articles.create') }}" class="btn btn-success mb-2">Add</a>
   <br>
   <div class="row" style="background-color:black; color: gold;">
      <div class="col-12">

         <table class="table table-bordered" id="laravel_crud" style="color: gold;">
            <thead>
               <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Created at</th>
                  <td colspan="2">Action</td>
               </tr>
            </thead>
            <tbody>
               @foreach($articles as $article)
               <tr>
                  <td>{{ $article->id }}</td>
                  <td>{{ $article->title }}</td>
                  <td>{{ date('d-m-Y', strtotime($article->created_at)) }}</td>
                  <td><a href="{{ route('articles.edit',$article->id)}}" class="btn btn-primary">Edit</a></td>
                  <td>
                     <form action="{{ route('articles.destroy', $article->id)}}" method="post">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                     </form>
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
         {!! $articles->links() !!}
      </div>
   </div>
</div>
@endsection