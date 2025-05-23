<section class="economie_finance entreprises mt-5 mb-5">
            <div class="type-articles">
                <h3 class="text-center">economie&finance</h3>
            </div>
            <div class="container ">
                <div class="row pt-3">
                    <div class="col-lg-9 reomvepad p-5">
                        
                     @foreach ($alaune_news as $alaune_news)
                    <div class="article2 mb-3">
                            <a href="{{ Route('post.index',['category'=>$alaune_news->category->name , 'article'=>$alaune_news->slug,'id'=>$alaune_news->id]) }} " class="">
                             <img src="{{$alaune_news->image }}" class="img-fluid bordred article2-image" alt="">
                            </a>
                            <div class="article2-description">
                                
                                <h2 class="h3 article2-title ">
                                 <a href="{{ Route('post.index',['category'=>$alaune_news->category->name , 'article'=>$alaune_news->slug,'id'=>$alaune_news->id]) }}" class="link-black ">
                                    {{ $alaune_news->title}}
                                 </a>
                                </h2>
                             
                               
                                <p class="article2-info">
                                {{ Str::limit($alaune_news->body, 100  ) }}
                                </p>
                            </div>
                    </div>
                        @endforeach
                        <div class="read">
                            <button class="read-more mt-5"><a href="/a-la-une" class="link link-black">Read more</a></button>
                        </div>
                    </div>
                    <div class="col-lg-3 banniers">
                        
                        <a href=""><img src="images/files/1/Banners/bannier.jpg" alt=""></a>
                    </div>
                </div>
            </div>
</section>
<div class="new-ff">
    <div class="cercle"></div>
    <div class="title">A La Une</div>
    <div class="ligne">
        <div></div>
    </div>

</div>
<section class="a-la-une h-100 mb-5">
            <!-- <div class="type-articles">
                 <h3 class="text-center">A La Une</h3>
            </div> -->
            <div class="container mt-5">
                    <div class="row " >
                        @foreach ($entreprise_news as $entreprise_news)
                            <div  class="col-lg-3 article">
                                <a href="{{ Route('post.index',['category'=>$entreprise_news->category->name , 'article'=>$entreprise_news->slug,'id'=>$entreprise_news->id]) }}" class="">
                                    <img class="img-fluid article-img image-hover1" src="{{$entreprise_news->image }}" alt="">
                                    </a>
                                <div class="article-description">
                                    <h2 class="title-height">
                                        <a href="{{ Route('post.index',['category'=>$entreprise_news->category->name , 'article'=>$entreprise_news->slug,'id'=>$entreprise_news->id]) }}" class="link-black  h5">
                                            {{ $entreprise_news->title }}
                                            </a>
                                    </h2>
                                    
                                    
                                    <!-- <p>
                                    {{ Str::limit($entreprise_news->body, 100) }}
                                    </p> -->
                                </div>
            
                            </div>
                        @endforeach
                    </div>
                    <div class="read">
                        <button class="read-more mt-5"><a href="/entreprises" class="link link-black">Read more</a></button>
                    </div>
            </div>
             
</section>
<section class="economie_finance entreprises mb-5">
            <div class="type-articles">
                <h3 class="text-center">economie&finance</h3>
            </div>
            <div class="container ">
                <div class="row pt-3">
                    <div class="col-lg-9 reomvepad p-5">
                        
                     @foreach ($economie_finance as $economie_finance)
                    <div class="article2 mb-3">
                            <a href="{{ Route('post.index',['category'=>$economie_finance->category->name , 'article'=>$economie_finance->slug,'id'=>$economie_finance->id]) }} " class="">
                             <img src="{{$economie_finance->image }}" class="img-fluid bordred article2-image" alt="">
                            </a>
                            <div class="article2-description">
                                
                                <h2 class="h3 article2-title ">
                                 <a href="{{ Route('post.index',['category'=>$economie_finance->category->name , 'article'=>$economie_finance->slug,'id'=>$economie_finance->id]) }}" class="link-black hover-underline">
                                    {{ $economie_finance->title}}
                                 </a>
                                </h2>
                             
                                <p class="text-black-50 article2-date">{{ $economie_finance->created_at->format('F j, Y') }} </p>
                                <p class="article2-info">
                                {{ Str::limit($economie_finance->body, 50   ) }}
                                </p>
                            </div>
                    </div>
                        @endforeach
                        <div class="read">
                            <button class="read-more mt-5"><a href="/economie-finance" class="link link-black">Read more</a></button>
                        </div>
                    </div>
                    <div class="col-lg-3 banniers">
                        
                        <a href=""><img src="images/files/1/Banners/bannier.jpg" alt=""></a>
                    </div>
                </div>
            </div>
