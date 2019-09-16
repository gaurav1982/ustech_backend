<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model {
    protected $table = "team";


    public function getTeam($team_id)
    {
        return self::where('id',$team_id)->with('getPlayers')->get();
    }

    public function getAllTeams()
    {
        return self::with('getPlayers')->get();
    }

    public function getPlayers() 
    {
        return $this->hasMany(Players::class, 'team_id');
    }
}
