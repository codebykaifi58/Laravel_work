<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
#nav{
    width: 100vw;
    height:100px;
    background:black;
    display:flex;
    align-items:center;
    justify-content:center
}

ul li{
    display:inline
}
ul li a{
    text-decoration:none;
    padding: 10px 10px;
}
</style>
<body>

<div id='nav'>
    <div id="links">
        <ul>
            <li><a href="{{('home')}}" style="color:white">Home</a></li>
            <li><a href="{{('about')}}" style="color:white">about</a></li>
            <li><a href="{{('blog')}}" style="color:white">blog</a></li>
            <li><a href="{{('service')}}" style="color:white">service</a></li>
</ul>
<ul style="float:right">
            <li><a href="{{('login')}}" style="color:white">Login</a></li>
            <li><a href="{{('register')}}" style="color:white">Register</a></li>
        </ul>
    </div>
</div>


@yield('content')


<div style="width:100vw;height:100px;background:black">
    <h1>Footer</h1>
</div>
</body>
</html>