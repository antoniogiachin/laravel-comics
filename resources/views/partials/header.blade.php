
<header>

    <div class="container">

        <!-- header left -->
        <div class="header-left">
            <div class="logo">
                <img src="{{asset('images/dc-logo.png')}}" alt="dc-logo-header">
            </div>
        </div>

        <!-- header right -->
        <div class="header-right">

            <ul>
                @foreach ($Headerlinks as $link)
                    <li>
                        <a href="{{$link['url']}}">{{$link['text']}}</a>
                    </li>
                @endforeach
            </ul>

        </div>


    </div>

</header>
