<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger shadow-none btn-logout" id="logout">Logout</button>
    </form>

    
    <a href="/akun">User</a>
    <h3>hello, {{$userlogin->user_name }}</h3>

    <h3>outlet = {{ $noutlet }}</h3>
    <h3>kantor cabang = {{ $nkantorcabang }}</h3>
    <h3>jumlah useradmin = {{ $nuseradmin }}</h3>
    <h3>jumlah usersuperadmin = {{ $nusersuperadmin }}</h3>


    <h3>notif</h3>
    <table class="table table table-bordered">
        <thead>
            <tr>
                <th>id outlet</th>
                <th>nama outlet</th>
                <th>tenggat</th>
                <th>kantor cabang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alloutlet as $notif)
            <tr>
                <td>{{ $notif->id }}</td>
                <td>{{ $notif->outlet_name }}</td>
                <td>{{ $notif->outlet_deadline }}</td>
                <td>{{ $notif->kantor_cabang_id }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h3>status outlet</h3>
    <h3>sewa = {{ $persensewaoutlet }} %</h3>
    <h3>milik perusahan = {{ $persenmilikoutlet }} %</h3>

    <h3>status sewa</h3>
    <h3>belum dibayar sewa {{ $persenbelumdibayar }}%</h3>
    <h3>belum sudah dibayar sewa {{ $persensudahdibayar }}%</h3>

</body>
</html>