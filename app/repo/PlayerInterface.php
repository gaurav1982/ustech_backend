<?php
namespace App\repo;


/**
 *
 */

interface PlayerInterface
{
    public  function create(array $attributes);

    public function getall();

    public function getbyid($playerid);

    public function update($playerid, array $attributes);

    public function delete($playerid);

    public function getPlayerHistory($playerid);
}

?>
