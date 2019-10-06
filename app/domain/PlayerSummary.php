<?php
namespace App\domain;
use App\Models\Players_Summary;
use App\repo\SummaryInterface;
class PlayerSummary implements SummaryInterface{

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
