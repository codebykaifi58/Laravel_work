@extends('admin_app.admin_layout.app_admin')

@section('content')

<main class="main-content">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product Table</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

  <h2 class="mb-4">Product List</h2>


      <table>
      <thead>
        <tr>
            <th>#</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Freshness</th>
            <th>Image</th>
            <th>Description</th>
            <th>Price ($)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td>1</td>
            <td>iPhone 15</td>
            <td>Electronics</td>
            <td>Brand New</td>
            <td><img src="https://via.placeholder.com/50" alt="Product Image"></td>
            <td>Latest iPhone model with improved camera and battery.</td>
            <td>999.99</td>
        </tr>
      </tbody>
    </table>

</body>
</html>



  </main>

@endsection