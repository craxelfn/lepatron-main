<section class="entreprises">
            <div class="type-articles">
                <h3 class="text-center">entreprises</h3>
            </div>
            <div class="container ">
                <div class="row pt-3">
                    <div class="col-lg-9 reomvepad p-5">
                        
                     @foreach ($alaune_news as $alaune)
                    <a href="news.html" class="article2 mb-3">
                            <img src="images/files/1/posts/lmShbwB40UdCN0y8RnJarwGCVVoaGA58FQLU2rJx.jpg" class="article2-image img-fluid" alt="">
                            <div class="article2-description">
                                <p class="h3 article2-title hover-underline">
                                    {{ $alaune_news->title}}
                                </p>
                                <p class="text-black-50 article2-date">{{ $alaune_news->created_at->format('F j, Y') }} </p>
                                <p class="article2-info">
                                {{ Str::limit($alaune_news->body, 200) }}
                                </p>
                            </div>
                        </a>
                        @endforeach
                        <div class="read">
                            <button class="read-more mt-5">Show more</button>
                        </div>
                    </div>
                    <div class="col-lg-3 banniers">
                        <a href=""><img src="images/files/1/Banners/bannier.jpg" alt=""></a>
                        <a href=""><img src="images/files/1/Banners/bannier.jpg" alt=""></a>
                        <a href=""><img src="images/files/1/Banners/bannier.jpg" alt=""></a>
                        <a href=""><img src="images/files/1/Banners/bannier.jpg" alt=""></a>
                    </div>
                </div>
            </div>
</section>
<section class="a-la-une h-100">
            <div class="type-articles">
                   <h3 class="text-center">A La Une</h3>
               </div>
             <div class="container mt-5">
               <div class="row " >
               @foreach ($entreprise_news as $entreprise_news)
                   <a href="news.html" class="col-lg-3 article">
                       <div class="article-img image-hover1">
                           <img class="img-fluid" src="images/files/1/posts/gorkXHT5nKLfC1WAZZsWDvQoEv050eTx7jkubVqr.jpg" alt="">
                       </div>
                       <div class="article-description">
                           <p class="text-black-50">{{ $entreprise_news->created_at->format('F j, Y')}} </p>
                           <h4>
                              {{ $entreprise_news->title}}
                           </h4>
                           <p>
                           {{ Str::limit($entreprise_news->body, 200) }}
                           </p>
                       </div>
   
                    </a>
                    @endforeach
                </div>
               <div class="read">
                   <button class="read-more mt-5">Show more</button>
               </div>
               
             </div>
             
</section>
<section class="economie_finance">
            <div class="type-articles">
                <h3 class="text-center">economie_finance</h3>
            </div>
            <div class="container ">
                <div class="row pt-3">
                    <div class="col-lg-9 reomvepad p-5">
                        
                     @foreach ($economie_finance as $economie_finance)
                    <a href="news.html" class="article2 mb-3">
                            <img src="images/files/1/posts/lmShbwB40UdCN0y8RnJarwGCVVoaGA58FQLU2rJx.jpg" class="article2-image img-fluid" alt="">
                            <div class="article2-description">
                                <p class="h3 article2-title hover-underline">
                                    {{ $economie_finance->title}}
                                </p>
                                <p class="text-black-50 article2-date">{{ $economie_finance->created_at->format('F j, Y') }} </p>
                                <p class="article2-info">
                                {{ Str::limit($economie_finance->body, 200) }}
                                </p>
                            </div>
                        </a>
                        @endforeach
                        <div class="read">
                            <button class="read-more mt-5">Show more</button>
                        </div>
                    </div>
                    <div class="col-lg-3 banniers">
                        <a href=""><img src="images/files/1/Banners/bannier.jpg" alt=""></a>
                        <a href=""><img src="images/files/1/Banners/bannier.jpg" alt=""></a>
                        <a href=""><img src="images/files/1/Banners/bannier.jpg" alt=""></a>
                        <a href=""><img src="images/files/1/Banners/bannier.jpg" alt=""></a>
                    </div>
                </div>
            </div>
</section>
<section class="tourisme a-la-une h-100">
            <div class="type-articles">
                   <h3 class="text-center">tourisme</h3>
               </div>
             <div class="container mt-5">
               <div class="row " >
               @foreach ($tourisme as $tourisme)
                   <a href="news.html" class="col-lg-3 article">
                       <div class="article-img image-hover1">
                           <img class="img-fluid" src="images/files/1/posts/gorkXHT5nKLfC1WAZZsWDvQoEv050eTx7jkubVqr.jpg" alt="">
                       </div>
                       <div class="article-description">
                           <p class="text-black-50">{{ $tourisme->created_at->format('F j, Y')}} </p>
                           <h4>
                              {{ $tourisme->title}}
                           </h4>
                           <p>
                           {{ Str::limit($tourisme->body, 200) }}
                           </p>
                       </div>
   
                    </a>
                    @endforeach
                </div>
               <div class="read">
                   <button class="read-more mt-5">Show more</button>
               </div>
               
             </div>
             
</section>
<section class="agenda">
            <div class="type-articles">
                <h3 class="text-center">agenda</h3>
            </div>
            <div class="container ">
                <div class="row pt-3">
                    <div class="col-lg-9 reomvepad p-5">
                        
                     @foreach ($agenda as $agenda)
                    <a href="news.html" class="article2 mb-3">
                            <img src="images/files/1/posts/lmShbwB40UdCN0y8RnJarwGCVVoaGA58FQLU2rJx.jpg" class="article2-image img-fluid" alt="">
                            <div class="article2-description">
                                <p class="h3 article2-title hover-underline">
                                    {{ $agenda->title}}
                                </p>
                                <p class="text-black-50 article2-date">{{ $agenda->created_at->format('F j, Y') }} </p>
                                <p class="article2-info">
                                {{ Str::limit($agenda->body, 200) }}
                                </p>
                            </div>
                        </a>
                        @endforeach
                        <div class="read">
                            <button class="read-more mt-5">Show more</button>
                        </div>
                    </div>
                    <div class="col-lg-3 banniers">
                        <a href=""><img src="images/files/1/Banners/bannier.jpg" alt=""></a>
                        <a href=""><img src="images/files/1/Banners/bannier.jpg" alt=""></a>
                        <a href=""><img src="images/files/1/Banners/bannier.jpg" alt=""></a>
                        <a href=""><img src="images/files/1/Banners/bannier.jpg" alt=""></a>
                    </div>
                </div>
            </div>
</section>
<section class="business a-la-une h-100">
            <div class="type-articles">
                   <h3 class="text-center">business</h3>
               </div>
             <div class="container mt-5">
               <div class="row " >
               @foreach ($business as $business)
                   <a href="news.html" class="col-lg-3 article">
                       <div class="article-img image-hover1">
                           <img class="img-fluid" src="images/files/1/posts/gorkXHT5nKLfC1WAZZsWDvQoEv050eTx7jkubVqr.jpg" alt="">
                       </div>
                       <div class="article-description">
                           <p class="text-black-50">{{ $business->created_at->format('F j, Y')}} </p>
                           <h4>
                              {{ $business->title}}
                           </h4>
                           <p>
                           {{ Str::limit($business->body, 200) }}
                           </p>
                       </div>
   
                    </a>
                    @endforeach
                </div>
               <div class="read">
                   <button class="read-more mt-5">Show more</button>
               </div>
               
             </div>
             
</section>
<section class="nomination">
            <div class="type-articles">
                <h3 class="text-center">nomination</h3>
            </div>
            <div class="container ">
                <div class="row pt-3">
                    <div class="col-lg-9 reomvepad p-5">
                        
                     @foreach ($nomination as $nomination)
                    <a href="news.html" class="article2 mb-3">
                            <img src="images/files/1/posts/lmShbwB40UdCN0y8RnJarwGCVVoaGA58FQLU2rJx.jpg" class="article2-image img-fluid" alt="">
                            <div class="article2-description">
                                <p class="h3 article2-title hover-underline">
                                    {{ $nomination->title}}
                                </p>
                                <p class="text-black-50 article2-date">{{ $nomination->created_at->format('F j, Y') }} </p>
                                <p class="article2-info">
                                {{ Str::limit($nomination->body, 200) }}
                                </p>
                            </div>
                        </a>
                        @endforeach
                        <div class="read">
                            <button class="read-more mt-5">Show more</button>
                        </div>
                    </div>
                    <div class="col-lg-3 banniers">
                        <a href=""><img src="images/files/1/Banners/bannier.jpg" alt=""></a>
                        <a href=""><img src="images/files/1/Banners/bannier.jpg" alt=""></a>
                        <a href=""><img src="images/files/1/Banners/bannier.jpg" alt=""></a>
                        <a href=""><img src="images/files/1/Banners/bannier.jpg" alt=""></a>
                    </div>
                </div>
            </div>
</section>