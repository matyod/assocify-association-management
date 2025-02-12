<?php

namespace Core;
use DateTime;

class DateTimeCustom extends DateTime
{
  // public function __construct($datetime){
  //   parent::__construct($datetime);
  // }

  // TODO: create array based on format and return the value

  public function formatDateTime_dMYHiS()
  {
    return $this->format("d/m/Y H:i:s");
  }

  /**
   * Format the date into 2 digits day, 2 digits month, 4 digits year. For example, 01/01/2000
   * @return string
   * @author matyod
   */
  public function formatDate_dmY()
  {
    return $this->format("d/m/Y");
  }

  /**
   * Format the date into 3 letters textual representation of the day. For example, Mon
   * @return string
   * @author matyod
   */
  public function formatDay_D()
  {
    return $this->format("D");
  }

    /**
   * Format the date into full letters textual representation of the day. For example, Monday
   * @return string
   * @author matyod
   */
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
  
  /**
   * Format the date into 2 digits hour and 2 digits minute in 12-hour format with uppercase Ante meridiem/Post meridiem. For example, 10:00 AM
   * @return string
   * @author matyod
   */
  public function formatTime_12HrsMeridiem()
  {
    return $this->format("h:i A");
  }

  public function formatTime_24Hrs()
  {
    return $this->format("H:i");
  }
}