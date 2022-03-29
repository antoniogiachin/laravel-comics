
<header>

    <div class="container">

        <!-- header left -->
        <div class="header-left">
            <div class="logo">
                <a href="/"><img src="{{asset('images/dc-logo.png')}}" alt="dc-logo-header"></a>
            </div>
        </div>

        <!-- header right -->
        <div class="header-right">

            <ul>
                {{-- ciclo array link header e stampo --}}
                @foreach ($headerlinks as $link)
                    <li>
                        <a class="
                            @if (Request::route()->getName() == $link['url'])
                                active
                            @endif
                        " href="{{$link['url']}}"> {{$link['text']}}</a>
                    </li>
                @endforeach
            </ul>

        </div>


    </div>

</header>
