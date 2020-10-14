<?php
class Sport
{
    public static function getData()
    {
        $sql_output_sport = ORM::for_table('sports')->find_array();
        return $sql_output_sport;
    }

    public static function destroyData($value)
    {
        $sql_delete_sport = ORM::for_table('sports')->find_one($value);
        $sql_delete_sport->delete();
    }

    public static function createData($value)
    {
        $sql_save_sport = ORM::for_table('sports')->create();
		$sql_save_sport->name = $value;
		$sql_save_sport->save();
    }
}
?>
