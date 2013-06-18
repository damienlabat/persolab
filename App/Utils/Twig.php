<?php

namespace App\Utils;

use Symfony\Component\Yaml\Yaml;

class Twig
{
    private static $twig;



    public function init($twig)
    {
        self::$twig = $twig;
    }

    public static function render($template, $data)
    {
        return self::$twig->render($template, $data);
    }

    public static function humanDate($date)
    {
        $mois= array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
        return $mois[date('n', $date )-1].' '.date('Y', $date );
    }

}
