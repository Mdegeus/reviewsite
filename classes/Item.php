<?php


class Item
{
    public $id;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}