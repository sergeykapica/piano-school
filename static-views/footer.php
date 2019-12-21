            <footer class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 p-3" itemscope itemtype="http://schema.org/Thing">
                            <h5 class="footer-headline mb-3">О нас</h5>
                            <p class="footer-description" itemprop="about">Мы лидирующая компания в музыкальной сфере.</p>
                        </div>
                        <div class="col-sm-0 col-md-4"></div>
                        <div class="col-sm-12 col-md-4 p-3">
                            <a href="/contacts" class="btn btn-success float-right">Оформить заказ</a>
                        </div>
                    </div>
                    <div class="footer-hseparator row mt-3 mb-3 ml-0 mr-0"></div>
                    <div class="row mt-3 mb-3 ml-0 mr-0">
                        <div class="col-sm-12 col-md-4 footer-string-aleft">
                            <a href="/privacy" class="footer-string footer-url">Политика конфиденциальности и пользовательское соглашение</a>
                        </div>
                        <div class="col-sm-0 col-md-4"></div>
                        <div class="col-sm-12 col-md-4 footer-string-aright" itemscope itemtype="http://schema.org/Person">
                            <span class="footer-string" itemprop="creator">Created by Marchello &copy;</span>
                        </div>
                    </div>
                </div>
            </footer>
        </main>
        <div class="toheader-button-wrapper fadeOut">
            <div class="toheader-button rounded-circle">
                &rsaquo;
            </div>
        </div>

        <script type="text/javascript" src="/files/js/animation-methods.js"></script>

        <script type="text/javascript">
            $(window).ready(function(){animationMethods.setHint($(".nav-item"));var o=[String.fromCharCode(9839),String.fromCharCode(9835),String.fromCharCode(9838),String.fromCharCode(9836),String.fromCharCode(9834),String.fromCharCode(9833),String.fromCharCode(9837),String.fromCharCode(9732)];let e=$(".opportunities-item-icon");e.each(function(t){void 0!==o[t]&&e.eq(t).html(o[t])});var t=$(".toheader-button-wrapper");t.on("click",function(){$("html, body").animate({scrollTop:0},300)});var n=$(".animate-block"),a=0,r=document.documentElement.clientHeight||document.body.clientHeight;$(window).on("scroll",function(){(window.pageYOffset||document.documentElement.scrollTop)>0?(t.removeClass("fadeOut"),t.addClass("fadeIn")):t.hasClass("fadeIn")&&(t.removeClass("fadeIn"),t.addClass("fadeOut")),function(){for(var o=window.pageYOffset||document.documentElement.scrollTop;a<n.length&&n.eq(a).offset().top<=o+r;)n.eq(a).addClass("animation-active"),a++}()})});
        </script>
    </body>
</html>