<!DOCTYPE html>

<html lang="en">

    <head>

        <!-- Google tag (gtag.js) readded Mar 17, 2025 for new website-->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-YNR6PSXXML"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-YNR6PSXXML');
        </script>



        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>
            @isset($doctitle)
            {{$doctitle}} | Twin Beans Coffee Northwest Indiana
            @else
            Twin Beans Coffee Northwest Indiana
            @endisset
          </title>
        <meta name="description" content="Welcome to a different kind of coffee shop in Northwest Indiana! A great place for meeting up and enjoying delicious coffee and lattes." />
        <link rel="icon" type="image/x-icon" href="./favicon.png" />
        
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.typekit.net/tif7myj.css">
        
        <!-- Adobe Fonts -->
        <link rel="stylesheet" href="https://use.typekit.net/tif7myj.css">
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/assets/css/styles.css" rel="stylesheet" />
        
        <!-- Facebook tags-->
        <meta property="fb:app_id" content="1155446072478399" />

        <meta property="og:type" content="website">
        
        <meta property="og:title" content="@isset($machine) Now Playing at Twin Beans Coffee: {{ $machine->name }} @else Twin Beans Coffee @endisset">

        <meta property="og:description" content="@isset($machine) Pinball at the shop! {{ $machine->headline }} @else Welcome to a different kind of coffee shop in Northwest Indiana! A great place for meeting up and enjoying delicious coffee and lattes. @endisset"/>
        
        <meta property="og:image" content="
        @isset($machine) 
            https://www.twinbeansnwi.com/assets/images/machines/fb/{{$machine->slug}}.jpg
        @else 
            https://www.twinbeansnwi.com/assets/images/fb-sharesquare.jpg
        @endisset
        
        ">

        <meta property="og:url" content="@isset($machine) https://www.twinbeansnwi.com/machines/{{ $machine->slug }} @else https://www.twinbeansnwi.com @endisset">

    </head>


    
    <body id="page-top">

        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v19.0&appId=1155446072478399" nonce="93RKl9Bq"></script>
        
    
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="/"><img src="/assets/images/twin-beans-logo.png" width="185px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-lightning-charge-fill green"></i>
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        
                        @if(!Auth::check())
                        <li class="nav-item">
                            <a class="nav-link me-lg-3" href="/machines/{{ $game->slug }}">
                                <i class="bi bi-lightning-charge"></i> <u><span style="text-transform: uppercase;">machines</span></u>
                            </a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link me-lg-3" href="/machines">
                                <span class="green"><i class="bi bi-lightning-charge-fill"></i></span> <u><span style="text-transform: uppercase;">edit machines</span></u>
                            </a>
                        </li>
                        @endif

                        @if(!Auth::check())
                        <li class="nav-item">
                            <a class="nav-link me-lg-3" href="/menu">
                                <i class="bi bi-lightning-charge"></i> <u><span style="text-transform: uppercase;">menu</span></u>
                            </a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link me-lg-3" href="/menu">
                                <span class="green"><i class="bi bi-lightning-charge-fill"></i> </span><u><span style="text-transform: uppercase;">edit menu</span></u>
                            </a>
                        </li>
                        @endif
                        
                        <li class="nav-item">
                            <a class="nav-link me-lg-3" href="https://twinbeansnwi.com/#hours">
                                <i class="bi bi-lightning-charge"></i> <u><span style="text-transform: uppercase;">hours</span></u>
                            </a>
                        </li>  
                        
                        <li class="nav-item">
                            <a class="nav-link me-lg-3" href="https://twinbeansnwi.com/#location">
                                <i class="bi bi-lightning-charge"></i> <u><span style="text-transform: uppercase;">location</span></u>
                            </a>
                        </li>  
                        
                        <li class="nav-item">
                            <a class="nav-link me-lg-3" href="https://twinbeansnwi.com/#about">
                                <i class="bi bi-lightning-charge"></i> <u><span style="text-transform: uppercase;">about</span></u>
                            </a>
                        </li>  
                        
                        <li class="nav-item">
                            <a class="nav-link me-lg-3" href="https://twinbeansnwi.com/#reviews">
                                <i class="bi bi-lightning-charge"></i> <u><span style="text-transform: uppercase;">reviews</span></u>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        {{ $slot }}


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


        <script>
        window.fbAsyncInit = function() {
            FB.init({
            appId      : '1155446072478399',
            cookie     : true,
            xfbml      : true,
            version    : '1155446072478399'
            });
            
            FB.AppEvents.logPageView();   
            
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>

    </body>
</html>
