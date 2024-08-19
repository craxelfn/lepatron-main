@extends('layouts.frontend') 
@section('title', $article->title)

@section('meta_description', $article->meta_description)


@section('content')

@include('frontend.Component.header')

<main>
        <div class="container">
            
            <div class="row">
                <div class="col-lg-8">
                    <img src=" {{$article->image}}"   class="img-fluid article-img  mb-3" alt="" />
                    <h2>{{ $article->title }}</h2>
                    <div class="first-div">
                        <p>
                            <i class="fas fa-user fa-1x"></i> {{ $article->created_at->format('F j, Y') }}
                        </p>
                        <p class="category">{{ $article->category->name }}</p>
                     </div>
                    <div class="article-description">
                        {{ $article->body }}
                    </div>
                    <div class="row border-top ">
                        <h2 class="h2  ms-3 mb-4">Read More : </h2>
                        <div class="col-lg-4">
                            <a href="">
                            <img src=" {{$article->image}}"   class="img-fluid article-img  mb-3" alt="" />
                            </a>
                            <h2 class=""><a href="" class="link link-dark h3 ps-1">Introduction to RESTful Services</a></h2>
                            <p class="text-black-50 text-end ">August 15, 2024</p>
                        </div>
                        <div class="col-lg-4">
                            <a href="">
                            <img src=" {{$article->image}}"   class="img-fluid article-img  mb-3" alt="" />
                            </a>
                            <h2 class=""><a href="" class="link link-dark h3 ps-1">Introduction to RESTful Services</a></h2>
                            <p class="text-black-50 text-end ">August 15, 2024</p>
                        </div>
                        <div class="col-lg-4">
                            <a href="">
                            <img src=" {{$article->image}}"   class="img-fluid article-img  mb-3" alt="" />
                            </a>
                            <h2 class=""><a href="" class="link link-dark h3 ps-1">Introduction to RESTful Services</a></h2>
                            <p class="text-black-50 text-end ">August 15, 2024</p>
                        </div>
                     </div>
                </div>
                    
                <div class="col-lg-4">
                    <h3>
                        last news
                    </h3>
                    <div class="last-article ps-2">
                        <div class="article mb-2">
                            <div class="row">
                                <div class="col-lg-5">
                                    <img class="h-100 w-100" src="https://www.adobe.com/fr/products/firefly/features/media_179d807b0123090143eea74eea2d7cf4e7aa962ae.png?width=750&format=png&optimize=medium" alt="">
                                </div>
                                <div class="col-lg-7 w-50">
                                    <h2><a class="link-black text1" href="">Introduction to RESTful Services</a></h2>
                                    <p class="text-black-50"> August 15, 2024</p>
                                </div>
                            </div>
                        </div>
                        <div class="article mb-2">
                            <div class="row">
                                <div class="col-lg-5">
                                    <img class="h-100 w-100" src="https://www.adobe.com/fr/products/firefly/features/media_179d807b0123090143eea74eea2d7cf4e7aa962ae.png?width=750&format=png&optimize=medium" alt="">
                                </div>
                                <div class="col-lg-7 w-50">
                                    <h2><a class="link-black text1" href="">Introduction to RESTful Services</a></h2>
                                    <p class="text-black-50"> August 15, 2024</p>
                                </div>
                            </div>
                        </div>
                        <div class="article mb-2">
                            <div class="row">
                                <div class="col-lg-5">
                                    <img class="h-100 w-100" src="https://www.adobe.com/fr/products/firefly/features/media_179d807b0123090143eea74eea2d7cf4e7aa962ae.png?width=750&format=png&optimize=medium" alt="">
                                </div>
                                <div class="col-lg-7 w-50">
                                    <h2><a class="link-black text1" href="">Introduction to RESTful Services</a></h2>
                                    <p class="text-black-50"> August 15, 2024</p>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
               
                </div>
            </div>
          
        </div>


    </main>
@include('frontend.Component.footer')
@endsection