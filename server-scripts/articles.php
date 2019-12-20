<?
$meta = array(
    'keywords' => 'Статьи, описания',
    'description' => 'Статьи и описания'
);

$title = 'Статьи';

if(isset($_GET['ID']))
{
    $id = strip_tags(htmlspecialchars($_GET['ID']));
}
?>