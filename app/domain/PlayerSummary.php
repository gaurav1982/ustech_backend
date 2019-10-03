<?php
namespace App\repo;
use App\Models\Players_Summary;

class PlayerSummary implements Summary{

  private $PlayerSummaryModel;

  public function __construct(Players_Summary $obj)
  {
    $this->PlayerSummaryModel = $obj;
  }

  public function getSummary($Player_id)
  {
    return $this->PlayerSummaryModel->getPlayerSummary($Player_id);
  }


}

?>
