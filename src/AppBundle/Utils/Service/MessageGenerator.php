<?php
namespace AppBundle\Utils\Service;
/**
 * Created by PhpStorm.
 * User: sgaido
 * Date: 05/10/17
 * Time: 14:16
 */
class MessageGenerator
{
    public function getMessaggioBenvenuto()
    {
        $messages = [
            'Ciao',
            'Bentornato',
            'Buongiorno',
        ];

        $index = array_rand($messages);

        return $messages[$index];
    }

    public function getCoinDesk()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.coindesk.com/v1/bpi/currentprice/EUR.json');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json')); // Assuming you're requesting JSON
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);

        $ret2 = json_decode($response);

        return $ret2;
    }
}