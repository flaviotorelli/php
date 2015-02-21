<?php

// Preço no formato Real (R$ 0,00)
function _custom_format_price($number) {
  return  'R$ ' . number_format($number, 2, ',', '.');
}
