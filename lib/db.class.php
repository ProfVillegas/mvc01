//db.class.php
<?php
class DB{
    protected $connection;

        public function __construct($host,$usuario,$psw,$dbnombre){
            $this->connection= new mysqli($host,$usuario,$psw,$dbnombre);
            $this->connection->set_charset("utf8");
        }

}