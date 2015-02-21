<?php

/**
 * Gera um novo código (único) de cupom.
 */
function _cupons_create_unique_number($lid) {
  
  // Gera um número randômico mesclando com o ID do lote.
  $offset = (8 - strlen($lid));

  $x = str_pad(9, ($offset), '9');

  $randon_id = str_pad(mt_rand(0, $x), $offset, '0', STR_PAD_LEFT);
  
  $uniqid = $randon_id . $lid;
  
  return $uniqid;

}
