@extends('admin.admin_nav.adminNav')

@section('content')

<main class="main-content">
    <h1>Dashboard</h1>

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
        <tr>
          <td>Jane Doe</td>
          <td>jane@example.com</td>
          <td>Active</td>
          <td>Admin</td>
        </tr>
        <tr>
          <td>John Smith</td>
          <td>john@example.com</td>
          <td>Inactive</td>
          <td>User</td>
        </tr>
        <tr>
          <td>Alice Brown</td>
          <td>alice@example.com</td>
          <td>Active</td>
          <td>Moderator</td>
        </tr>
      </tbody>
    </table>

  </main>

@endsection