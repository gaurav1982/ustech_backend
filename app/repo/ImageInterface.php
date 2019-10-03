<?php
namespace App\repo;

interface ImageInterface {

  public  function create(array $attributes);

  public function getall();

  public function getbyid($team_id);

  public function update($team_id, array $attributes);

  public function delete($team_id);

  public function addplayer($team_id, $player_id);

}

?>
