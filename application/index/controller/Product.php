<?php
namespace app\index\controller;
use app\index\model;
use app\index\controller;

class Product extends Common
{

    public function edit()
    {
        
        $product = model('Product');
        
        /* 1.    获取请求参数 */
        $id = input('param.id') ? input('param.id') : '';
        
        /* 2.    预定义字段 */
        $init = array(
            'category_id'   =>  '',
            'name'          =>  '',
            'description'   =>  '',
            'price'         =>  '',
            'inventory'     =>  '',
            'norm'          =>  ''
        );
        
        /* 3.    获取Post表单商品基础信息 */
        $errors = $init;
        if ( input('?post.form') )
            {
                $form = $_POST['form'];
                
                if ( $form )
                {
                    $data = array(
                        'category_id'   =>  $form['category_id'],
                        'name'          =>  $form['name'],
                        'description'   =>  $form['description'],
                        'price'         =>  $form['price'],
                        'inventory'     =>  $form['inventory']
                    );
                    
                    /* 3.1.    规格合并 */
                    $norm_list = $form['norm'];
                    $norm_str = '';
                    foreach ($norm_list as $k => $v)
                    {
                        if ( $v )
                        {
                            $norm_str .= $v . ',';
                        }
                    }
                    $data['norm'] = substr($norm_str, 0, strlen($norm_str)-1);
                    
                    /* 3.2.    表单数据验证 */
                    $validate = validate('ProductValidate');
                    
                    $allow = TRUE;
                    foreach ($data as $k => $v)
                    {
                        $wait_validate = array(
                            'category_id'   =>  'default',
                            'name'          =>  'default',
                            'description'   =>  'default',
                            'price'         =>  '0.00',
                            'inventory'     =>  '0',
                            'norm'          =>  'default'
                        );
                        $wait_validate[$k] = $v;
                        
                        if ( !$validate->check($wait_validate) )
                        {
                            $allow = FALSE;
                            $errors[$k] = $validate->getError();
                        }
                    }
                    
                    trace('IndexController/input($form):' . print_r($form, true), 'info');
                    
                    /* 3.3.    表单数据保存 */
                    if ( $allow )
                    {
                        $product->data([
                            'category_id'   =>  $data['category_id'],
                            'name'          =>  $data['name'],
                            'description'   =>  $data['description'],
                            'price'         =>  $data['price'],
                            'inventory'     =>  $data['inventory'],
                            'norm'          =>  $data['norm'],
                            'created'       =>  NOW,
                            'deleted'       =>  UNIFIER_N,
                            'status'        =>  ONE
                        ]);
                        
                        $product->save();
                        
                        if ( $product->id )
                            {
                                $this->redirect('Index/index');
                            }
                        else
                            {
                                $this->redirect('Index/index/id/' . $id);
                            }
                    }
                }
            }
        else
            {
                if ( $id )
                    {
                        $res = $product->where('id', $id)->find();
                        $form = $res->toArray();
                        if ( $form['norm'] )
                        {
                            $norm_arr = explode(',', $form['norm']);
                        }
                        $form['norm'] = $norm_arr;
                    }
                else
                    {
                        $form = $init;
                    }
            }
        
        /* 分配数据 */
        $this->assign('id', $id);
        $this->assign('errors', $errors);
        $this->assign('form', $form);
        
        /* 渲染页面 */
        return $this->fetch('edit', [], ['__STATIC__'=>'/static']);
    }

}
