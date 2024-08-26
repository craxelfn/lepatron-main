<section class="h-100 mt-5 ps-2">
            <div class="container ctn2 bg-white">
            <h1 class="mb-3 trends-title ps-3 ">Trending News</h1>
                <div class="row">
                    <div  class="col-lg-6  position-relative">
                        <div class="description1">
                            <a href="" class="link">
                            <p class="type" >{{ $trend_news->category->name }}</p>
                            </a>
                            <div class="info">
                                <!-- <p class="text-white-50 h2">{{ $trend_news->created_at->format('F j, Y') }}</p> -->
                                <h2 class="hover-underline-white">
                                <a href="" class="link">
                                    {{ $trend_news->title }}   
                                </a>
                                </h2>
                               
                                <p>
                                {{ Str::limit($trend_news->body, 200) }}
                                </p>
                            </div>
                        </div>
                        <img src="{{$trend_news->image }}" class="trend-img dark-img" alt="">
                    </div>
                    <div class="col-lg-6 trends  pt-2 ">
                       @foreach ($trending_news as $trend)
                        <div  class="trend-news mb-2">
                            <div class="row">
                                <a class="col-lg-6 trend-image image-hover1">
                                    <img class="img-fluid" src="{{$trend->image }} " alt="">
                                </a>
                                <div class="col-lg-6 trends-apropo">
                                    <p class="text-black-50 trend-date"> {{ $trend->created_at->format('F j, Y') }} </p>
                                    <h2 class="trend-title ">
                                    <a href="" class="link-black hover-underline">
                                    {{ $trend->title }}
                                    </a>
                                    </h2 >
                                    
                                    <p class="text-black-50 last-text pb-3">{{ Str::limit($trend->body, 100) }}
                                    </p>
                                </div>
                            </div>
                            
                        </div>
                        @endforeach
                        
                        
                        
                      
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </section>