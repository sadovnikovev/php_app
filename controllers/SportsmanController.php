<?php
require_once ROOT.'/models/Sportsman.php';

class SportsmanController
{
    const TITLE="sportsmans";

    public function actionIndex()
    {
        $sportsmanList = array();
        $sportsmanList = Sportsman::getData();
        $this->generate($sportsmanList);
    }

    private function generate($sportsmanList)
    {
        $smarty = MySmarty::getConnection();
        $smarty->assign('title', self::TITLE);
        $smarty->assign('arr_sportsmans', $sportsmanList);
        $smarty->display('sportsman.tpl');
    }

    public function actionDestroy($delete)
    {
        Sportsman::destroyData($delete);
        header("Location: /sportsman");
        die();
    }

    public function actionCreate($value)
    {
		Sportsman::createData($value);
    }
}
?>
