<?php
namespace App\repo;
use App\Models\Teams;

class Team {

  private $TeamModel;

  public function __construct(Teams $obj)
  {
    $this->TeamModel = $obj;
  }

  public function getTeam($team_id)
  {
    $team_details = array();
    if(isset($team_id))
    {
      $team_details = $this->TeamModel->getTeam($team_id);
    }
    else
    {
      $team_details = $this->TeamModel->getAllTeams();
    }

    return $team_details;
  }
  

}

?>
