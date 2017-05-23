<?php
namespace app\index\controller;
use app\index\controller;

class Index extends Common
{
    public function index()
    {
        return $this->fetch('index', [], ['__STATIC__'=>'/static']);
    }

}