</section>
<section class="tourisme a-la-une h-100 mb-5">
            <div class="type-articles">
                 <h3 class="text-center">tourisme</h3>
            </div>
            <div class="container mt-5">
                    <div class="row " >
                        @foreach ($tourisme as $tourisme)
                            <div  class="col-lg-3 article">
                                <a href="{{ Route('post.index',['category'=>$tourisme->category->name , 'article'=>$tourisme->slug,'id'=>$tourisme->id]) }}" class="">
                                    <img class="img-fluid article-img image-hover1" src="{{$tourisme->image }}" alt="">
                                    </a>
                                <div class="article-description">
                                    <p class="text-black-50">{{ $tourisme->created_at->format('F j, Y')}} </p>
                                    
                                    <h2 class="">
                                        <a href="{{ Route('post.index',['category'=>$tourisme->category->name , 'article'=>$tourisme->slug,'id'=>$tourisme->id]) }}" class="link-black mb-1 h5 hover-underline">
                                            {{ $tourisme->title}}
                                            </a>
                                    </h2>
                                    
                                    
                                    <p>
                                    {{ Str::limit($tourisme->body, 200) }}
                                    </p>
                                </div>
            
                            </div>
                        @endforeach
                    </div>
                    <div class="read">
                        <button class="read-more mt-5"><a href="/tourisme" class="link link-black">Read more</a></button>
                    </div>
            </div>
             
</section>
<section class="agenda entreprises mb-5">
            <div class="type-articles">
                <h3 class="text-center">agenda</h3>
            </div>
            <div class="container ">
                <div class="row pt-3">
                    <div class="col-lg-9 reomvepad p-5">
                        
                     @foreach ($agenda as $agenda)
                    <div class="article2 mb-3">
                            <a href="{{ Route('post.index',['category'=>$agenda->category->name , 'article'=>$agenda->slug,'id'=>$agenda->id]) }} " class="">
                             <img src="{{$agenda->image }}" class="img-fluid bordred article2-image" alt="">
                            </a>
                            <div class="article2-description">
                                
                                <h2 class="h3 article2-title ">
                                 <a href="{{ Route('post.index',['category'=>$agenda->category->name , 'article'=>$agenda->slug,'id'=>$agenda->id]) }}" class="link-black hover-underline">
                                    {{ $agenda->title}}
                                 </a>
                                </h2>
                             
                                <p class="text-black-50 article2-date">{{ $agenda->created_at->format('F j, Y') }} </p>
                                <p class="article2-info">
                                {{ Str::limit($agenda->body, 50) }}
                                </p>
                            </div>
                    </div>
                        @endforeach
                        <div class="read">
                             <button class="read-more mt-5"><a href="/agenda" class="link link-black">Read more</a></button>
                        </div>
                    </div>
                    <div class="col-lg-3 banniers">
                        
                        <a href=""><img src="images/files/1/Banners/bannier.jpg" alt=""></a>
                    </div>
                </div>
            </div>
</section>
<section class="business a-la-une h-100 mb-5">
            <div class="type-articles">
                 <h3 class="text-center">business</h3>
            </div>
            <div class="container mt-5">
                    <div class="row " >
                        @foreach ($business as $business)
                            <div  class="col-lg-3 article">
                                <a href="{{ Route('post.index',['category'=>$business->category->name , 'article'=>$business->slug,'id'=>$business->id]) }}" class="">
                                    <img class="img-fluid article-img image-hover1" src="{{$business->image }}" alt="">
                                    </a>
                                <div class="article-description">
                                    <p class="text-black-50">{{ $business->created_at->format('F j, Y')}} </p>
                                    
                                    <h2 class="">
                                        <a href="{{ Route('post.index',['category'=>$business->category->name , 'article'=>$business->slug,'id'=>$business->id]) }}" class="link-black mb-1 h5 hover-underline">
                                            {{ $business->title}}
                                            </a>
                                    </h2>
                                    
                                    
                                    <p>
                                    {{ Str::limit($business->body, 200) }}
                                    </p>
                                </div>
            
                            </div>
                        @endforeach
                    </div>
                    <div class="read">
                        <button class="read-more mt-5"><a href="/business" class="link link-black">Read more</a></button>
                    </div>
            </div>
             
</section>
<section class="nomination entreprises mb-5">
            <div class="type-articles">
                <h3 class="text-center">nomination</h3>
            </div>
            <div class="container ">
                <div class="row pt-3">
                    <div class="col-lg-9 reomvepad p-5">
                        
                     @foreach ($nomination as $nomination)
                    <div class="article2 mb-3">
                            <a href="{{ Route('post.index',['category'=>$nomination->category->name , 'article'=>$nomination->slug,'id'=>$nomination->id]) }} " class="">
                             <img src="{{$nomination->image }}" class="img-fluid bordred article2-image" alt="">
                            </a>
                            <div class="article2-description">
                                
                                <h2 class="h3 article2-title ">
                                 <a href="{{ Route('post.index',['category'=>$nomination->category->name , 'article'=>$nomination->slug,'id'=>$nomination->id]) }}" class="link-black hover-underline">
                                    {{ $nomination->title}}
                                 </a>
                                </h2>
                             
                                <p class="text-black-50 article2-date">{{ $nomination->created_at->format('F j, Y') }} </p>
                                <p class="article2-info">
                                {{ Str::limit($nomination->body, 50) }}
                                </p>
                            </div>
                    </div>
                        @endforeach
                        <div class="read">
                            <button class="read-more mt-5"><a href="/nomination" class="link link-black">Read more</a></button>
                        </div>
                    </div>
                    <div class="col-lg-3 banniers">
                        
                        <a href=""><img src="images/files/1/Banners/bannier.jpg" alt=""></a>
                    </div>
                </div>
            </div>
</section>
