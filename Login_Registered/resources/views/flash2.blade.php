@if (session('success2'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        {{ session('success2') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
