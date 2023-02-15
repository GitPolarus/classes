<?php
require_once("./Personne.php");
class User extends Personne
{
    private string $pass;
    private string $email;

    public function __construct(string $nom, int $age, string $email, string $pass)
    {
        parent::__construct($nom, $age);
        $this->email = $email;
        $this->pass = password_hash($pass, PASSWORD_BCRYPT);
    }

    public function __toString()
    {
        return "User " . parent::__toString() . " Email " . $this->email . "\n";
    }


}