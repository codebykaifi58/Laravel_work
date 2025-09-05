@extends('admin_app.admin_layout.app_admin')

@section('content')

<main class="main-content">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">

<div class="container mt-5">
  <h2>Add New Product</h2>
  <form action="{{route('addproductstore')}}" method="POST" enctype="multipart/form-data" class="mt-4">
 @csrf
    <!-- Product Name -->
    <div class="mb-3">
      <label for="productName" class="form-label">Product Name</label>
      <input type="text" class="form-control" id="productName" name="productName" required>
    </div>

    <!-- Product Category -->
    <div class="mb-3">
      <label for="productCategory" class="form-label">Product Category</label>
      <select class="form-select" id="productCategory" name="productCategory" required>
        <option value="">Select Category</option>
        @foreach($category as $category)
        <option value="{{ $category->id }}">{{$category->name}}</option>
     
     @endforeach 
      </select>
    </div>

    <!-- Product Freshness -->
    <div class="mb-3">
      <label class="form-label">Product Freshness</label>
      <div>
        <div class="form-check form-check-inline">
          <input class="form-check-input"  value="Brandnew" type="radio" name="productFreshness" id="brandNew" value="Brand New" required>
          <label class="form-check-label"  for="brandNew">Brand New</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" value="Brandnew" type="radio" name="productFreshness" id="secondHand" value="Second Hand">
          <label class="form-check-label" for="secondHand">Second Hand</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" value="refurbished" name="productFreshness" id="refurbished" value="Refurbished">
          <label class="form-check-label" for="refurbished">Refurbished</label>
        </div>
      </div>
    </div>

    <!-- Product Image -->
    <div class="mb-3">
      <label for="productImage" class="form-label">Product Image</label>
      <input type="file" class="form-control" id="productImage" name="productImage" accept="image/*">
    </div>

    <!-- Product Description -->
    <div class="mb-3">
      <label for="productDescription" class="form-label">Additional Description</label>
      <textarea class="form-control" id="productDescription" name="productDescription" rows="3"></textarea>
    </div>

    <!-- Product Price -->
    <div class="mb-3">
      <label for="productPrice" class="form-label">Product Price ($)</label>
      <input type="number" class="form-control" id="productPrice" name="productPrice" min="0" step="0.01" required>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Submit Product</button>
  </form>
</div>


<!-- fetch products -->
<div class="container">
  <div class="row">
    @foreach($product as $product)
      <div class="col-md-4 mb-4">
        <div class="card h-100">
      <img src="{{ asset('storage/' . $product->productImage) }}" class="card-img-top" alt="{{ $product->name }}">

          <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="text-dark">{{$product->productCategory}}</p>
            <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
          </div>
          <div class="card-footer">
            <span class="text-muted">Price: ${{ $product->productPrice }}</span>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>



</body>
</html>



  </main>

@endsection