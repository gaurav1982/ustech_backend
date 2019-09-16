<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Players_Summary extends Model {
    protected $table = "player_summary";
    private $player_id;
    public function getPlayerSummary($player_id)
    {
        $this->player_id = $player_id;
        //$summary = array()
        $total_match =  $this->gettotalMatch();
        $total_run =  $this->gettotalRun();
        $total_six =  $this->gettotalSix();
        return array('total_match'=>$total_match,'total_run'=>$total_run,'total_six'=>$total_six
      );
        //return json_encode($summary);
    }

    private function gettotalMatch()
    {
      return self::where('player_id',$this->player_id)->groupBy('player_id')->count('match_id');
    }

    private function gettotalRun()
    {
      return self::where('player_id',$this->player_id)->groupBy('player_id')->sum('runs');
    }

    private function gettotalSix()
    {
      return self::where('player_id',$this->player_id)->groupBy('player_id')->sum('sixes');
    }

}
