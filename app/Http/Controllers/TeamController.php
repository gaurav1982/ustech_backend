<?php

namespace App\repo;
namespace App\Http\Controllers;

use App\repo\TeamInterface;
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
    public function __construct(TeamInterface $team)
    {
        $this->team = $team;
    }
    public function getTeam($id = null)
    {
      $team_id = $id;
      if($team_id)
      {
        return $this->team->getbyid($team_id);
      }
      else {
        return $this->team->getall($team_id);
      }

    }

    public function createTeam(Request $request)
    {
      return $this->team->create($request->all());
    }

    public function updateTeam(Request $request,$team_id)
    {
      return $this->team->update($team_id,$request->all());
    }

    public function deleteTeam($team_id)
    {
      return $this->team->delete($team_id);
    }
}
