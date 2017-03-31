<?php
namespace wcs;

class AddKeywordManager
{
    const TABLE = "keyword";

    private $bdd;

    private $id;
    private $keyWord;
    private $url;
    private $title;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    public function addKeyWord()
    {
        $sql = "INSERT INTO" . self::TABLE . "(keyword, url)
                VALUES ('$this->keyWord', '$this->url);";
        $this->bdd->execSql($sql);
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

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

}