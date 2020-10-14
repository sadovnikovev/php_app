<?php
require_once ROOT.'/models/Sport.php';

class SportController
{
    const TITLE="sports";

    public function actionIndex()
    {
        $sportList = array();
        $sportList = Sport::getData();
        $this->generate($sportList);
    }

    private function generate($sportList)
    {
        $smarty = MySmarty::getConnection();
        $smarty->assign('title', self::TITLE);
        $smarty->assign('arr_sport', $sportList);
        $smarty->display('sport.tpl');
    }

    public function actionDestroy($delete)
    {
        Sport::destroyData($delete);
        header("Location: /sport");
        die();
    }

    public function actionCreate($value)
    {
		Sport::createData($value);
    }
}
?>
