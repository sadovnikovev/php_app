<?php
class Main
{
    public static function getData($sort_value, $sortType, $limit)
    {
        $sql_sort =  ORM::for_table('relations')
                        ->select_expr('rank() OVER (ORDER BY `gold` DESC, `silver` DESC, `bronze` DESC)', 'rating')
                        ->select('countries.id', 'country_id')
                        ->select('countries.name', 'country')
                        ->select_expr('SUM(IF( id_medal=1, 1,0))', 'gold')
                        ->select_expr('SUM(IF( id_medal=2, 1,0))', 'silver')
                        ->select_expr('SUM(IF( id_medal=3, 1,0))', 'bronze')
                        ->select_expr('COUNT(id_medal)', 'all_medals')
                        ->join('countries', 'relations.id_country=countries.id')
                        ->group_by('countries.name');
        if($sortType == "asc") {
            $sql_sort->order_by_asc($sort_value);
        } else {
            $sql_sort->order_by_desc($sort_value);
        }
        if (empty($limit)){
            $sql_sort->limit(5);
        }
        return $sql_sort->find_array();
    }

    public static function getDataHref($key, $limit)
    {
        if ($key==1){
            $key=2;
        }
        else{
            $key=1;
        }
        if (!empty($limit)){
            $href=$key."/NOLIMIT";
        }
        else{
            $href=$key;
        }
        return $href;
    }

    public static function getDataParam($sort, $key)
    {
        $param="/".$sort."/".$key."/NOLIMIT";
        return $param;
    }
}
?>
