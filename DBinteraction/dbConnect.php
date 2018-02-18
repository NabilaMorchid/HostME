<?php
/*fisrt we have to include the dbConfig.php*/
require_once 'dbConfig.php';

/**
* this class is about establishing connectivity with the database
*/
class dbConnect 
{

	/*the connect() function*/
	public function connect()
	{
		try {
			$cn = new PDO("mysql: host=HOST ; dbname=hostMe" , USER , PASSWORD);
                        $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        return $cn;
		} catch (Exception $e) {
			echo "there was an exception while trying to connect".$e->getMessage();
		}
	}
        public function close() {
            //$cn = null;
        }
}