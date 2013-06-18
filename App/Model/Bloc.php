<?php

namespace App\Model;

use Symfony\Component\Yaml\Yaml;


class Bloc extends Base
{
    protected $filename;
    protected $title;
    protected $img;
    protected $date;
    protected $content;
    protected $class;
    protected $tags;
    protected $demo;
    protected $github;


    public static function fromFile($file)
    {

      $newBloc= New Bloc( Yaml::parse(ROOT.'/DATA/blocs/'.$file) );

      $newBloc->filename = $file;
      $newBloc->date = strtotime($newBloc->date);

      return $newBloc;
    }


    public function __toString()
    {
        return $this->render();
    }


    public function render( $template='bloc' )
    {
        $bloc=$this;
        ob_start();
        include dirname(__DIR__) . '/template/' . $template . '.php';
        $output = ob_get_clean();
        return  $output;

    }

    public function humanDate()
    {
        $mois= array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");

        return $mois[date('n', $this->date )-1].' '.date('Y', $this->date );
    }

}
