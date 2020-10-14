<?php
class DB
{
    public static function getConnection()
    {
        require_once ROOT.'/vendor/autoload.php';

        ORM::configure(
            array(
                'connection_string' => 'mysql:host=127.0.0.1;dbname=olympiad',
                'username' => 'root',
                'password' => ''
            )
        );

        try {
            $sql_db=ORM::for_table("");
        } catch (PDOException $e) {
            echo "Возникла ошибка при подключении к базе данных";
            exit();
        }
    }
}
?>
