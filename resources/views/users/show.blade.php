@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title">
                    Users
                </div>
                <a class="btn btn-primary" href="/create">Create User</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('users.edit', ['user' => $user->id]) }}">
                                    Edit
                                </a>
                                <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button  type="submit" class="btn btn-danger" href="{{ route('users.edit', ['user' => $user->id]) }}">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
