@extends('master')
@section('title', 'Contact')

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
            <div class="mx-auto d-block offset-lg-1 col-lg-5 mt-4">
                <div class="card">
                    <div class="card-body">
                        <p class="text-center"><small class="text-danger">Click Here:</small> <a href="/tickets" class="text-decoration-none"> <strong>View Table Tickets</strong></a></p>
                    </div>
                </div>
            </div>
            <div class="offset-lg-1 col-lg-10 mt-4">
                <div class="card">
                    <div class="card-header bg-info text-white">Add Ticket</div>
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
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <fieldset>
                                    <div class="form-group m-2">
                                        <label for="title" class="col-lg-2 control-label m-2">Title</label>
                                        <div class="col-lg-12 m-2">
                                            <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="form-group m-2">
                                        <label for="content" class="col-lg-2 control-label m-2">Content</label>
                                        <div class="col-lg-12 m-2">
                                            <textarea name="content" class="form-control m-2" rows="3" id="content"></textarea>
                                            <span class="help-block">Feel free to ask us any question.</span>
                                        </div>
                                    </div>
                                    <div class="form-group m-2">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <button class="btn btn-secondary">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
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