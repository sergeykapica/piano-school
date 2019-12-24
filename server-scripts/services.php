<?
require_once($_SERVER['DOCUMENT_ROOT'] . '/files/php/DBModule.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/files/php/СurrenciesModule.php');

$meta = array(
    'keywords' => 'Услуги, курсы, предложения',
    'description' => 'Услуги и абонементы'
);

$title = 'Услуги';

$DBM = new \Modules\DB();
$serviceList = $DBM->getServicesList(0, 2);

foreach($serviceList as &$service)
{
    if($service['LESSONS_COUNT'] < 2)
    {
        $service['LESSONS_COUNT_TITLE'] = 'занятие';
    }
    else if($service['LESSONS_COUNT'] > 4)
    {
        $service['LESSONS_COUNT_TITLE'] = 'занятий';
    }
    else
    {
        $service['LESSONS_COUNT_TITLE'] = 'занятия';
    }
    
    $service['PRICE_RUR'] = \Modules\Currencies::convertUAHCurrency($service['PRICE'], 'RUR');
}
?>