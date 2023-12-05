<?php
//clases en php
class user{
    protected $name;
    protected $lastName;
    private $age;
    private $id;
    private $gender;
    protected $email;
    private $phoneNumber;
    protected $role = "member";

    //constructor
    public function __construct($name,$lastName,$age,$id,$gender,$email,$phoneNumber){
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->id = $id;
        $this->gender = $gender;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
    }

    //getter
    public function getUserName($name){
        return $this->name;
    }
    public function getUserId($id){
        return $this->id;
    }

    //setter

    public function setEmail($email){
        if(strpos($email, '@') > -1){
            $this->email = $email;
        }
    }

}

class admin extends user{
    protected $role = 'admin';
}

$newUser = new user('victor', 'castellar', '22', '28499788', 'male', 'victorsextorey@gmail.com', '04162896831');
$newAdmin = new admin('luis', 'castellar', '19', '30184988', 'none', 'luishotsexy13@gmail.com', '04284685168');


var_dump($newUser);
echo "<hr>";
var_dump($newAdmin);