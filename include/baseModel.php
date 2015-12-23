<?php

class BaseModel {
    const DEFAULT_DATABASE = 'form';
    public function  __construct() {
        $this->_connect();
    }
    private function _createBd(){
	$qs = "CREATE DATABASE IF NOT EXISTS form CHARACTER SET utf8 COLLATE utf8_general_ci;";
		$new = mysql_query($qs) or die("Invalid query: " . mysql_error());
    }
    private function _connect() {
        $dbHost = "localhost";
        $dbUser = "root";
        $dbPassword = "";
        $dbConnect = mysql_connect($dbHost, $dbUser, $dbPassword);
        if(!$dbConnect)
        {
                echo("Зв'язок не установлено");
                exit();
        }
        $dbSelect = mysql_select_db(self::DEFAULT_DATABASE);
        if(!$dbSelect)
        {
                echo("База даних не знайдена");
                exit();
        }
        mysql_query("SET  character_set_database  =  utf8");
        mysql_query("SET  NAMES  utf8");
        mysql_query("use ".self::DEFAULT_DATABASE);
    }
    
        public static $count = 0;
	public $id;
	public $DataTime;
	public $surname;
	public $name;
	public $fathername;
	public $email;
	public $mobtel;
	public $cont;
        public $img;

	

	
    private function _createTable(){
	$qs = "CREATE TABLE IF NOT EXISTS
		`regfoland` (
        `id` INT(11) NOT NULL AUTO_INCREMENT,
        `DataTime` datetime NOT NULL,
        `surname` CHAR(150) NOT NULL,
        `name` CHAR(150) NOT NULL,
        `fathername` CHAR(150) NOT NULL,
        `email` CHAR(150) NOT NULL,
        `mobtel` CHAR(25) NOT NULL,
        `cont` VARCHAR(1024) NOT NULL,
        `img` CHAR(150) NOT NULL,
        PRIMARY KEY(`id`)
        )ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$new = mysql_query($qs) or die("Invalid query: " . mysql_error());
    }
	
    public function clearDate($data){
        return trim(strip_tags($data));
    }
	
    public function setTableLand(){
            $this->_createBd();
            $this->_createTable();
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                     $id = $this->count++;
                     $DataTime = date('Y-m-d H:i:s');
                     $surname = $this->clearDate($_POST['surname']);
                     $name = $this->clearDate($_POST['name']);
                     $fathername = $this->clearDate($_POST['fathername']);
                     $email = $this->clearDate($_POST['email']);
                     $mobtel = $this->clearDate($_POST['mobtel']);
                     $cont = $this->clearDate($_POST['cont']);
                     $img = $this->clearDate($_POST['img']);
            }
        $qs = "INSERT INTO regfoland (ID, DataTime, surname, name, fathername, email, mobtel, cont, img) 
                        VALUES ('$id','$DataTime','$surname','$name','$fathername','$email','$mobtel','$cont','$img')";
        mysql_query($qs) or die("Invalid query: " . mysql_error());
            return mysql_insert_id();
    }
        
    public function setData(){
        $this->_createBd();
        $this->_createTable();
        $qs = "SELECT ID, surname, name, fathername, email, mobtel, cont, img FROM regfoland";
        $result = mysql_query($qs) or die("Invalid query: " . mysql_error());

        for ($i = 0; $i < mysql_num_rows($result); $i++){
            $rows[] = mysql_fetch_array($result, MYSQL_ASSOC);
        }
        mysql_free_result($result);
        return $rows;
    }
    public function setAjax() {
	$qs = "SELECT ID, surname, name, fathername, email, mobtel, cont, img FROM regfoland";
       	$result = mysql_query($qs) or die("Invalid query: " . mysql_error());
		echo'';
		while ($array = mysql_fetch_assoc($result)):?>			

						<div class="media">
							<div class="media-left media-middle">
								<a href="#">
									<img class="media-object" src="<?= '/img/avatar/'.$array['img']?>" alt="аватарка">
								</a>
							</div>
							<div class="media-body">
								<h3 class="media-heading"><?= $array['surname'].' '.$array['name'].' '.$array['fathername'];?></h3>
								<p>
									<label class="control-label">e-mail: </label> <?= $array['email'];?><br/>
									<label class="control-label">тел.: </label><?= $array['mobtel'];?>
								</p>
							</div>
							<div class="media" id="media"><?= $array['cont'];?></div>
						</div><hr/>
	
		<?php endwhile;
		mysql_free_result($result);
    }
}
