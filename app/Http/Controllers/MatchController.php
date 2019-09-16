<?php

namespace App\repo;
namespace App\Http\Controllers;

use App\repo\Match;
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
    public function __construct(Match $match)
    {
        $this->match = $match;
    }

    public function getMatch($id = null) {
      $matchid = $id;
       return $this->match->getMatches($matchid);
    }

    /**
   * Get Match of Each Team
   *
   *
   */
    public function getMatchTeamWise($id = null) {
      $teamid = $id;
       return $this->match->getMatchesTeamWise($teamid);
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
