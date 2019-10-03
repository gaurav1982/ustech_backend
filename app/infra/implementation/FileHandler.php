<?php
namespace App\infra\implementation;
use App\infra\infrainterface\FileHandlerInterface;
//use App\repo\PlayerSummary;

class FileHandler implements FileHandlerInterface
{
    private $arrFileType;

    public function __construct($file_type)
    {
      $this->arrFileType = explode(',',$file_type);
    }

    public  function upload()
    {
      return 'I am done';
    }

    public function delete()
    {
      return true;
    }

    public function validation()
    {
      return true;
    }

    public function setuploadtype()
    {
      return true;
    }

    public function rename()
    {
      return true;
    }


}

?>
