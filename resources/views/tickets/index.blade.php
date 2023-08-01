@extends('master')
@section('title', 'Tickets Table')

@section('content')
    <div class="container py-5 mb-4">
        <div class="row">
            <div class="offset-lg-1 col-lg-10">
                <div class="card">
                    <div class="card-header bg-info text-white">All Tickets</div>
                        <div class="card-body">
                            @if (session('status'))
                                <p class="alert alert-success">{{ session('status') }}</p>
                            @endif
                            @if ($tickets->isEmpty())
                                <p class="alert alert-warning">There is no Ticket!</p>
                            @endif
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tickets as $ticket)
                                    <tr>
                                        <td>{{ $ticket->id }}</td>
                                        <td><a class="text-decoration-none" href="{{ action([App\Http\Controllers\TicketsController::class, 'show'], ['slug' => $ticket->slug]) }}">{{ $ticket->title }}</a></td>
                                        <td>{{ $ticket->status ? 'Pending' : 'Answered' }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection