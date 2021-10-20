<?php
class Subject
{
    private $id;
    private $name;
    private $description;
    private $duration;
    private $coefficient;

    /**
     * @param $name
     * @param $description
     * @param $duration
     * @param $coefficient
     */
    public function __construct()//$id='', $name='', $description='', $duration='', $coefficient='')
    {

        //$this->id = $id;
        //$this->name = $name;
        //$this->description = $description;
        //$this->duration = $duration;
        //$this->coefficient = $coefficient;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return strtoupper($this->name);
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getCoefficient()
    {
        return $this->coefficient;
    }

    /**
     * @param mixed $coefficient
     */
    public function setCoefficient($coefficient)
    {
        $this->coefficient = $coefficient;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public static function getListSubjects($dbc) {
        $query = ("SELECT * FROM subject ORDER BY name");
        $reponse = $dbc->classlist($query, PDO::FETCH_CLASS ,__CLASS__);
        return $reponse;

    }

    public static function getSubjectById($dbc, $id) {
        $query = ('SELECT * FROM subject WHERE id = :id');
        $aBindParam = array(':id'=>$id);
        $subject = $dbc->select($query, $aBindParam, __CLASS__);
        return $subject;
    }

    public static function getDeleted($dbc, $id) {
        $query = 'DELETE FROM subject WHERE id = :id';
        $aBindParam = array('id'=>$id);
        $dbc->update($query, $aBindParam, __CLASS__);
    }

    public static function addSubject($dbc, $name, $description, $duration, $coefficient){
        $query = 'INSERT INTO subject (id, name, description, duration, coefficient)
    VALUES (NULL, :name, :description, :duration, :coefficient)';
        $aBindParam = array(':name'=>$name,':description'=>$description,':duration'=>$duration,':coefficient'=>$coefficient);
        $subject = $dbc->update($query, $aBindParam, __CLASS__);
        return $subject;
    }

    public static function updateSubject($dbc, $id, $name, $description, $duration, $coefficient) {

        $query = 'UPDATE subject
SET name = :name,
    description = :description,
    duration = :duration,
    coefficient = :coefficient
WHERE id = :id';
        $aBindParam = array(':id'=>$id,':name'=>$name,':description'=>$description,':duration'=>$duration,':coefficient'=>$coefficient);
        $subject = $dbc->update($query, $aBindParam, __CLASS__);
        return $subject;
    }

    public function getDayAtWork() {
        $duration = round(($this->getDuration())/7);
        $message = $duration. "jour";
        if ($duration > 1 ):
            $message .="s";
        endif;
        return $message;
    }

    public function infoCoeff($subject) {
        $coef = $subject->getCoefficient();
        if ($coef <= 1):
            echo "Compétence transverse";
        elseif (($coef > 1) && ($coef < 2)):
            echo "Compétence initiale";
        elseif ($coef > 2):
            echo "Compétencce indispensable";
        endif;
    }
}