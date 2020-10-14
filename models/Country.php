<?php
class Country
{
    public static function getData()
    {
        $sql_output_country = ORM::for_table('countries')->find_array();
        return $sql_output_country;
    }

    public static function destroyData($value)
    {
        $sql_delete_country = ORM::for_table('countries')->find_one($value);
        $sql_delete_country->delete();
    }

    public static function createData($value)
    {
        $sql_save_country = ORM::for_table('countries')->create();
		$sql_save_country->name = $value;
		$sql_save_country->save();
    }
}
?>
