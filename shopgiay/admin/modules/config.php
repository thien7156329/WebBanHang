<?php
	/*$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl='banhang';
	$conn=mysql_connect($tenmaychu,$tentaikhoan,$pass) or die('Ko kết nối được');	
	mysql_select_db($csdl,$conn);
	if(!$conn)
		echo"error";
	else
		echo "connect";
	class database{
		public $_dbh = '';
    	//public $_sql = '';
    	//$_cursor = NULL;        
    
    public function database() {
        $this->_dbh = new PDO("mysql:host=127.0.0.1;dbname=banhang", 'root', '');
    }
}
 
	$user = 'root';
    $password = '';
    $db = 'banhang';
    $host = '127.0.0.1';
  

    $link = mysqli_init();
    $conn = mysqli_real_connect(
       $link,
       $host,
       $user,
       $password,
       $db
       
    );
	mysqli_select_db($conn,$db);
*/

  $Db = array (
  "hostname"=>'127.0.0.1', 
  "dbname"=>'shopgiay',
  "dbuser"=>"root",
  "dbpass"=>"",
         );
   $Dbconnect = mysqli_connect($Db['hostname'],$Db['dbuser'],$Db['dbpass']) or die(mysqli_error($Dbconnect));
   $DbSelect = mysqli_select_db( $Dbconnect,$Db['dbname']) or die(mysqli_error($Dbconnect));   
?>
