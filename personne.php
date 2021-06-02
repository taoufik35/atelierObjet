<?php 

class Person{
    protected string $firstname;

    protected string $lastname;

    protected int $age;



    public function __construct(array $data) {
        // $this->setFirstname($data["firstname"]);
        // $this->setLastname($data["firstname"]);
        foreach($data as $key =>$value) {

            $setter = "set" . ucfirst($key);

            if(method_exists( $this, $setter)) {

                $this->$setter($value);

            }

        }
    }



    public function setFirstname(string $firstname) {

        $this->firstname = $firstname;

    }



    public function getFirstname() {

        return $this->firstname;

    }



    public function setLastname(string $lastname) {

        $this->lastname = $lastname;

    }



    public function getLastname() {

        return $this->lastname;

    }



    public function setAge(int $age) {

        $this->age = $age;

    }



    public function getAge() {

        return $this->age;

    }
} 


?>