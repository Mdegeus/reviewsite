<?php


class Review
{
    public $id;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}