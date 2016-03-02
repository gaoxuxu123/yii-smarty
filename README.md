
##安装方法
```

 composer require yii-smarty/smarty dev-master

 或者在composer.json中加入

 "require": {

        "yii-smarty/smarty": "dev-master"
 }

```

 更新依赖 ``` composer update ```

##使用说明

 ```
     必须在views文件夹下面创建2个文件夹分别是template_cache和templates
     用来存放自己的视图文件，当然也可以自己修改自定义

     源代码中：

             public $SMARTY_TMPDIR   = '/views/templates/';

             public $SMARTY_CONFIG   = '/views/templates/tpl_conf/';

             public $SMARTY_CACHEDIR = '/views/template_cache/';

             public $SMARTY_COMPILE  = '/views/webdata/tpl_compile/';

             public $LIFTTIME        = 1800;

             public $SMARTY_DLEFT    = '<{';

             public $SMARTY_DRIGHT   = '}>';

     上述参数都可自定义。


    在控制器中引入该类 : use Yxu\SmartyLib\CSmarty;
    //实例对象
    $smarty =  CSmarty::getInstance();

    //传递参数
    $smarty->assign('name','HelloSmarty');

    //展示的界面 路径views/templates/index.html
    $smarty->display("index.html");

 ```