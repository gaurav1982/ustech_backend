<?php

namespace App\repo;
namespace App\Http\Controllers;

use App\repo\PlayerInterface;
use Illuminate\Http\Request;


    class PlayerController extends Controller
    {
        private $player;
        /**
    	 * Get Player Detail
    	 *
    	 *
    	 */
        public function __construct(PlayerInterface $player)
        {
            $this->player = $player;
        }

        public function getPlayer($id = null)
        {
          $player_id = $id;
          if($player_id)
          {
            return $this->player->getbyid($player_id);
          }
          else {
            return $this->player->getall($player_id);
          }

        }

        public function createPlayer(Request $request)
        {
          return $this->player->create($request->all());
        }

        public function updatePlayer(Request $request,$player_id)
        {
          return $this->player->update($player_id,$request->all());
        }

        public function deletePlayer($player_id)
        {
          return $this->player->delete($player_id);
        }

        public function uploadPlayerImage($player_id)
        {
          return $this->player->uploadimage($player_id);
        }

        /**
    	 * Get History of Each Player
    	 *
    	 *

        public function getPlayerHistory($id)
        {
          $player_id = $id;
          return $this->player->getPlayerHistory($player_id);
        }
        */
    }

?>
