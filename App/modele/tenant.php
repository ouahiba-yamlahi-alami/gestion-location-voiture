<?php
namespace App\modele;
use PDO;

class tenant extends modelClass
{
    /**
     * @var
     */
   private $cin;
    /**
     * @var
     */
   private $firstname;
    /**
     * @var
     */
   private $lastname;

    /**
     * @var
     */
    private $birthdate;
   private $driving_number;

    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     * @return tenant
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }
    /**
     * @param mixed $firstname
     * @return tenant
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }
    /**
     * @param mixed $lastname
     * @return tenant
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }
    /**
     * @param mixed $birthdate
     * @return tenant
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getDriving_number()
    {
        return $this->driving_number;
    }
    /**
     * @param mixed $driving_number
     * @return tenant
     */
    public function setDriving_number($driving_number)
    {
        $this->driving_number = $driving_number;
        return $this;
    }
    public function latest(){
        return  static::database()->query("SELECT * FROM tenant  ")->fetchAll(PDO::FETCH_CLASS, __CLASS__);
    }
    public function create()
    {
        $sqlState= static::database()->prepare("INSERT INTO tenant(cin,firstname,lastname,birthdate,driving_number) VALUES(?,?,?,?,?)");
        return $sqlState->execute([
            $this->cin,
            $this->firstname,
            $this->lastname,
            $this->birthdate,
            $this->driving_number
        ]);
    }
    public static function view($id)
    {
        $sqlState= static::database()->prepare("SELECT * FROM tenant  WHERE id=?");
        $sqlState->execute([$id]);
        return current($sqlState->fetchAll(PDO::FETCH_CLASS,__CLASS__));
    }

}