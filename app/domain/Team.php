<?php
namespace App\domain;
use App\Models\Teams;
use App\repo\TeamInterface;
use App\repo\PlayerInterface;

class Team implements TeamInterface{

  private $TeamModel;
  private $objPlayer;
  public function __construct(Teams $obj, PlayerInterface $objPlayer)
  {
    $this->TeamModel = $obj;
    $this->objPlayer = $objPlayer;
  }
  public  function create(array $attributes)
  {
    return $this->TeamModel->createTeam($attributes) ;
  }

  public function getall()
  {
    $team_details = array();
    $team_details = $this->TeamModel->getAllTeams();
    return $team_details;
  }

  public function getbyid($team_id)
  {
    $team_details = array();
    $team_details = $this->TeamModel->getTeam($team_id);
    return $team_details;

  }

  public function update($team_id, array $attributes)
  {
    return $this->TeamModel->updateTeam($team_id, $attributes) ;
  }

  public function delete($team_id)
  {
    return $this->TeamModel->deleteTeam($team_id) ;
  }

  public function addplayer($team_id, $player_id)
  {
    return $this->objPlayer->update($player_id,array('team_id'=>$team_id));

  }


}

?>
