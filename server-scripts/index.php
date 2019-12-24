<?
require_once($_SERVER['DOCUMENT_ROOT'] . '/files/php/DBModule.php');

$meta = array(
    'keywords' => 'Главная',
    'description' => 'Главная'
);

$title = 'Главная';

$DBM = new \Modules\DB();
$teachersList = $DBM->getTeachersList();
?>