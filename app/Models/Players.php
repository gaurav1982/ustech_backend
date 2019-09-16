<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Players extends Model {
    protected $table = "player";

    public function getPlayer($player_id)
    {
        return self::where('id',$player_id)->with('getTeam')->get();
    }

    public function getAllPlayers()
    {
        return self::with('getTeam')->get();
    }

    public function getTeam()
    {
        return $this->belongsTo(Teams::class,'team_id');
    }
}
