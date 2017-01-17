<html>
<head>
    <title>ESP LOGIN</title>
    <link rel="stylesheet" type="text/css" href={{Asset('public/css/login.css')}}>
</head>
<body>

<div class="login-page">
  <div class="form">
    <form class="login-form" method="POST" action="{{URL::to("auth/login")}}">
    {!! csrf_field() !!}
      <input type="text" placeholder="email" name="email"/>
      <input type="password" placeholder="password" name="password" />
      <button>login</button>
    
    </form>
  </div>
</div>
</body>
</html>


