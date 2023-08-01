@extends('master')
@section('title', 'Specific Ticket')

@section('content')
    <div class="container py-5 mb-4">
        <div class="row">
            <div class="offset-lg-1 col-lg-10">
                <div class="card">
                    <div class="card-header bg-info text-white">Specific Ticket</div>
                        <div class="card-body">
                            <p> <strong>Status</strong>: {!! $ticket->status ? 'Pending' : 'Answered' !!}</p>
                            <p> {!! $ticket->title !!} </p>
                            <p> {!! $ticket->content !!} </p>
                            <div class="row">
                                <div class="d-flex col-lg-2">
                                    <a href="{{ action([App\Http\Controllers\TicketsController::class, 'edit'], ['slug' => $ticket->slug]) }}" class="btn btn-primary flex-fill">Edit</a>
                                    <form method="post" action="{{ action([App\Http\Controllers\TicketsController::class, 'destroy'], ['slug' => $ticket->slug]) }}">
                                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                        <button type="submit" class="btn btn-danger text-white mx-2">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($comments as $comment)
            <div class="offset-lg-1 col-lg-10 mt-4">
                <div class="card">
                    <div class="card-body">
                        <ul>
                            <li>{{ $comment->content }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach 
            <div class="offset-lg-1 col-lg-10 mt-4">
                <div class="card">
                    <div class="card-header bg-info text-white">Reply:</div>
                        <div class="card-body">
                            <form action="/comments" method="post">
                                @foreach ($errors->all() as $error)
                                    <p class="alert alert-danger">{{ $error }}</p>
                                @endforeach
                                @if (session('status'))
                                    <p class="alert alert-success">{{ session('status') }}</p>
                                @endif
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="post_id" value="{{ $ticket->id }}">
                                <fieldset>
                                    <div class="form-group">
                                        <div class="col-lg-12 mb-2">
                                            <textarea name="content" class="form-control" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <a href="/tickets" class="btn btn-secondary">Back</a>
                                            <button type="submit" class="btn btn-primary">Post</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection