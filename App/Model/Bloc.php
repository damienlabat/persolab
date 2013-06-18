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
    protected $links;


    public static function fromFile($file)
    {

      $newBloc= New Bloc( Yaml::parse(ROOT.'/DATA/blocs/'.$file) );
      $newBloc->filename = $file;

      return $newBloc;
    }

}
