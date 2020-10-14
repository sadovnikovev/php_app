<?php
class Medal
{
    public static function getData()
    {
        $sql_output_medal = ORM::for_table('relations')
                    ->select('relations.id', 'id')
                    ->select('medals.name', 'medal')
                    ->select('countries.name', 'country')
                    ->select('sports.name', 'sport')
                    ->select_expr('GROUP_CONCAT(sportsmans.name)', 'sportsmans')
                    ->join('medals', 'relations.id_medal=medals.id')
                    ->join('countries', 'relations.id_country=countries.id')
                    ->join('sports', 'relations.id_sport=sports.id')
                    ->join('medal_sportsman', 'medal_sportsman.id_medal=relations.id')
                    ->join('sportsmans', 'medal_sportsman.sportsman_id=sportsmans.id')
                    ->group_by('relations.id')
                    ->find_array();
        return $sql_output_medal;
    }

    public static function getDataMedal()
    {
        $sql_medal = ORM::for_table('medals')->find_array();
        return $sql_medal;
    }

    public static function getDataCountry()
    {
        $sql_country = ORM::for_table('countries')->find_array();
        return $sql_country;
    }

    public static function getDataSport()
    {
        $sql_sport = ORM::for_table('sports')->find_array();
        return $sql_sport;
    }

    public static function getDataSportsman()
    {
        $sql_sportsmans = ORM::for_table('sportsmans')->find_array();
        return $sql_sportsmans;
    }

    public static function destroyData($value)
    {
        $sql_delete_relation = ORM::for_table('relations')->find_one($value);
		$sql_delete_relation -> delete();

		$sql_delete_medal_sportsman = ORM::for_table('medal_sportsman')->where_equal('id_medal', $value);
		$sql_delete_medal_sportsman -> delete_many();
    }

    public static function createData($value_sportsmans, $value_medal, $value_country, $value_sport)
    {
        $sql_save_relation = ORM::for_table('relations')->create();
        $sql_save_relation -> id_medal = $value_medal;
        $sql_save_relation -> id_country = $value_country;
        $sql_save_relation -> id_sport = $value_sport;
        $sql_save_relation -> save();
        $id = $sql_save_relation -> id();

        for ($i=0; $i < count($value_sportsmans); $i++){
            $sportsman_id=$value_sportsmans[$i];
            $sql_save_medal_sportsman = ORM::for_table('medal_sportsman')->create();
            $sql_save_medal_sportsman -> id_medal = $id;
            $sql_save_medal_sportsman ->  sportsman_id = $sportsman_id;
            $sql_save_medal_sportsman -> save();
        }
    }
}
?>
