<?php
require_once ROOT.'/models/Main.php';

class MainController
{
    const TITLE="main";

    public function actionIndex($sort, $key, $limit)
    {
        $mainList = array();
        $arr_sort_value = array(1 => 'rating', 2 => 'country', 3 => 'rating', 4 => 'silver', 5 => 'bronze', 6 => 'all_medals');
        $arr_key_value = array(1 => 'asc', 2 => 'desc');
        $href = Main::getDataHref($key, $limit);
        $param = Main::getDataParam($sort, $key);
        $mainList = Main::getData($arr_sort_value[$sort], $arr_key_value[$key], $limit);
        $this->generate($mainList, $href, $param);
    }

    private function generate($mainList, $href, $param)
    {
        $smarty = MySmarty::getConnection();
        $smarty->assign('title', self::TITLE);
        $smarty->assign('href', $href);
        $smarty->assign('arr_sort_index_table', $mainList);
        $smarty->assign('get_param', $param);
        $smarty->display('index.tpl');
    }
}
?>
