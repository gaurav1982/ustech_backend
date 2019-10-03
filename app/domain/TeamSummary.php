<?php
namespace App\repo;
use App\Models\Teams_Summary;

class TeamSummary implements Summary{

  private $TeamSummaryModel;

  public function __construct(Teams_Summary $obj)
  {
    $this->TeamSummaryModel = $obj;
  }

  public function getSummary($team_id)
  {


    return $team_details;
  }


}

?>
