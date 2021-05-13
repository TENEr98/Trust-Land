<?php

namespace utils;

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

  function verify($pass, $pass_hash)
  {
    return password_verify($pass,$pass_hash);
  }
}