<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

<div class="container mt-4">

  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Laravel 8 - Add Blog Post Form Example
    </div>
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('/edit_data')}}">
       @csrf

       <input type="hidden" name="id" value="{{ $post->id }}" >
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" id="title" name="title" value="{{ $post->title }}" class="form-control" required="">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Content</label>
          <textarea name="content" class="form-control" required="">{{ $post->content }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
  </div>
</div>    
</body>
</html>