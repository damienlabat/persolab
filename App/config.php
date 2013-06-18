<?php

    use App\Utils\Twig;

    define('ROOT',dirname(__DIR__));
    $loader = require ROOT."/vendor/autoload.php";


    $twigLoader= new Twig_Loader_Filesystem(ROOT . '/App/template');
    $twig= new Twig_Environment($twigLoader);





    $wordSumFilter= new Twig_SimpleFilter('wordSum', function ($string) {
        $cnt = 0;
        $string = strtoupper(trim($string));
        $len = strlen($string);
        for($i = 0; $i < $len; $i++) {
            $cnt += ord($string[$i]) - 64;
        }
        return $cnt;
    });
    $twig->addFilter($wordSumFilter);




    $moduloFilter= new Twig_SimpleFilter('modulo', function ($num, $modulo) {
        return $num % $modulo;
    });
    $twig->addFilter($moduloFilter);




    $moisFilter= new Twig_SimpleFilter('mois', function ($date) {
        $mois= array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
        return $mois[date('n', $date )-1];
    });
    $twig->addFilter($moisFilter);




    $stripAccentsFilter= new Twig_SimpleFilter('stripAccents', function ($string) {
    return strtr(utf8_decode($string), utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ '), 'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY_');
    });
    $twig->addFilter($stripAccentsFilter);




Twig::init($twig);
