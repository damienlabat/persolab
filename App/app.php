<?php


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

define('ROOT',dirname(__DIR__));
$loader = require ROOT."/vendor/autoload.php";

use App\Model\Page;

class app
{

    protected $page='/Public/index.html';
    protected $html;

    public function run()
    {
       $page= new Page();
       $this->html= $page->get();
       file_put_contents( ROOT . $this->page , $this->html);
    }

    public function showCode()
    {
        ob_start();
        include ROOT . '/App/template/code.php';
        $output = ob_get_clean();
        echo $output;
    }

}




return new app();
