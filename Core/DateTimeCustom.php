<?php

namespace Core;
use DateTime;

class DateTimeCustom extends DateTime
{
  // public function __construct($datetime){
  //   parent::__construct($datetime);
  // }

  public function formatDateTime_dMYHiS()
  {
    return $this->format("d/m/Y H:i:s");
  }
  
  public function formatDate_dmY()
  {
    return $this->format("d/m/Y");
  }

  public function formatDay_D()
  {
    return $this->format("D");
  }

  public function formatDay_l()
  {
    return $this->format("l");
  }

  public function formatDate_DdmY()
  {
    return $this->format("D, d/m/Y");
  }

  public function formatDate_ldmY()
  {
    return $this->format("l, d/m/Y");
  }

  public function formatTime_12HrsMeridiem()
  {
    return $this->format("h:i A");
  }

  public function formatTime_24Hrs()
  {
    return $this->format("H:i");
  }
}