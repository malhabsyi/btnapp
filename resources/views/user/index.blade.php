<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/registrasi">Create User</a>
    @foreach ($user as $user)
        <h3>{{ $user->user_name }}</h3>
        <h3>{{ $user->user_email }}</h3>
        <h3>{{ $user->kantorcabang->kantor_cabang_name }}</h3>
        
    @endforeach
    
</body>
</html>