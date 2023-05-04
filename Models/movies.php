<?php
class Movies{

public $name;
public $country;
public $duration;

public function __construct($name, $country, $duration)
{
    $this->name = $name;
    $this->country = $country;
    $this->duration = $duration;
}





public function getInfo() {
return $this->name . ' ' . $this->country . ' ' . $this->duration;
}

}