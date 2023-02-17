<?php
require_once("./IOnOf.php");
abstract class Vehicule implements IOnOf
{
    protected string $color;

    public abstract function info();

}