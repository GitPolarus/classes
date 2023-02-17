<?php
require_once("./IOnOf.php");
class Light implements IOnOf
{

    /**
     * @return mixed
     */
    public function on()
    {
        echo "The Light is On";
    }

    /**
     * @return mixed
     */
    public function of()
    {
        echo "The Light is Of";
    }
}