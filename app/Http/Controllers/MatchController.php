<?php

namespace App\repo;
namespace App\Http\Controllers;

use App\repo\MatchInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class MatchController extends Controller
{
  private $match;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(MatchInterface $match)
    {
        $this->match = $match;
    }

    public function getMatch($id = null) {
      $match_id = $id;
      if($match_id)
      {
        return $this->match->getbyid($match_id);
      }
      else {
        return $this->match->getall($match_id);
      }
    }

    /**
   * Get Match of Each Team
   *
   *
   */
    public function getMatchTeamWise($id = null) {
      $teamid = $id;
      return $this->match->getMatchesTeamWise($teamid,0); //Matches that are scheduled

    }

    public function createMatch(Request $request)
    {
      return $this->match->create($request->all());
    }

    public function updateMatch(Request $request,$team_id)
    {
      return $this->match->update($team_id,$request->all());
    }

    public function deleteMatch($team_id)
    {
      return $this->match->delete($team_id);
    }
    /**
   * Get Fixture of Each Team
   *
   *
   */
    public function getFixtureTeamWise($id = null) {
      $teamid = $id;
       return $this->match->getMatchesTeamWise($teamid,1); //Matches that are scheduled
    }

    public function setTeamPlayer($teamid, $playerid) {

    }

    // public function



    //
}
