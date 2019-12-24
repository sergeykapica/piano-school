<?
require_once($_SERVER['DOCUMENT_ROOT'] . '/files/php/DBModule.php');

$meta = array(
    'keywords' => 'Видео, видеоролики',
    'description' => 'Видео'
);

$title = 'Видео';

$DBM = new \Modules\DB();
$videosList = $DBM->getVideosList();

foreach($videosList as &$videoItem)
{
    preg_match('/\?v=(.+)/', $videoItem['URL'], $finds);
    
    if(!empty($finds))
    {
        $videoItem['VIDEO_ID'] = $finds[1];
    }
    
    $videoItem['CREATE_DATE'] = date('d/m/Y', $videoItem['CREATE_DATE']);
}
?>