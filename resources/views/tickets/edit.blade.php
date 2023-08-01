@extends('master')
@section('title', 'Edit Form')

@section('content')
    <div class="container py-5 mb-4">
        <div class="row">
            <div class="offset-lg-1 col-lg-10">
                <div class="card">
                    <div class="card-header bg-info text-white">Contact Section</div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-5">
                            <p>“Optimism is an occupational hazard of programming: feedback is the treatment. “ </p>
                            <footer class="blockquote-footer">Kent Beck</footer>
                            </blockquote> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="offset-lg-1 col-lg-10 mt-5">
                <div class="card">
                    <div class="card-header bg-info text-white">Edit Ticket</div>
                        <div class="card-body">
                            <form class="form-horizontal" method="post">
                                @foreach ($errors->all() as $error)
                                <p class="alert alert-danger">{{ $error }}</p>
                                @endforeach
                                @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                                @endif
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="title" class="col-lg-2 control-label m-2">Title:</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="title" name="title" value="{!! $ticket->title !!}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="content" class="col-lg-2 control-label m-2">Content:</label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" rows="3" id="content"name="content">{!! $ticket->content !!}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label><input type="checkbox" name="status" {!! $ticket->status?"":"checked"!!} > Close this ticket?</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-10 col-lg-offset-2 m-2">
                                            <a href="/tickets" class="btn btn-secondary">Back</a>
                                            <button type="submit" class="btn btn-primary">Update</button>
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