<?php
namespace App\domain;
use App\Models\Matches;
use App\repo\MatchInterface;

class Match implements MatchInterface
{
    private $MatchModel;
    public function __construct(Matches $obj)
    {
      $this->MatchModel = $obj;
    }

    public  function create(array $attributes)
    {
      return $this->MatchModel->createPlayer($attributes) ;
    }

    public function getall()
    {
      $match_details = array();
      $match_details = $this->MatchModel->getAllMatches();
      return $match_details;
    }

    public function getbyid($match_id)
    {
      $match_details = array();
      $match_details = $this->MatchModel->getMatch($match_id);
      return $match_details;
    }

    public function update($match_id, array $attributes)
    {
      return $this->MatchModel->updatePlayer($match_id, $attributes) ;
    }

    public function delete($match_id)
    {
      return $this->MatchModel->deletePlayer($match_id) ;
    }


    public function getMatchesTeamWise($team_id,$only_Advance=null)
    {
      $match_details = $this->MatchModel->getMatchTeamWise($team_id,$only_Advance);
      return $match_details;
    }
    /*
    public function get($player_id)
    {
      $player_detail = json_decode($this->getPlayers($player_id),true);
      $player_detail[0]['player_Summary'] = $this->PlayerSummary->getSummary($player_id);
      return json_encode($player_detail);

    }*/
}

?>
