<?php

function _custom_ptbr_date_format($str) {

  if ($str == '0000-00-00 00:00:00') {
    return NULL;
  }

  $date_time = explode(' ', $str);
  $date = explode('-', $date_time[0]);

  return $date[2] . '/' . $date[1] . '/' . $date[0] . ' ' . $date_time[1];

}

function _custom_text_days() {
  return array(
  'Mon' => 'seg',
  'Tue' => 'ter',
  'Wed' => 'qua',
  'Thu' => 'qui',
  'Fri' => 'sex',
  'Sat' => 'sab',
  'Sun' => 'dom'
  );
}

function _custom_brazilian_week_day($day = NULL) {
  $days = array(
  'seg' => 'Segunda-feira',
  'ter' => 'Terça-feira',
  'qua' => 'Quarta-feira',
  'qui' => 'Quinta-feira',
  'sex' => 'Sexta-feira',
  'sab' => 'Sábado',
  'dom' => 'Domingo'
  );
  return $days[$day];
}

function _custom_text_day($text_day_abbr) {
  $days = _custom_text_days();
  return $days[$text_day_abbr];
}