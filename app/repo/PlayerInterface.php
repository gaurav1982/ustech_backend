<?php
namespace App\repo;


/** Player Interface to communicate with all outside entities.
 *
 */

interface PlayerInterface
{
    /**
     *  Create function to create new Player
     * @param array $attributes key value pair of fields that needs to create player.
     * @return created object.
     */
    public  function create(array $attributes);

    /**
     *  getall function to get details of all players
     * @return object of all the players
     */
    public function getall();

    /**
     *  getbyid function to get details of a particular player
     * @param string $player_id id of a player
     * @return object of a players
     */
    public function getbyid($playerid);

    /**
     *  update function to update particular attribute of a player
     * @param string $player_id id of a player
     * @param array $attributes key value pair of fields that needs to update player.
     * @return object of a players
     */
    public function update($playerid, array $attributes);

    /**
     *  delete function to delete particular player
     * @param string $player_id id of a player
     * @return success
     */
    public function delete($playerid);

    /**
     *  getPlayerHistory function to get details of summary of a player
     * @param string $player_id id of a player
     * @return object of a player with summary
     */
    public function getPlayerHistory($playerid);
}

?>
