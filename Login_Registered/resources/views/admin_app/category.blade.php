@extends('admin_app.admin_layout.app_admin')

@section('content')

<main class="main-content">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mine Categories</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    @include('flash');
  <h2>Mine Categories</h2>

  <!-- Form to Add/Edit Mine Category -->
  <form id="mineCategoryForm" class="mb-4" action="{{route('addcategory')}}" method="POST">
    @csrf
    <div class="row g-3 align-items-center">
      <div class="col-md-4">
        <label for="categoryName" class="form-label">Category Name</label>
        <input type="text" class="form-control" id="categoryName" name="categoryName" >
      </div>
      <!-- <div class="col-md-4">
        <label for="categoryDescription" class="form-label">Description</label>
        <input type="text" class="form-control" id="categoryDescription" name="categoryDescription">
      </div> -->
      <div class="col-md-4 d-flex align-items-end">
        <button type="submit" class="btn btn-primary">Add Category</button>
      </div>
    </div>
  </form>

  <!-- Table to Show Existing Mine Categories -->
  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>#</th>
        <th>Category Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody id="categoryTableBody">
      <!-- Example row -->
      @foreach($category as $category)
      <tr>

        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
  
        <td>
          <button class="btn btn-sm btn-warning">Edit</button>
          <button class="btn btn-sm btn-danger">Delete</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<!-- <script>
  // Example JS to handle form submission (to be connected with backend or local storage)
  document.getElementById("mineCategoryForm").addEventListener("submit", function (e) {
    e.preventDefault();
    const name = document.getElementById("categoryName").value;
    const desc = document.getElementById("categoryDescription").value;

    // Add a new row (in a real app, you'd also persist to backend)
    const tableBody = document.getElementById("categoryTableBody");
    const rowCount = tableBody.rows.length + 1;

    const newRow = tableBody.insertRow();
    newRow.innerHTML = `
      <td>${rowCount}</td>
      <td>${name}</td>
      <td>${desc}</td>
      <td>
        <button class="btn btn-sm btn-warning">Edit</button>
        <button class="btn btn-sm btn-danger">Delete</button>
      </td>
    `;

    // Clear form
    document.getElementById("mineCategoryForm").reset();
  });
</script> -->

</body>
</html>


  </main>

@endsection