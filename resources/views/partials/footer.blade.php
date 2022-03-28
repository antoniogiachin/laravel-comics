<footer>
    <div class="footer-top">
    
        <div class="container">
  
            <div class="ft-top-left">
                
                <div class="col">
                    <span class="ft-list-title">DC Comics</span>
                    {{-- stampo per tipologia i link ciclandoli --}}
                    @foreach ($comicsLink as $link) 
                    <ul>
                        <li><a href="{{$link['url']}}">{{$link['text']}}</a></li>
                    </ul>
                    @endforeach
                </div>

                <div class="col">
                    <span class="ft-list-title">SHOP</span>
                    @foreach ($shopLink as $link) 
                    <ul>
                        <li><a href="{{$link['url']}}">{{$link['text']}}</a></li>
                    </ul>
                    @endforeach
                </div>

                <div class="col">
                    <span class="ft-list-title">DC</span>
                    @foreach ($dcLink as $link) 
                    <ul>
                        <li><a href="{{$link['url']}}">{{$link['text']}}</a></li>
                    </ul>
                    @endforeach
                </div>

                <div class="col">
                    <span class="ft-list-title">SITES</span>
                    @foreach ($siteLink as $link) 
                    <ul>
                        <li><a href="{{$link['url']}}">{{$link['text']}}</a></li>
                    </ul>
                    @endforeach
                </div>
                
            </div>
    
            <div class="ft-top-right">
                <div class="footer-dc-logo">
                    <img src="{{asset('/images/dc-logo-bg.png')}}" alt="footer-logo">
                </div>
            </div> 
    
        </div>
  
    </div>
  
    <div class="footer-bottom">
  
        <div class="container">
  
          <div class="ft-btn">
            <a href="#">Sign-up now!</a>
          </div>
  
          <div class="ft-social">
  
            <span>follow us</span>

            <ul class="social-list"> 
                @foreach ($socialLink as $link)    
                    <li>
                        <a href="{{$link['url']}}">
                            <img src="{{$link['src']}}" alt="ft-logo">                
                        </a>
                    </li>
                @endforeach           
            </ul>
              
          </div>
  
  
        </div>
  
    </div>
  
</footer>