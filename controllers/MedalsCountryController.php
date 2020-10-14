<?php
require_once ROOT.'/models/MedalsCountry.php';

class MedalsCountryController
{
    const TITLE="medals country";

    public function actionIndex($where, $id_country)
    {
        $medalscountryList = array();
        $medalscountryList = MedalsCountry::getData($where);
        $name_country = MedalsCountry::getNameCountry($id_country);
        $this->generate($medalscountryList, $name_country);
    }

    private function generate($medalscountryList, $name_country)
    {
        $smarty = MySmarty::getConnection();
        $smarty->assign('title', self::TITLE);
        $smarty->assign('arr_medal_standing_for_country', $medalscountryList);
        $smarty->assign('name_country', $name_country);
        $smarty->display('medals_country.tpl');
    }
}
?>
