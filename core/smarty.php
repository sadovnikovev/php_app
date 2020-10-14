<?php
class MySmarty{
    public static function getConnection()
    {
        require_once ROOT.'/smarty/libs/Smarty.class.php';
        $smarty = new Smarty();
        return $smarty;
    }

    public function connectDir()
    {
        $smarty = MySmarty::getConnection();
        $smarty->cache_dir = 'cache';
        $smarty->config_dir = 'configs';
        $smarty->template_dir = 'templates';
        $smarty->compile_dir = 'templates_c';
    }
}
?>
