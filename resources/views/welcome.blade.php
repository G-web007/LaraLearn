@extends('master')
@section('title', 'Home')

@section('content')
    <div class="container py-5 mb-4">
        <div class="row">
            <div class="offset-lg-1 col-lg-10">
                <div class="card">
                    <div class="card-header bg-info text-white">Homepage Section</div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-5">
                            <p>“We love what we do and we do what our clients love & work with great clients all over the world to create thoughtful and purposeful websites.”</p>
                            <footer class="blockquote-footer">ProWeb365</footer>
                            </blockquote>

                            <img src="{{ asset('images/What-is-Laravel.png') }}" class="img-thumbnail rounded mx-auto d-block" alt="" width="100%" height="400">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection