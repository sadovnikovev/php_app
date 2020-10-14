<?php
require_once ROOT.'/models/Country.php';

class CountryController
{
    const TITLE="countries";

    public function actionIndex()
    {
        $countryList = array();
        $countryList = Country::getData();
        $this->generate($countryList);
    }

    private function generate($countryList)
    {
        $smarty = MySmarty::getConnection();
        $smarty->assign('title', self::TITLE);
        $smarty->assign('arr_country', $countryList);
        $smarty->display('country.tpl');
    }

    public function actionDestroy($delete)
    {
        Country::destroyData($delete);
        header("Location: /country");
        die();
    }

    public function actionCreate($value)
    {
		Country::createData($value);
    }
}
?>
