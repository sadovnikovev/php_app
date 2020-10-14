<?php
require_once ROOT.'/models/Medal.php';

class MedalController
{
    const TITLE="medal";

    public function actionIndex()
    {
        $tableList = array();
        $tableList = Medal::getData();
        $medalList = Medal::getDataMedal();
        $countryList = Medal::getDataCountry();
        $sportList = Medal::getDataSport();
        $sportsmanList = Medal::getDataSportsman();
        $this->generate($tableList, $medalList, $countryList, $sportList, $sportsmanList);
    }

    private function generate($tableList, $medalList, $countryList, $sportList, $sportsmanList)
    {
        $smarty = MySmarty::getConnection();
        $smarty->assign('title', self::TITLE);
        $smarty->assign('arr_medal_standings', $tableList);
        $smarty->assign('arr_medal', $medalList);
        $smarty->assign('arr_country', $countryList);
        $smarty->assign('arr_sport', $sportList);
        $smarty->assign('arr_sportsmans', $sportsmanList);
        $smarty->display('medal.tpl');
    }

    public function actionDestroy($delete)
    {
        Medal::destroyData($delete);
        header("Location: /medal");
        die();
    }

    public function actionCreate($value_sportsmans, $value_medal, $value_country, $value_sport)
    {
		Medal::createData($value_sportsmans, $value_medal, $value_country, $value_sport);
    }
}
?>
