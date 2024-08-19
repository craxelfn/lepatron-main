<section class="hero h-100">
            <div class="container">
                <div class="row mt-4 ">
                    <div class="col-lg-8">
                       
                      
                    <div class="content"> 
                    @foreach($articles_slider as $article)
                            <a href="news.html" class="content-element" id="1">
                                <img src="images/files/1/posts/sZez7gjXYAUxSevt0W86Wc3YuPqhwD54RG37VxTp.webp" class="img-fluid image1" alt="">
                                <div class="all">
                                    <div class="type">{{ $article->category->name }}</div>
                                <div class="description">
                                    <div class="lieu-date text-white-50 mb-3">{{ $article->created_at }}</div>
                                    <div class="title mb-3">
                                    {{ strtoupper($article->title) }}
                                    </div>
                                    <div class="description">
                                    {{ Str::limit($article->body, 100) }}
                                    </div>
                                </div>
                                </div>   
                            </a>
                        @endforeach    
                             
                            <div class="slider">
                                <button ><img src="images/chevron-left.png" alt=""></button>
                                <div class="number">
                                    <p class="active">1</p>
                                    <p>2</p>
                                    <p>3</p>
                                    <p>4</p>
                                    <p>5</p>
                                </div>
                                <button><img src="images/chevron-right.png" class="" alt=""></button>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 news-list p-3  ">
                        <p class="h3 blue-text">Last news</p>
                        @foreach ($latest_news as $news)
                        <a href="news.html"  class="hero-news image-hover1">
                            <div class="hero-news-description me-2">
                                <p class="hero-news-type">{{ $news->category->name }} </p>
                                <h2 class="title-last hover-underline ">
                                    {{ $news->title}}
                                </h2>
                            </div>
                            <img src="{{$news->image}}  "  class="img-fluid " alt="">
                            
                        </a>
                        @endforeach
                       
                       
                        
                        
                    </div>
                    
            </div>
          
            </div>
            
        </section>