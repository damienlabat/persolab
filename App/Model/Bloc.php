<?php

namespace App\Model;


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


    public static function fromFile($filename)
    {

      $class=$tags=$demo=$github=$img=null;

      require dirname(__DIR__) . '/blocs/' . $filename;

      $newBloc= New Bloc();

      $newBloc->filename= 	$filename;
      $newBloc->title = 	$title;
      $newBloc->img = 		$img;
      $newBloc->date = 		strtotime($date);
      $newBloc->content = 	$content;
      $newBloc->class = 	$class;
      $newBloc->tags = 		$tags;
      $newBloc->demo = 		$demo;
      $newBloc->github = 	$github;

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
