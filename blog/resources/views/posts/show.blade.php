<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Student Records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2 class="text-center">View Post Informations</h2>
  @if(session('status'))
  <div class="alert alert-success">
      {{ session('status') }}
  </div>
@endif
    <div class="col-md-4 pb-sm-2">
       <a href="{{ url('/create') }}"><button class="btn btn-success">Add a post</button></a>
    </div>
  <table class=" table-responsive table-bordered table-striped">
    <thead>
      <tr class="table-primary">
        <th style="text-align: center">Id</th>
        <th style="text-align: center">Title</th>
        <th style="text-align: center">Content</th>
        <th style="text-align: center">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($posts as $post)
      <tr style="align-content: center">
      <td style="width: 10%; text-align: center;">{{ $post->id }}</td>
      <td style="width:20%"> {{ $post->title }}</td>
      <td style="width:50%">{{ $post->content }}</td>
      <td style="width:20%; text-align: center;">
          <a class="btn btn-danger" href="{{ url('/delete').'/'.$post->id }}">Delete</a>
          <a class="btn btn-info" href="{{ url('/edit').'/'.$post->id }}">Edit</a>
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>