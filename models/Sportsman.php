<?php
class Sportsman
{
    public static function getData()
    {
        $sql_output_sportsman = ORM::for_table('sportsmans')->find_array();
        return $sql_output_sportsman;
    }

    public static function destroyData($value)
    {
        $sql_delete_sportsman = ORM::for_table('sportsmans')->find_one($value);
        $sql_delete_sportsman->delete();
    }

    public static function createData($value)
    {
        $sql_save_sportsman = ORM::for_table('sportsmans')->create();
		$sql_save_sportsman->name = $value;
		$sql_save_sportsman->save();
    }
}
?>
