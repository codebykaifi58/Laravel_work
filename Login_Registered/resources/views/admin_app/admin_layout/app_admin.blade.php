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
            <a href="{{route('category')}}">Category</a>

            <!-- Dropdown -->
            <div class="dropdown">
            <button class="dropdown-toggle">Products</button>
            <ul class="dropdown-menu">
                <li><a href="{{route('addproduct')}}">Add Products</a></li>
                <li><a href="{{route('allproduct')}}">All Products</a></li>
            </ul>
            </div>

            <a href="{{route('setting')}}">Settings</a>
            <a href="{{route('reports')}}">Reports</a>
            <a href="#">Logout</a>
        </nav>

    @yield('content')
    </div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggles = document.querySelectorAll('.dropdown-toggle');

    toggles.forEach(toggle => {
      toggle.addEventListener('click', function () {
        const dropdownMenu = this.nextElementSibling;
        const isVisible = dropdownMenu.style.display === 'flex';

        // Slide toggle effect (basic)
        dropdownMenu.style.display = isVisible ? 'none' : 'flex';
      });
    });
  });
</script>

   
</body>
</html>