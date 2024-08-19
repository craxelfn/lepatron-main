<section class="h-100 mt-5 p-5">
            <div class="container ctn2 bg-white">
            <h1 class="mb-3 trends-title ps-3 ">Trending News</h1>
                <div class="row">
                    <a href="news.html" class="col-lg-6  position-relative">
                        <div class="description1">
                            <p class="type">{{ $trend_news->category->name }}</p>
                            <div class="info">
                                <p class="text-white-50 h2">{{ $trend_news->created_at->format('F j, Y') }}</p>
                                <h1 class="hover-underline-white">
                                {{ $trend_news->title }}
                                </h1>
                                <p>
                                {{ Str::limit($trend_news->body, 200) }}
                                </p>
                            </div>
                        </div>
                        <img src="images/files/1/posts/SQxChNQGkP9kZbvDEj2s2Eh2qcQtBDRPv4X9F86c.jpg" class="trend-img" alt="">
                    </a>
                    <div class="col-lg-6 trends  pt-2 ">
                       @foreach ($trending_news as $trend)
                        <a href="news.html" class="trend-news mb-2">
                            <div class="row">
                                <div class="col-lg-6 trend-image image-hover1">
                                    <img class="img-flui" src="images/files/1/posts/2NVttbwCJ4c6DDMrB3qh7wZGpmDbzrLTdVljE8Z1.jpg" alt="">
                                </div>
                                <div class="col-lg-6">
                                    <p class="text-black-50 trend-date"> {{ $trend->created_at->format('F j, Y') }} </p>
                                    <p class="trend-title hover-underline">{{ $trend->title }}
                                    </p >
                                    <p class="text-black-50 last-text pb-3">{{ Str::limit($trend->body, 200) }}
                                    </p>
                                </div>
                            </div>
                            
                        </a>
                        @endforeach
                        
                        
                        
                      
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </section>