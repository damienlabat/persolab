<?php

function __autoload($class_name)
{
    include_once dirname(__DIR__) . '/' . str_replace('\\', '/', $class_name) . '.php';
}

function WordSum($word)
{
    $cnt = 0;
    $word = strtoupper(trim($word));
    $len = strlen($word);
    for($i = 0; $i < $len; $i++) {
        $cnt += ord($word[$i]) - 64;
    }
    return $cnt;
}


use App\Model\Page;

class app
{

    protected $page='/Public/index.html';
    protected $html;

    public function run()
    {
       $this->html= new Page();
       file_put_contents( dirname(__DIR__) . $this->page , $this->html);
    }

    public function showCode()
    {
        ob_start();
        include dirname(__DIR__) . '/App/template/code.php';
        $output = ob_get_clean();
        echo $output;
    }

}




return new app();
