<?php 

     namespace Yxu\SmartyLib;
	 define("BASEPATH",\Yii::$app->basePath);
     require_once "smarty/Smarty.class.php";
     define('SMARTY_TMPDIR',BASEPATH.'/views/templates/');
     define('SMARTY_CONFIG',BASEPATH.'/views/templates/tpl_conf/');
     define('SMARTY_CACHEDIR',BASEPATH.'/views/template_cache/');
     define('SMARTY_COMPILE',BASEPATH.'/views/webdata/tpl_compile/');
     define('LIFTTIME',1800);
     define('SMARTY_DLEFT', '<{');
     define('SMARTY_DRIGHT', '}>');
    class CSmarty extends \Smarty{

        protected static $_instance = NULL;

        static function getInstance(){
            if(self::$_instance == NULL){
                self::$_instance = new CSmarty();
            }
            return self::$_instance;
        }
    
        function __construct(){
            parent::__construct();

            $this->template_dir = SMARTY_TMPDIR;
            $this->compile_dir = SMARTY_COMPILE;
            $this->config_dir = SMARTY_CONFIG;
            $this->compile_check = true;
            $this->caching = 1;
            $this->cache_dir = SMARTY_CACHEDIR;
            $this->left_delimiter  =  SMARTY_DLEFT;
            $this->right_delimiter =  SMARTY_DRIGHT;
            $this->cache_lifetime = LIFTTIME;
           
        }
        function init(){

        }
     }