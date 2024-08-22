@extends('layouts.frontend') 

@section('content')
@include('frontend.Component.header')
<main>
        <div class="container mt-5">
            <div class="row ">
                <div class="col-lg-8 news-element">
                    <a href="post.html" class="titile mb-5">
                        <p class="ms-3">{{ $category->name }}</p>
                    </a>
                    @foreach($articles as $article )
                    <div class=" mb-3">
                        <div class="row">
                            <div class="col-lg-5 col-md-5">
                                <a href="{{ Route('post.index',['category'=>$article->category->name , 'article'=>$article->slug,'id'=>$article->id]) }} " class="categoryy-img">
                                    <img class="h-100  w-100" src="{{ $article->image}}" alt="">
                                </a>
                            </div>
                            <div class="col-lg-7 col-md-7">
                                <div class="element-article-infos">
                                    <h2>
                                        <a href="{{ Route('post.index',['category'=>$article->category->name , 'article'=>$article->slug,'id'=>$article->id]) }} " class=" element-article-infos-title">
                                        {{ $article->title}}
                                        </a>
                                    </h2> 
                                    <p class="text-black-50 ms-3 h6">{{ $article->created_at->format('F j, Y') }}</p>
                                    <p class="element-article-infos-descrip">
                                    {!! Illuminate\Support\Str::words(strip_tags($article->body), 50, '...') !!}
                                    </p>
                                    <div><a href="" class="element-article-infos-readm hover-underline-red">Lire la suite —></a> </div>
                                </div>
                            </div>    
                        </div>      
                    </div>
                   @endforeach
                   

                   {{ $articles->links() }}
                   
                    
                </div>
                
                <div class="col-lg-4 erea2  mt-5">
                    <div class="titile mb-5">
                        <p class="ms-3">Last news</p>
                    </div>
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