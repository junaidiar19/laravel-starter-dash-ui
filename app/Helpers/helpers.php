<?php

use Carbon\Carbon;

if (!function_exists('increment')) {
  /**
   * increment
   *
   * @param  mixed $str
   * @return void
   */
  function increment($data, $loop)
  {
    return $data->firstItem() + $loop->index;
  }
}

if (!function_exists('formatTanggalIndo')) {
  /**
   * formatTanggalIndo
   *
   * @param  mixed $date
   * @return void
   */
  function formatTanggalIndo($date)
  {
    $carbonDate = Carbon::parse($date);

    $format = new class($carbonDate)
    {
      private $carbonDate;

      public function __construct($carbonDate)
      {
        $this->carbonDate = $carbonDate;
      }

      public function full()
      {
        return $this->carbonDate->isoFormat('DD MMMM Y');
      }

      public function shortMonth()
      {
        return $this->carbonDate->isoFormat('DD MMM Y');
      }
    };

    return $format;
  }
}
