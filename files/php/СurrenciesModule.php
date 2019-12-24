<?
namespace Modules;

class Currencies
{
    public static $url = 'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5';
    
    public static function convertUAHCurrency($sum, $currency)
    {
        $context = \stream_context_create(array(
           'http' => array(
                'method' => 'GET'
            ),

            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false
            )
        ));
        
        $currenciesList = \file_get_contents(self::$url, false, $context);
        
        if($currenciesList)
        {
            $currenciesList = json_decode($currenciesList);
            
            foreach($currenciesList as $currencyItem)
            {
                if($currencyItem->ccy == $currency)
                {
                    return round($sum / $currencyItem->sale, 2);
                }
            }
        }
        else
        {
            return false;
        }
    }
}