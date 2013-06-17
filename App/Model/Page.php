<?php

namespace App\Model;

use App\Model\Bloc;

class Page extends Base
{
    protected $blocs=array();

    public function __toString()
    {
        $this->loadBlocs();
        $this->orderBlocs();
        return $this->render();
    }

    private function loadBlocs()
    {
        $dir= dirname(__DIR__) . '/blocs/';

        foreach (scandir($dir) as $file) {
            if (ereg('.php'.'$',$file))
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
        $page = $this;
        ob_start();
        include dirname(__DIR__) . '/template/' . $template . '.php';
        $output = ob_get_clean();
        return  $output;

    }
}
