<style>
    /*Footer style (Footer imported from external file)*/
    @import url('https://fonts.googleapis.com/css?family=Roboto');
    /*
        font-family: 'Roboto', sans-serif;
    */
    footer{
        width: 100%;
        height: 60px;
        background-color: #dbdbdb;
        text-align: center;
        font-family: 'Roboto', sans-serif;
    }
    footer h5{
        font-size: 12px;
        padding: 20px;
        margin: 0;
    }
</style>
<footer id="footer">
    <h5>Austfirsk Köfun &copy; <span id="year"></span>&nbsp;&nbsp; - &nbsp;&nbsp;<a href="mailto:julius@simnet.is">Julius@simnet.is</a></h6>
    <script>
        let year = new Date().getFullYear();
        let span = document.getElementById("year");
        let year_text = document.createTextNode(year);
        span.appendChild(year_text)

        // Sticky footer
        $(window).bind("load", function() { 
            setTimeout(function(){
            var footerHeight = 0,
                footerTop = 0,
                $footer = $("#footer");
           
            positionFooter();
       
            function positionFooter() {

                footerHeight = $footer.height();
                footerTop = ($(window).scrollTop()+$(window).height()-footerHeight)+"px";
                if ( ($(document.body).height()+footerHeight) < $(window).height()) {
                   $footer.css({
                        position: "absolute"
                   }).stop().animate({
                        top: footerTop
                   })
                } else {
                   $footer.css({
                        position: "static"
                   })
                }   
            }
            $(window)
                    .scroll(positionFooter)
                    .resize(positionFooter)
            }, 1000);            
        });
            
            
    </script>
</footer>