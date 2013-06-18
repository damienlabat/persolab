<?php

namespace App\Model;

use App\Model\Bloc;
use App\Utils\Twig;

class Page extends Base
{
    protected $blocs=array();

    public function get()
    {
        $this->loadBlocs();
        $this->orderBlocs();
        return $this->render();
    }

    private function loadBlocs()
    {
        $dir= ROOT . '/DATA/blocs/';

        foreach (scandir($dir) as $file) {
            if (ereg('.yaml'.'$',$file))
                $this->blocs[]= Bloc::fromFile( $file );
        }
    }

    private function orderBlocs()
    {

        usort($this->blocs, function($a, $b) {
            return $a->date < $b->date;
        });

    }

    private function render( $template='main' )
    {

        return Twig::render($template.'.html', array(
            'blocs' => $this->blocs
            ) );
    }
}
