<?php


class Categorie
{
    public $id;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}