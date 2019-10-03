<?php
namespace App\domain;
use App\Models\Players;
use App\repo\PlayerInterface;
use App\infra\infrainterface\FileHandlerInterface;
//use App\repo\PlayerSummary;


class Player implements PlayerInterface
{
    private $PlayerModel;
    private $objfile;
    //private $PlayerSummary;

    public function __construct(Players $obj,FileHandlerInterface $objfile)
    {
      $this->PlayerModel = $obj;
      $this->objfile = $objfile;
      //$this->PlayerSummary = $objSummary;
    }

    public  function create(array $attributes)
    {
      return $this->PlayerModel->createPlayer($attributes) ;
    }

    public function getall()
    {
       $player_details = array();
       $player_details = $this->PlayerModel->getAllPlayers();
       return $player_details;
    }

    public function getbyid($player_id)
    {
      $player_details = array();
      $player_details = $this->PlayerModel->getPlayer($player_id);
      return $player_details;
    }

    public function getHistory($player_id)
    {
      return true;
    }

    public function update($player_id, array $attributes)
    {
      return $this->PlayerModel->updatePlayer($player_id, $attributes) ;
    }

    public function delete($player_id)
    {
      return $this->PlayerModel->deletePlayer($player_id) ;
    }

    public function uploadimage($player_id)
    {
      $this->objfile->upload();
      return true;
    }


    public function getPlayerHistory($player_id)
    {
      $player_detail = json_decode($this->getPlayers($player_id),true);
      $player_detail[0]['player_Summary'] = $this->PlayerSummary->getSummary($player_id);
      return json_encode($player_detail);

    }
}

?>
