<?php
class Database extends PDO
{

    private $servername;
    private $username;
    private $password;
    private $bddname;

    public function __construct()
    {

        $this->servername = 'localhost';
        $this->username = 'root';
        $this->password = '********';
        $this->bddname = 'coursphp';

        parent::__construct('mysql:host=' . $this->servername . ';dbname=' . $this->bddname, $this->username, $this->password);
        /*try{

            $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connexion réussie";

        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
*/

    }

    public function select($sql, $array = array(), $fetchmode = PDO::FETCH_CLASS, $classname = '')
    {
        $sth = $this->prepare($sql);

        foreach ($array as $key => $value):
            $sth->bindValue("$key", $value);
        endforeach;
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, $fetchmode);

        return $sth->fetch();
//        if(!empty($fetchMode) AND $fetchMode==PDO::FETCH_CLASS)
//            $sth->setFetchMode(PDO::FETCH_CLASS, $className);
//
//        return $sth->fetch();
    }

    public function update($sql, $array = array())
    {
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value):
            $sth->bindValue("$key", $value);
        endforeach;
        $sth->execute();
    }

    public function classlist($sql, $fetchmode, $classname =''){

        $sth = $this->prepare($sql);
        $sth->execute();

        return $sth->fetchAll($fetchmode, $classname);

    }

}




