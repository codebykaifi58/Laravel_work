<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
    <div class="body">
        <nav class="sidebar">
            <h2>Admin Panel</h2>
            <a href="{{route('dash')}}">Dashboard</a>
            <a href="{{route('user')}}">Users</a>
            <a href="{{route('setting')}}">Settings</a>
            <a href="{{route('reports')}}">Reports</a>
            <a href="#">Logout</a>
        </nav>
    @yield('content')
    </div>


   
</body>
</html>