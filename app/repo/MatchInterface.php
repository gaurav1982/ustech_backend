<?php
namespace App\repo;

interface MatchInterface {

  public  function create(array $attributes);

  public function getall();

  public function getbyid($match_id);

  public function update($match_id, array $attributes);

  public function delete($match_id);

}

?>
