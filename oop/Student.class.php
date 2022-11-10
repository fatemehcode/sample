<?php
class Student extends Person{
    public float $grade;
    public function __construct($firstName, $lastName, $birthDate,$grade){
        parent::__construct($firstName,$lastName,$birthDate);
        $this->grade=$grade;

    }
}
?>