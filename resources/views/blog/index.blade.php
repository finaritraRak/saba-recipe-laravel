@extends('layouts.app')

@section('content')


@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif



<!-- Start Featured Product -->
    <section class="bg-light">
        @if (Auth::check())
    
            <a 
                href="/create"
                class="btn btn-primary mt-2">
                Create post
            </a>
   
       @endif
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1"></h1>
                    <p>
                       
                    </p>
                </div>
            </div>
            <div class="row">
                @foreach ($posts as $post)
               
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="{{ asset('images/' . $post->image_path) }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between text-muted">
                                <li>
                                    Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                                </li>
                                <li class="text-muted text-right">by {{ $post->user->name }}</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark"> {{ $post->title }}</a>
                            <p class="card-text">
                                {{ $post->description }}
                            </p>
                          
                            <a class="btn btn-primary" href="/blog/{{ $post->slug }}">Lire l'article</a>

                            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <span>
                    <a 
                        href="/blog/{{ $post->slug }}/edit"
                        class="btn btn-success">
                        Edit
                    </a>
                </span>

                <span>
                     <form 
                        action="/blog/{{ $post->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class="btn btn-danger"
                            type="submit">
                            Delete
                        </button>

                    </form>
                </span>
            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Featured Product -->







@endsection