@extends('admin_app.admin_layout.app_admin')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="container mt-5">
    @include('flash2');
  <h2>Mine Categories</h2>

  <!-- Form to Add/Edit Mine Category -->
  <form id="mineCategoryForm" class="mb-4" action="{{route('addcategory2')}}" method="POST">
    @csrf
    <div class="row g-3 align-items-center">
      <div class="col-md-4">
        <label for="categoryName" class="form-label">Category Name</label>
        <input type="text" class="form-control" id="categoryName" name="category2Name" >
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
       @foreach($category2 as $category2)
      <tr>

        <td>{{$category2->id}}</td>
        <td>{{$category2->name2}}</td>
        
        <td>
          <button class="btn btn-sm btn-warning">Edit</button>
          <button class="btn btn-sm btn-danger">Delete</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>

@endsection