<?php

namespace App\repo;
namespace App\Http\Controllers;

use App\repo\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class TeamController extends Controller
{
  private $team;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Team $team)
    {
        $this->team = $team;
    }
    /**
	 * Get List of Teams or Single team
	 *
	 * 
	 */
    public function getTeam($id = null) {
       $team_id = $id;
       return $this->team->getTeam($team_id);
    }

    public function setTeamPlayer($teamid, $playerid) {

    }

    // public function



    //
}
