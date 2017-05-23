<?php
namespace app\index\controller;
use think\Controller;

class Common extends Controller
{
    function _initialize()
    {
        $title = '成都市科技有限公司';
        $this->assign('title', $title);
    }
}
?>
