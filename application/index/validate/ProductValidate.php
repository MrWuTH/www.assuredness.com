<?php
namespace app\index\validate;
use think\Validate;

class ProductValidate extends Validate
{
    protected $rule =   [
        'classify'      =>  'require|gt:0',
        'name'          =>  'require|max:20',
        'description'   =>  'require|max:50',
        'amount'        =>  'require',
        'inventory'     =>  'require'
    ];

    protected $message  =   [
        'classify.require'      =>  '请选择商品分类',
        'classify.gt'           =>  '请选择商品分类',
        'name.require'          =>  '请填写商品名称',
        'name.max'              =>  '名称最多20个字符',
        'description.require'   =>  '请填写商品描述',
        'description.max'       =>  '描述最多50个字符',
        'amount.require'        =>  '请填写商品金额',
        'inventory.require'     =>  '请填写商品库存'
    ];

}