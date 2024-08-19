@extends('layouts.frontend') 
@section('title', $article->title)

@section('meta_description', $article->meta_description)


@section('content')

@include('frontend.Component.header')

<main>
        <div class="container">
            <section class="article-page">
                <article>
                    <img src=" {{$article->image}}"   class="img-fluid article-img  mb-3" alt="" />
                    <h2>{{ $article->title }}</h2>
                    <div>
                        <p>
                            <i class="fas fa-user fa-1x"></i> {{ $article->created_at->format('F j, Y') }}
                        </p>
                        <p class="category">{{ $article->category->name }}</p>
                        </div>
                        <div>
                        {{ $article->body }}
                        </div>
                </article>
    
                <article>
                    <h3>CATEGORIES</h3>
                    <ul>
                        <li>Sports</li>
                        <li>Entertainment</li>
                        <li>Technology</li>
                        <li>Fashion</li>
                        <li>Shopping</li>
                    </ul>
                </article>
    
                <article>
                   <img src="images/files/1/Banners/bannier.jpg" alt="">
                   
                </article>
            </section>
        </div>


    </main>
@include('frontend.Component.footer')
@endsection