@extends('layout')

@section('content')
<h1>Dashboard</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Link</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">Manage Users</th>
            <td><a href="/manage_users">View Page</a></td>
        </tr>
        <tr>
            <th scope="row">Assign Roles</th>
            <td><a href="/assign_roles">View Page</a></td>
        </tr>
        <tr>
            <th scope="row">Help Desk</th>
            <td><a href="/help_desk">View Page</a></td>
        </tr>
    </tbody>
</table>
@endsection