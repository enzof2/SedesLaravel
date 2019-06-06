<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <div class="container">
      <table class="table table-bordered">
               
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Perfil</th>
        </tr>
        @foreach ($listado as $user)
        <tr>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->perfiles['description']}}</td>
        </tr>
        @endforeach
      </table>
  </div>
</body>
</html>