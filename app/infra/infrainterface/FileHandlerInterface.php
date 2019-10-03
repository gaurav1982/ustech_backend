<?php
namespace App\infra\infrainterface;

interface FileHandlerInterface {

  public  function upload();

  public function delete();

  public function validation();

  public function setuploadtype();

  public function rename();

}

?>
