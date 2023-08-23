<?php

namespace App\modele;

use PDO;

class car extends modelClass
{
    /**
     * @var
     */
     private $matricule;
    /**
     * @var
     */
     private $modele_date;
    /**
     * @var
     */
     private $marque;
    /**
     * @var
     */
     private $model;

    /**
     * @return mixed
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * @param mixed $matricule
     * @return car
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
        return $this;
    }

    /**
     *
     */
    public function getModele_Date()
    {
        return $this->modele_date;
    }

    /**
     * @param mixed $modele_date
     * @return car
     */
    public function setModele_Date($modele_date)
    {
        $this->modele_date = $modele_date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     * @return car
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     * @return car
     */
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    public function latest(){
        return  static::database()->query("SELECT * FROM car order by id DESC ")->fetchAll(PDO::FETCH_CLASS, __CLASS__);
    }

    public function create()
    {

        $sqlState= static::database()->prepare("INSERT INTO car(matricule,modele_date,marque,model) VALUES(?,?,?,?)");
        return $sqlState->execute([
            $this->matricule,
            $this->modele_date,
            $this->marque,
            $this->model
        ]);
    }
    public static function view($id)
    {
        $sqlState= static::database()->prepare("SELECT * FROM car  WHERE id=?");
        $sqlState->execute([$id]);
        return current($sqlState->fetchAll(PDO::FETCH_CLASS,__CLASS__));
    }

}