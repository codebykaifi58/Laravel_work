<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
    <div style="width:100%;height:100px;background:black" id="header">
        <h2 style='color:white;text-align:center;line-height:100px'>This is Header</h2>
        <ul id="ul">
             <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('about')}}">about</a></li>
            <li><a href="{{route('blog')}}">blog</a></li>
            <li><a href="{{route('register')}}">register</a></li>
            <li><a href="{{route('login')}}">login</a></li>
    </ul>


    </div>
 

@yield('content')



    <div style="width:100%;height:100px;background:black;margin-top:600px">
        <h2 style='color:white;text-align:center;line-height:100px'>This is Footer</h2>
    </div>
</body>
</html>