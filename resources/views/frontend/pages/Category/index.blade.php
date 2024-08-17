@extends('layouts.frontend') 

@section('content')
@include('frontend.Component.header')
<main>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8 news-element p-5 ">
                    <a href="post.html" class="titile mb-5">
                        <p class="ms-3">{{ $category->name }}</p>
                    </a>
                    @foreach($articles as $article )


                    <div class="element-article mb-3">
                        <a href="">
                        <img class="h-100  w-100" src="{{ $article->image}}" alt="">
                        </a>
                        <div class="element-article-infos">
                            <h2>
                                <a class=" element-article-infos-title">
                                {{ $article->title}}
                                </a>
                            </h2> 
                            <p class="text-black-50 ms-3 h6">{{ $article->created_at->format('F j, Y') }}</p>
                            <p class="element-article-infos-descrip">
                            {!! Illuminate\Support\Str::words(strip_tags($article->body), 40, '...') !!}
                            </p>
                            <div><a href="" class="element-article-infos-readm hover-underline-red">Lire la suite —></a> </div>
                        </div>
</div>
                   @endforeach
                   

                   {{ $articles->links() }}
                   
                    <div class="nextpage">
                        <a href="">1</a>
                        <a href="">2</a>
                        <a href="">3</a>
                        <p>...</p>
                        <a href="">400</a>
                        
                    </div>
                </div>
                
                <div class="col-lg-4 erea2  mt-5">
                    <div class="titile mb-5">
                        <p class="ms-3">Last news</p>
                    </div>
                </div>
            </div>
        </div>


    </main>
@include('frontend.Component.footer')
@endsection