<?require_once($_SERVER['DOCUMENT_ROOT'] . '/server-scripts/articles.php');?>

<?include_once($_SERVER['DOCUMENT_ROOT'] . '/static-views/header.php');?>

<div class="row">
    <div class="col" itemscope itemtype="http://schema.org/Article">

        <?if(!isset($categorySymbolCode)):?>
            
            <?if($articlesSectionsList !== false):?>
        
                <?if(!empty($articlesSectionsList)):?>
        
                    <?foreach($articlesSectionsList as $aSection):?>
        
                        <div class="row ml-0 mr-0 mt-3 mb-3 articles-sections-list">
                            <div class="col pl-3">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center mb-3">
                                        <?=$aSection['TITLE'];?>
                                        <span class="badge badge-primary badge-pill">2</span>
                                        <a href="/articles?SECTION_SYMBOL_CODE=<?=$aSection['SYMBOL_CODE'];?>" class="cover-link"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
        
                    <?endforeach;?>
                
                <?else:?>
        
                <div class="row mt-3 mb-3">
                    <div class="col">
                        <div class="alert alert-dark" role="alert">
                            Статьи отсутствуют
                        </div>
                    </div>
                </div>
        
                <?endif;?>
        
            <?else:?>
        
                <div class="row mt-3 mb-3">
                    <div class="col">
                        <div class="alert alert-danger" role="alert">
                            При выводе списка статей возникла ошибка
                        </div>
                    </div>
                </div>
        
            <?endif;?>

        <?else:?>
            
            <?if($articlesList !== false):?>
                
                <?if(!empty($articlesList)):?>
        
                        <div class="row articles-list mt-3 mb-3 ml-0 mr-0">
                            
                            <?foreach($articlesList as $article):?>
                            
                                <div class="col-12 mb-3 article-item" itemprop="articleBody">
                                    <h5 class="mb-3"><?=$article['SUBJECT'];?></h5>
                                    <div class="article-item-content mb-3"><?=$article['CONTENT'];?></div>
                                    <div class="article-info">
                                        <div class="w-50 float-left">
                                            <a href="/articles?SECTION_SYMBOL_CODE=<?=$article['SECTION_SYMBOL_CODE'];?>&ELEMENT_SYMBOL_CODE=<?=$article['ELEMENT_SYMBOL_CODE'];?>" class="btn btn-info float-left">Подробнее</a>
                                        </div>
                                        <div class="w-50 float-right text-right">
                                            <span class="text-muted" itemprop="dateCreated"><?=$article['CREATE_DATE'];?></span>
                                        </div>
                                    </div>
                                </div>
                            
                            <?endforeach;?>
                            
                        </div>
        
                <?endif;?>
        
        <?endif;?>
        
    <?endif;?>
        
    </div>
</div>

<?include_once($_SERVER['DOCUMENT_ROOT'] . '/static-views/footer.php');?>