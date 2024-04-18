<?php
class Example
{
  protected $table='123';

  function __construct()
  {
    $this->table='abc';
  }

  public function getTableName()
  {
    echo $this-> table;
    echo '<br>';
    echo $this->date;
  }
}

$obj = new Example();
$obj->getTableName();
