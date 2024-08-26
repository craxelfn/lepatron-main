<section class="hero mt-4 h-100 mb-5">
            <div class="container">
                <div class="row mt-2 ">
                     <div class="col-lg-8">
                       
                      
                        <div class="content"> 
                        @foreach($articles_slider as $article)
                                <div class="content-element" id="1">
                                    <img src="{{ $article->image }}"  class="img-fluid image1 dark-img" alt="">
                                    
                                    <div class="all w-100">
                                    <a class=" type link mb-4">{{ $article->category->name }}</a> 
                                    <div class="description">
                                        
                                        
                                        <h2 class="mb-3">
                                            <a class="title link mb-3 hover-underline-white ">
                                                {{ strtoupper($article->title) }}
                                            </a>
                                        </h2>
                                        
                                        <!-- <div class="description">
                                        {{ Str::limit($article->body, 100) }}
                                        </div> -->
                                    </div>
                                    </div>   
                            </div>
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
                    <div class="col-lg-4 news-list  ">
                        <p class="h3 blue-text">Last news</p>
                        @foreach ($latest_news as $news)
                        <div   class="hero-news image-hover1">
                        
                            <div class="hero-news-description me-2">
                                <a href="" class="link-black">
                                <p class="hero-news-type">{{ $news->category->name }} </p>
                                </a> 
                                <h2 class="title-last">
                                <a href="" class="link-black title5 ">
                                    
                                        {{ $news->title}}
                                </a> 
                                </h2>  
                            </div>
                            <a href="" class="trend-images">
                                <img src="{{$news->image}}  "  class="trend-imgg" alt="">
                            </a> 
                            
                            
                        </div>
                        @endforeach
                       
                       
                        
                        
                    </div>
                    
            </div>
          
            </div>
            
        </section>