@extends('master')
@section('title', 'All Users')

@section('content')
    <div class="container py-5 mb-4">
        <div class="row">
            <div class="offset-lg-1 col-lg-10">
                <div class="card">
                    <div class="card-header bg-info text-white">All Users</div>
                        <div class="card-body">
                            @if (session('status'))
                                <p class="alert alert-success">{{ session() }}</p>
                            @endif
                            @if ($users->isEmpty())
                                <p class="text-warning">There is no user.</p>
                            @endif
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Created_at</th>
                                    </tr>
                                </thead>
                                @foreach ($users as $user)
                                <tbody>
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at }}</td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection