@extends('admin.admin_nav.adminNav')

@section('content')

<main class="main-content">
    <h1>Users</h1>

    <div class="card-container">
      <div class="card">
        <h3>Total Users</h3>
        <p>1,234</p>
      </div>
      <div class="card">
        <h3>Active Sessions</h3>
        <p>321</p>
      </div>
      <div class="card">
        <h3>Server Load</h3>
        <p>45%</p>
      </div>
    </div>

    <table>
      <thead>
        <tr>
          <th>User</th>
          <th>Email</th>
          <th>Status</th>
          <th>Role</th>
        </tr>
      </thead>
      <tbody>
        @foreach($allUsers as $user)
        <tr>
          <td>{{ $user->id}}</td>
         
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
      
      @endforeach
      </tbody>
    </table>

  </main>

@endsection