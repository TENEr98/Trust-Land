<?php
class Encryption
{
  public $password = "";

  function __construct($pass)
  {
    $this->password = $pass;
  }

  function encrypt()
  {
    $this->password = password_hash($this->password, PASSWORD_DEFAULT);
  }
}