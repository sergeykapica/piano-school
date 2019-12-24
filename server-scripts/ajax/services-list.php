<?
require_once($_SERVER['DOCUMENT_ROOT'] . '/files/php/DBModule.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/files/php/СurrenciesModule.php');

if(isset($_GET['OFFSET']) && isset($_GET['LIMIT']))
{
    $offset = strip_tags(htmlspecialchars($_GET['OFFSET']));
    $limit = strip_tags(htmlspecialchars($_GET['LIMIT']));
    
    $DBM = new \Modules\DB();
    $serviceList = $DBM->getServicesList($offset, $limit);

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
    
    echo json_encode(array(
        'SERVICES_LIST' => $serviceList
    ));
}
?>