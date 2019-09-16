<?php

namespace App\repo;
namespace App\Http\Controllers;

use App\repo\Player;
use Illuminate\Http\Request;


    class PlayerController extends Controller
    {
        private $player;
        /**
    	 * Get Player Detail
    	 *
    	 *
    	 */
        public function __construct(Player $player)
        {
            $this->player = $player;
        }

        public function getPlayer($id = null)
        {
          $player_id = $id;
          return $this->player->getPlayers($player_id);
        }

        /**
    	 * Get History of Each Player
    	 *
    	 *
    	 */
        public function getPlayerHistory($id)
        {
          $player_id = $id;
          return $this->player->getPlayerHistory($player_id);
        }
    }

?>
