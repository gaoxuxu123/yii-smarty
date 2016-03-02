<?php 

     namespace Yxu\SmartyLib;
     require_once "smarty/Smarty.class.php";
	 define("BASEPATH",\Yii::$app->basePath);
    class CSmarty extends \Smarty{

        protected static $_instance = NULL;

        public $SMARTY_TMPDIR   = '/views/templates/';

        public $SMARTY_CONFIG   = '/views/templates/tpl_conf/';

        public $SMARTY_CACHEDIR = '/views/template_cache/';

        public $SMARTY_COMPILE  = '/views/webdata/tpl_compile/';

        public $LIFTTIME        = 1800;

        public $SMARTY_DLEFT    = '<{';

        public $SMARTY_DRIGHT   = '}>';


        public static function getInstance(){

            if(self::$_instance == NULL){

                self::$_instance = new CSmarty();
            }
            return self::$_instance;
        }
    
        public function __construct(){

            parent::__construct();

            $this->template_dir     = BASEPATH.$this->SMARTY_TMPDIR;
            $this->compile_dir      = BASEPATH.$this->SMARTY_COMPILE;
            $this->config_dir       = BASEPATH.$this->SMARTY_CONFIG;
            $this->compile_check    = true;
            $this->caching          = 1;
            $this->cache_dir        = BASEPATH.$this->SMARTY_CACHEDIR;
            $this->left_delimiter   = BASEPATH.$this->SMARTY_DLEFT;
            $this->right_delimiter  = BASEPATH.$this->SMARTY_DRIGHT;
            $this->cache_lifetime   = BASEPATH.$this->LIFTTIME;

        }

     }