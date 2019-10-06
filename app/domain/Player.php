<?php
namespace App\domain;
use App\Models\Players;
use App\repo\PlayerInterface;
use App\repo\SummaryInterface;
use App\infra\infrainterface\FileHandlerInterface;
//use App\repo\PlayerSummary;
/**
 * Player class for complete CRUD operations on Player
 */

class Player implements PlayerInterface
{
    private $PlayerModel;
    private $objfile;
    private $PlayerSummary;

    /**
     *  Constructor of a Player class
     * @param Players $obj object of PlayerModel
     * @param FileHandlerInterface $objfile object of a Image Class.
     * @param SummaryInterface $objSummary object of a Summary Class to get Summary of a player.
     * @return object
     */
    public function __construct(Players $obj,FileHandlerInterface $objfile,SummaryInterface $objSummary)
    {
      $this->PlayerModel = $obj;
      $this->objfile = $objfile;
      $this->PlayerSummary = $objSummary;
    }

    /**
     *  Create function to create new Player
     * @param array $attributes key value pair of fields that needs to create player.
     * @return created object.
     */
    public  function create(array $attributes)
    {
      return $this->PlayerModel->createPlayer($attributes) ;
    }

    /**
     *  getall function to get details of all players
     * @return object of all the players
     */
    public function getall()
    {
       $player_details = array();
       $player_details = $this->PlayerModel->getAllPlayers();
       return $player_details;
    }

    /**
     *  getbyid function to get details of a particular player
     * @param string $player_id id of a player
     * @return object of a players
     */
    public function getbyid($player_id)
    {
      $player_details = array();
      $player_details = $this->PlayerModel->getPlayer($player_id);
      return $player_details;
    }

    /**
     *  update function to update particular attribute of a player
     * @param string $player_id id of a player
     * @param array $attributes key value pair of fields that needs to update player.
     * @return object of a players
     */
    public function update($player_id, array $attributes)
    {
      return $this->PlayerModel->updatePlayer($player_id, $attributes) ;
    }

    /**
     *  delete function to delete particular player
     * @param string $player_id id of a player
     * @return success
     */
    public function delete($player_id)
    {
      return $this->PlayerModel->deletePlayer($player_id) ;
    }

    /**
     *  getbyid function to get details of a particular player
     * @param string $player_id id of a player
     * @return object of a players
     */
    public function uploadimage($objImage, $player_id)
    {
      $name = $this->objfile->upload($objImage);
      $url = "http://ustech.localhost.com/img/$name";
      $this->update($player_id,array('imageuri'=>$url));
      return array("success");
    }

    /**
     *  getPlayerHistory function to get details of summary of a player
     * @param string $player_id id of a player
     * @return object of a player with summary
     */
    public function getPlayerHistory($player_id)
    {
      $player_detail = json_decode($this->getbyid($player_id),true);
      $player_detail[0]['player_Summary'] = $this->PlayerSummary->getSummary($player_id);
      return json_encode($player_detail);

    }
}

?>
