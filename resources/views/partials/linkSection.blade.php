<div id="links-section">
    <div class="container">
        @foreach ($linkSection as $link)
            <a href="{{$link['href']}}" class="link-card">
                <div class="card-img">
                    <img src="{{$link['src']}}" alt="link-img">
                </div>
                <div class="card-txt">
                    <span>{{$link['text']}}</span>
                </div>
            </a>
        @endforeach
    </div>
</div>