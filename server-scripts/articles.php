<?
require_once($_SERVER['DOCUMENT_ROOT'] . '/files/php/DBModule.php');

$meta = array(
    'keywords' => 'Статьи, описания',
    'description' => 'Статьи и описания'
);

$title = 'Статьи';

if(isset($_GET['SECTION_SYMBOL_CODE']))
{
    $categorySymbolCode = strip_tags(htmlspecialchars($_GET['SECTION_SYMBOL_CODE']));
    
    $DBM = new \Modules\DB();
    $articlesList = $DBM->getArticlesList($categorySymbolCode);
    
    foreach($articlesList as &$article)
    {
        $article['CREATE_DATE'] = date('d/m/Y');
    }
}
else
{
    $DBM = new \Modules\DB();
    $articlesSectionsList = $DBM->getArticlesSectionsList();
}
?>