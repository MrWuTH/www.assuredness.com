<?php
namespace app\index\validate;
use think\Validate;

class ProductValidate extends Validate
{
    protected $rule =   [
        'category_id'      =>  'require|gt:0',
        'name'          =>  'require|max:20',
        'description'   =>  'require|max:50',
        'price'        =>  'require',
        'inventory'     =>  'require'
    ];

    protected $message  =   [
        'category_id.require'      =>  '请选择商品分类',
        'category_id.gt'           =>  '请选择商品分类',
        'name.require'          =>  '请填写商品名称',
        'name.max'              =>  '名称最多20个字符',
        'description.require'   =>  '请填写商品描述',
        'description.max'       =>  '描述最多50个字符',
        'price.require'        =>  '请填写商品金额',
        'inventory.require'     =>  '请填写商品库存'
    ];

}
