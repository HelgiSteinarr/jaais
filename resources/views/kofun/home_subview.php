<div id="text_section">
    <h3>Velkomin á heimsíðuna okkar.</h3>
    <p>
        Þessi síða er ennþá í vinnslu. <br>
        Síðar meir kemur hérna vefverslun og upplýsingar um námskeið sem eru í boði hjá okkur. 
        Þangað til endilega skoðið hvaða vörur <a href="https://www.mares.com" target="_blank"><b>Mares</b></a> bíður uppá og námsskrá <a href="https://www.padi.com/courses" target="_blank"><b>PADI</b></a>. Ekki hika við að hafa samband ef þið viljið nánari upplýsingar og/eða verð.
     </p>
</div>
<div id="fb-root"></div>
<script> // FB JS SDK
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2&appId=1382155295164635';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div id="fb-page_wrapper">
    <div class="fb-page" 
        data-href="https://www.facebook.com/Austfirsk" 
        data-tabs="timeline" 
        data-small-header="false" 
        data-adapt-container-width="true" 
        data-hide-cover="false" 
        data-show-facepile="true"
        data-width="500px"
        data-height="600px"
        >
        <blockquote cite="https://www.facebook.com/Austfirsk" class="fb-xfbml-parse-ignore">
            <a href="https://www.facebook.com/Austfirsk">Austfirsk Köfun</a>
        </blockquote>
    </div>
</div>
<script>
    function updateFbFeed(){
        let fbDiv = document.getElementsByClassName("fb-page");
        let fbDivWidth = fbDiv[0].getBoundingClientRect().width;

        let parentPosInfo = document.getElementById("fb-page_wrapper").getBoundingClientRect();
        let parentWidth = parentPosInfo.width;
        if (parentWidth != fbDivWidth){
            fbDiv[0].setAttribute("data-width", parentWidth);
            FB.XFBML.parse();
        }
    }
    window.onload = updateFbFeed();
    window.addEventListener('resize', updateFbFeed());
        
    
</script>
</div>
<!--
<div id="fb_feed">
    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAustfirsk&tabs=timeline&width=315&height=650&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1382155295164635" width="320" height="650" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
</div> -->