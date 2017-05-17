<?php
namespace app\index\controller;
use app\index\model\productValidate;
use app\index\controller;

class Index extends Common
{
    public function index()
    {
        return $this->fetch('index', [], ['__STATIC__'=>'/static']);
    }

    public function input()
    {
        /* 1.    获取请求参数 */
        $id = input('param.id') ? input('param.id') : '';
        
        /* 2.    预定义字段 */
        $init = array(
            'classify'      =>  '',
            'name'          =>  '',
            'description'   =>  '',
            'amount'        =>  '',
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
                    /* 3.1.    规格合并 */
                    $norm_list = $form['norm'];
                    $norm_str = '';
                    foreach ($norm_list as $k => $v)
                    {
                        if ( $v )
                        {
                            $norm_str += $v . '|';
                        }
                    }
                    rtrim($norm_str, '|');
                    $form['norm'] = $norm_str;
                    
                    /* 3.2.    表单数据验证 */
                    $validate = validate('ProductValidate');
                    
                    $data = array(
                        'classify'      =>  $form['classify'],
                        'name'          =>  $form['name'],
                        'description'   =>  $form['description'],
                        'amount'        =>  $form['amount'],
                        'inventory'     =>  $form['inventory']
                    );
                    
                    $allow = TRUE;
                    foreach ($data as $k => $v)
                    {
                        $wait_validate = array(
                            'classify'      =>  'default',
                            'name'          =>  'default',
                            'description'   =>  'default',
                            'amount'        =>  '0.00',
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
                    
                    /* 3.3.    表单数据保存 */
                    if ( !$allow )
                    {
                        
                    }
                }
            }
        else
            {
                if ( $id )
                    {
                        
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
        return $this->fetch('input', [], ['__STATIC__'=>'/static']);
    }

    function sort2ArrayOrderByField($array, $field, $direction = TRUE)
    {
        $sort['field'] = $field;
        
        if ( $direction )
            {
                $sort['direction'] = 'SORT_ASC';
            }
        else
            {
                $sort['direction'] = 'SORT_DESC';
            }
        
        $arrSort = array();
        
        foreach ($array AS $index => $row)
        {
            foreach ($row AS $key => $val)
            {
                $arrSort[$key][$index] = $val;
            }
        }
        
        if ( $sort['direction'] )
        {
            array_multisort($arrSort[$sort['field']], constant($sort['direction']), $rs);
        }
        
        return $rs;
    }
}
