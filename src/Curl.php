<?php
/**
 * Created by PhpStorm.
 * User: diesel
 * Date: 31/03/17
 * Time: 03:39
 */

namespace wcs;

class Curl
{
    private $var;
    private $year;
    private $type;
    private $url = "http://omdbapi.com/?";

    /**
     * @return mixed
     */
    public function getVar()
    {
        return $this->var;
    }

    /**
     * @param mixed $var
     */
    public function setVar($var)
    {
        $this->var = $var;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    public function DisplayCurl()
    {
        $url = $this->url . "s=" . $this->var . "&type=" . $this->type . "&y=" . $this->year;

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_COOKIESESSION, true);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($curl, CURLOPT_URL, $url);

        $return = curl_exec($curl);

        curl_close($curl);

        $result = json_decode($return, true);

        return $result->Search;
    }
}
