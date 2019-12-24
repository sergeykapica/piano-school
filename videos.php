<?require_once($_SERVER['DOCUMENT_ROOT'] . '/server-scripts/videos.php');?>

<?include_once($_SERVER['DOCUMENT_ROOT'] . '/static-views/header.php');?>

<div class="row mt-3 mb-3">
    
    <div class="col-12 video-list" itemscope itemtype="http://schema.org/VideoGallery">
    
        <?if($videosList !== false):?>

            <?if(!empty($videosList)):?>
    
                <?foreach($videosList as $video):?>

                    <div class="video-item btn p-0 border-0 jump" style="background-image: url(<?=$video['PREVIEW_IMAGE_URL'];?>);" data-toggle="modal" data-target=".bd-example-modal-lg" data-video-id="<?=$video['VIDEO_ID'];?>" data-video-full-title="<?=$video['TITLE'];?>" data-video-description="<?=$video['DESCRIPTION'];?>" data-video-date="<?=$video['CREATE_DATE'];?>">
                        <kbd class="video-title d-block w-100 text-center p-1" itemprop="name"><?=$video['TITLE'];?></kbd>
                        <div class="video-duration text-right pr-2" itemprop="timeRequired" itemscope itemtype="http://schema.org/Duration"><?=$video['DURATION'];?></div>
                    </div>

                <?endforeach;?>

            <?else:?>

                <div class="row mt-3 mb-3">
                    <div class="col">
                        <div class="alert alert-dark" role="alert">
                            Видеозаписи отсутствуют
                        </div>
                    </div>
                </div>

            <?endif;?>

        <?else:?>

            <div class="row mt-3 mb-3">
                <div class="col">
                    <div class="alert alert-danger" role="alert">
                        При выводе списка видеозаписей возникла ошибка
                    </div>
                </div>
            </div>

        <?endif;?>
    
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