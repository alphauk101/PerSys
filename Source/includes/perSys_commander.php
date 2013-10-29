<?php
include_once 'defines.php';
/****
 * This Document will include all commands for connecting to the database
 */
class DatabaseAccessControl
{
    public $table_COMPANY;
    public $table_EMPLOYEE;
    public $table_USER;
    public $table_LOGS;

    function __construct() 
    {     
        $this->table_COMPANY = TABLE_COMPANY;
        $this->table_EMPLOYEE = TABLE_EMPLOYEE;
        $this->table_LOGS = TABLE_LOGS;
        $this->table_USER = TABLE_USERS;
    }
    
    function connectToDatabase()
    {
        $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DBNAME);

        if (!$link)
        {
            return false;
        }else
        {
            return $link;
        }
    }
    
    function excuteCommand($sqlCommand)
    {
        $link = $this->connectToDatabase();
        if($link != false)
        {
            $result = mysqli_query($link, $sqlCommand);            
            $this->closeConnectionToDatabase($link);
            return $result;
        }
    }


    function closeConnectionToDatabase($link)
    {
        if($link != NULL)
        {
            mysqli_close($link);
        }
    }
}

?>
