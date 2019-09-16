<?php
namespace App\repo;
use App\Models\Matches;


class Match
{
    private $MatchModel;
    public function __construct(Matches $obj)
    {
      $this->MatchModel = $obj;
    }


    public function getMatches($match_id)
    {
      if(isset($match_id))
      {
        $match_details = $this->MatchModel->getMatch($match_id);
      }
      else
      {
        $match_details = $this->MatchModel->getAllMatches();
      }

      return $match_details;
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
