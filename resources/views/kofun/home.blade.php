<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Austurköfun</title>
        <meta name="description" content="Austurköfun">
        <meta name="author" content="Helgi Steinarr Júlíusson - Fisedush.com">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="/imgs/Austfirsk_logo_notext.jpg" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="/css/styles.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    </head>

    <body>

        <header>
            <div class="flex_container">
                <div class="flex_item">
                    <a href="https://www.padi.com/" target="_blank">
                        <img src="/imgs/PADI_logo.jpg"> 
                    </a>
                </div>
                <div class="flex_item_mid">
                    <a href="/">
                        <img src="/imgs/Austfirsk_logo.jpg">
                    </a>
                </div>
                <div class="flex_item_right">
                    <a href="https://www.mares.com/en-IC/home/" target="_blank">
                        <img src="/imgs/Mares_logo.png">
                    </a>
                </div>
            </div>
            
            <nav>
                <div id="nav_button">
                    Valmynd
                </div>
                <ul>
                    @if ($page != "root")
                        <li><a href="/" class="nav_underline">Heim</a></li>
                    @endif
                    <li><a href="/namskeid" class="nav_underline">Námskeið</a></li>
                    <li><a href="/verslun" class="nav_underline">Verslun</a></li>
                    <li><a href="/um_okkur" class="nav_underline">Um okkur</a></li>
                    <li><a href="/samband" class="nav_underline">Hafa samband</a></li>
                </ul>
                <script>
                     $("#nav_button").click(function(){
                        console.log("clicked");
                        $("li").slideToggle("slow");
                    });
                </script>
            </nav>
            <hr>
        </header>
        
        <main>
            @if ($page == "root")
                @include('kofun.home_subview')
            @elseif ($page == "namskeid")
                @include('kofun.courses_subview')
            @elseif ($page == "verslun")
                @include('kofun.store_subview')
            @elseif ($page == "um_okkur")
                @include('kofun.about_subview') 
            @elseif ($page == "samband")
                @include('kofun.contact_subview')
            @else
                Síða fannst ekki
            @endif
        </main>
        <!--TODO: Make a better footer (footer.blade.php) -->
        @include('subviews.footer')

    </body>
</html>