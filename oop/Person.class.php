<?php
class Person{
    public string $firstName;
    public string $lastName;
    private  $birthDate;
    public function __construct($firstName, $lastName, $birthDate){
        $this->firstName=$firstName;
        $this->lastName=$lastName;
        $this->birthDate=$birthDate;
    }
    public function age(){
        return $this->birthDate;
    }
    
}
?>