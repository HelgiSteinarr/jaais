<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Austurköfun</title>
        <meta name="description" content="Austurköfun">
        <meta name="author" content="Helgi Steinarr Júlíusson - Fisedush.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script>window.laravel = {csrfToken: '{{csrf_token() }}'} </script>

        <link rel="icon" href="/imgs/Austfirsk_logo_notext.jpg" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="/css/styles.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    </head>

    <body>
        <div id="app">
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
                <div class="container">
                    <navbar></navbar>
                </div>
                <hr>
            </header>
                <div class="container">
                    <router-view></router-view>
                </div>


            <main>

            </main>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        <!-- Vue app -->
        <script src="{{ asset('js/app.js') }}"></script>

        <!-- Mobile Nav button (Probably moved to app.js soon) -->
        <script>
            $("#nav_button").click(function(){
                console.log("clicked");
                $("li").slideToggle("slow");
            });
        </script>

        <!--TODO: Make a better footer (footer.blade.php) -->
        @include('subviews.footer')

    </body>
</html>