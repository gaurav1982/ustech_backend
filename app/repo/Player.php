<?php
namespace App\repo;
use App\Models\Players;
use App\repo\PlayerSummary;


class Player
{
    private $PlayerModel;
    private $PlayerSummary;

    public function __construct(Players $obj, PlayerSummary $objSummary)
    {
      $this->PlayerModel = $obj;
      $this->PlayerSummary = $objSummary;
    }


    public function getPlayers($player_id)
    {
      $player_details = array();
      if(isset($player_id))
      {
        $player_details = $this->PlayerModel->getPlayer($player_id);
      }
      else
      {
        $player_details = $this->PlayerModel->getAllPlayers();
      }

      return $player_details;
    }

    public function getPlayerHistory($player_id)
    {
      $player_detail = json_decode($this->getPlayers($player_id),true);
      $player_detail[0]['player_Summary'] = $this->PlayerSummary->getSummary($player_id);
      return json_encode($player_detail);

    }
}

?>
