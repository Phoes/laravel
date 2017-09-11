<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>{{$name}}</h1>
<h2>Input name</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{ url('home') }}">
      {{ csrf_field() }}
      <input type="text" name="name" value=" {{ old('name') }}"><br><br>
      <h3>Input number</h3>
      <input type="number" name="age" value="{{ old('age') }}">
      <input type="submit" name="submit">
    
</form>
</body>
</html>