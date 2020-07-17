<?php 
	function db_connect()
	{
	    $dsn = "mysql:host=localhost;dbname=qlbanhoa;charset=utf8";
	    $opt = array(
	        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	    );
	    return new PDO($dsn,'qlbanhoa_user','zxcv1234', $opt);
	}
?>