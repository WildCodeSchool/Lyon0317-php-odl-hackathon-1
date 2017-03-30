<?php
namespace wcs;

class request
{
    const TABLE = "";

    private $bdd;

    private $id;
    private $keyWord;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    public function addKeyWord()
    {
        $sql = "INSERT INTO" . self::TABLE . "(keyword)
                VALUES ('$this->keyWord');";
    }

    /**
     * @return mixed
     */
    public function getKeyWord($id)
    {
        $sql = "SELECT * FROM" . self::TABLE . " WHERE id = " . $id;
        $result = $this->bdd->execSql($sql);
        return mysqli_fetch_assoc($result);
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



    /**
     * @param mixed $keyWord
     */
    public function setKeyWord($keyWord)
    {
        $this->keyWord = $keyWord;
    }



}