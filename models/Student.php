<?php
class Student
{

    private $id;
    private $name;
    private $firstname;
    private $birthdate;

    public function __construct() { //$id='', $name='', $firstname='', ,$birthdate='')
//        $this->id = $id;
//        $this->name = $name;
//        $this->firstname = $firstname;
//        $this->birthdate = $birthdate;
    }

    /**
     * @return mixed|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed|string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed|string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed|string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed|string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed|string
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * @param mixed|string $birthdate
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }

    public static function getList($dbc)
    {
        $query = ("SELECT * FROM student ORDER BY name");
        $aListStudent = $dbc->classlist($query, PDO::FETCH_CLASS, __CLASS__);
//        Avant le passage de la method générique
//        $reponse = $dbc->query($query);
//        $students = $reponse->fetchAll(PDO::FETCH_ASSOC);
//        $aListStudent = array();
//        foreach ($students as $student):
//            $oStudents = new Student($student['id'],$student['name'],$student['firstname'],$student['birthdate']);
//            array_push($aListStudent, $oStudents);
//        endforeach;
        return $aListStudent;

    }

    public static function getStudentById($dbc, $id)
    {
        $query = ('SELECT * FROM student WHERE id = :id');
        $aBindParam = array(':id' => $id);
        $student = $dbc->select($query, $aBindParam, __CLASS__);
//        Avant le passage de la method générique dans Database
//        $sth = $dbc->prepare($query);
//        $sth->bindparam(':id', $id);
//        $sth->execute();
//        $student = $sth->fetch();
//
//        $this->id = $student['id'];
//        $this->name = $student['name'];
//        $this->firstname = $student['firstname'];
//        $this->birthdate = $student['birthdate'];
        return $student;
    }

    public static function addStudent($dbc, $name, $firstname, $birthdate)
    {
        $query = ('INSERT INTO student (id, name, firstname, birthdate) VALUES (NULL, :name, :firstname, :birthdate)');
        $aBindParam = array('name' => $name, 'firstname' => $firstname, 'birthdate' => $birthdate);
        $student = $dbc->update($query, $aBindParam, __CLASS__);
        return $student;
    }

    public static function updateStudent($dbc, $id, $name, $firstname, $birthdate)
    {

        $query = 'UPDATE student
SET name = :name,
    firstname = :firstname,
    birthdate = :birthdate
WHERE id = :id';
        $aBindParam = array(':id' => $id, ':name' => $name, ':firstname' => $firstname, ':birthdate' => $birthdate);
        $student = $dbc->update($query, $aBindParam, __CLASS__);
        return $student;
    }

    public static function getDeleted($dbc, $id) {
        $query = 'DELETE FROM student WHERE id = :id';
        $aBindParam = array('id'=>$id);
        $dbc->update($query, $aBindParam, __CLASS__);
    }

}