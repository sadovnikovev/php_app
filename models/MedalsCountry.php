<?php
class MedalsCountry
{
    public static function getData($where)
    {
        $sql_output_table_country = ORM::for_table('relations')
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
                    ->where($where)
                    ->group_by('relations.id')
                    ->find_array();
        return $sql_output_table_country;
    }

    public static function getNameCountry($val)
    {
        $sql_name_country = ORM::for_table('countries')->find_one($val);
        return $sql_name_country;
    }
}
?>
