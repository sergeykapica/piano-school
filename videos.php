<?require_once($_SERVER['DOCUMENT_ROOT'] . '/server-scripts/videos.php');?>

<?include_once($_SERVER['DOCUMENT_ROOT'] . '/static-views/header.php');?>

<div class="row mt-3 mb-3">
    <div class="col-12 video-list" itemscope itemtype="http://schema.org/VideoGallery">
        <div class="video-item btn p-0 border-0 jump" style="background-image: url(https://i.ytimg.com/vi/9_Pz6J9YuQY/mqdefault.jpg);" data-toggle="modal" data-target=".bd-example-modal-lg" data-video-id="9_Pz6J9YuQY" data-video-full-title="Игорь Крутой - Танцующие Эвридики" data-video-description="Игорь Крутой - Танцующие Эвридики" data-video-date="02/06/2000">
            <kbd class="video-title d-block w-100 text-center p-1" itemprop="name">Игорь Крутой - Танцующие Эвридики</kbd>
            <div class="video-duration text-right pr-2" itemprop="timeRequired" itemscope itemtype="http://schema.org/Duration">3:58</div>
        </div>
        <div class="video-item btn p-0 border-0 jump" style="background-image: url(https://i.ytimg.com/vi/qRYLCP-IX3c/mqdefault.jpg);" data-toggle="modal" data-target=".bd-example-modal-lg" data-video-id="qRYLCP-IX3c" data-video-full-title="Игорь Крутой - Когда я закрываю глаза" data-video-description="Игорь Крутой - Когда я закрываю глаза" data-video-date="02/06/2000">
            <kbd class="video-title d-block w-100 text-center p-1" itemprop="name">Игорь Крутой - Когда я закрываю глаза</kbd>
            <div class="video-duration text-right pr-2" itemprop="timeRequired" itemscope itemtype="http://schema.org/Duration">5:19</div>
        </div>
        <div class="video-item btn p-0 border-0 jump" style="background-image: url(https://i.ytimg.com/vi/qAHNq584mfg/mqdefault.jpg);" data-toggle="modal" data-target=".bd-example-modal-lg" data-video-id="qAHNq584mfg" data-video-full-title="Игорь Крутой - Ты в моём сентябре" data-video-description="Игорь Крутой - Ты в моём сентябре" data-video-date="02/06/2000">
            <kbd class="video-title d-block w-100 text-center p-1" itemprop="name">Игорь Крутой - Ты в моём сентябре</kbd>
            <div class="video-duration text-right pr-2" itemprop="timeRequired" itemscope itemtype="http://schema.org/Duration">5:45</div>
        </div>
        <div class="video-item btn p-0 border-0 jump" style="background-image: url(https://i.ytimg.com/vi/cmoz_Psga-I/default.jpg);" data-toggle="modal" data-target=".bd-example-modal-lg" data-video-id="cmoz_Psga-I" data-video-full-title="Раймонд Паулс и Андрей Миронов - Старые друзья" data-video-description="Раймонд Паулс и Андрей Миронов - Старые друзья" data-video-date="02/06/2000">
            <kbd class="video-title d-block w-100 text-center p-1" itemprop="name">Раймонд Паулс и Андрей Миронов - Старые друзья</kbd>
            <div class="video-duration text-right pr-2" itemprop="timeRequired" itemscope itemtype="http://schema.org/Duration">4:03</div>
        </div>
        <div class="video-item btn p-0 border-0 jump" style="background-image: url(https://i.ytimg.com/vi/wQ21ytXFuYo/mqdefault.jpg);" data-toggle="modal" data-target=".bd-example-modal-lg" data-video-id="wQ21ytXFuYo" data-video-full-title="Раймонд Паулс - Долгая дорога в дюнах" data-video-description="Раймонд Паулс - Долгая дорога в дюнах" data-video-date="02/06/2000">
            <kbd class="video-title d-block w-100 text-center p-1" itemprop="name">Раймонд Паулс - Долгая дорога в дюнах</kbd>
            <div class="video-duration text-right pr-2" itemprop="timeRequired" itemscope itemtype="http://schema.org/Duration">4:08</div>
        </div>
        <div class="video-item btn p-0 border-0 jump" style="background-image: url(https://i.ytimg.com/vi/sjDmX-J_yx0/mqdefault.jpg);" data-toggle="modal" data-target=".bd-example-modal-lg" data-video-id="sjDmX-J_yx0" data-video-full-title="Валерий Леонтьев - Полюбите пианиста" data-video-description="Валерий Леонтьев - Полюбите пианиста" data-video-date="02/06/2000">
            <kbd class="video-title d-block w-100 text-center p-1" itemprop="name">Валерий Леонтьев - Полюбите пианиста</kbd>
            <div class="video-duration text-right pr-2" itemprop="timeRequired" itemscope itemtype="http://schema.org/Duration">3:31</div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe id="video-area" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="w-100 font-verdana mt-3 mb-3 text-info" id="video-description"></div>
                <div class="w-100 text-right mb-3 text-secondary" id="video-date"></div>
            </div>
        </div>
      </div>
</div>

<script type="text/javascript">
    $(window).ready(function(){var t=$(".video-title");t.each(function(e){let d=t.eq(e);d.text().length>33&&d.text(d.text().slice(0,33)+"...")}),$("#exampleModalCenter").on("show.bs.modal",function(t){t=t||t.window;var e=$(t.relatedTarget);let d=$(this);var a=d.find("#video-area"),i=d.find("#exampleModalLabel"),o=d.find("#video-description"),n=d.find("#video-date");void 0!==d[0]&&void 0!==i&&(i.text(e.attr("data-video-full-title")),a.attr("src","https://www.youtube.com/embed/"+e.attr("data-video-id")),o.text(e.attr("data-video-description")),n.text("Добавлено: "+e.attr("data-video-date")))})});
</script>

<?include_once($_SERVER['DOCUMENT_ROOT'] . '/static-views/footer.php');?>