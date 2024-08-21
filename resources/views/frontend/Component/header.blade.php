<header class="navbar">
        <nav>
            <div class="logo">
                <img src="{{asset('images/image-6.png')}}" class="" alt="">
            </div>
            <ul class="mt-3"> 
             <li class="hover-underline-gold"><a href="">Acceuils</a></li>
                @foreach($categories as $category)
                <li class="hover-underline-gold"><a href="/{{ $category->slug }}">{{ $category->name }}</a></li>
                @endforeach 
                
            </ul>
            <div class="sub">
                <a href="#">S'ABONNER</a>
            </div>
        </nav>    
    </header>
    <img src="images/menu-8x.png" class="flesh" alt=""> 
    <ul class="side--ul mt-3 " >
        <div class="cancel">
            <img src="images/x-mark.png" alt="">
        </div>
        <li><a href="/">Acceuil</a></li>
        @foreach($categories as $category)
        <li class="hover-underline-gold"><a href="/{{ $category->slug }}">{{ $category->name }}</a></li>
        @endforeach  
    </ul>
    