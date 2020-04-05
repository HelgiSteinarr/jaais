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
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script src="https://npmcdn.com/vue-router@2.0.0/dist/vue-router.js"></script>

        <link rel="stylesheet" href="/css/dev_styles.css">
    </head>

    <body>
        <div id="app">
            <navbar></navbar>
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