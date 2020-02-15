<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Austurköfun</title>
        <meta name="description" content="Austurköfun">
        <meta name="author" content="Helgi Steinarr Júlíusson - Fisedush.com">
        <link rel="icon" href="/imgs/Austfirsk_logo_notext.jpg" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="/css/styles.css">
        <script>
            let pw = prompt("PW:", "");

            if (pw != "ab123pw") {
                // Only to keep the dummies out, obviously anyone with basic 
                // browser/js knowledge will know you can find the "password" here
                // I would use .htaccess password but that aint play nice with routes :s
                window.location.replace("./");
            }
        </script>
    </head>

    <body>

        <header>
            <div class="flex_container">
                <div class="flex_item">
                    <a href="https://www.padi.com/">
                        <img src="/imgs/PADI_logo.jpg"> 
                    </a>
                </div>
                <div class="flex_item flex_item_mid">
                    <img src="/imgs/Austfirsk_logo.jpg">
                </div>
                <div class="flex_item flex_item_right">
                    <a href="https://www.mares.com/en-IC/home/">
                        <img src="/imgs/Mares_logo.png">
                    </a>
                </div>
            </div>
            
            <nav>
                <ul>
                    <li><a href="#" class="nav_underline">Námskeið</a></li>
                    <li><a href="#" class="nav_underline">Verslun</a></li>
                    <li><a href="#" class="nav_underline">Um okkur</a></li>
                    <li><a href="#" class="nav_underline">Hafa samband</a></li>
                </ul>
            </nav>
            <hr>
        </header>
        
        <main>
            <div id="welcome_box">
                <h3>Welcome box</h3>
                <p>
What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

                </p>
            </div>
            <div id="fb_feed">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAustfirsk&tabs=timeline&width=500&height=650&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1382155295164635" width="500" height="650" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>
        </main>
        <!--TODO: Make a better footer (footer.blade.php) -->
        @include('subviews.footer')

    </body>
</html>