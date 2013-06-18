<?php

include_once( 'config.php' );

use App\Model\Page;
use App\Utils\Twig;

class app
{

    protected $page='/Public/index.html';
    protected $html;

    public function __construct()
    {

    }

    public function run()
    {
       $page= new Page();
       $this->html= $page->get();
       file_put_contents( ROOT . $this->page , $this->html);
    }

    public function showCode()
    {
        echo Twig::render('code.html', array('code' => $this->html));
    }

}




return new app();
