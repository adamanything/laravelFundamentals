<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Master Page</h1>

    @yield('content')


    @yield('footer')

      @if($errors != null)
          <ul class="alert alert-danger">
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
          </ul>
      @endif
  </div>
</body>
</html>