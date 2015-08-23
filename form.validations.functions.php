<?php

function _custom_is_valid_phone_number($string) {

  $numbers = preg_replace("/[^0-9]/","",$string);

  if (strlen($numbers) < 10) {
    return FALSE;
  }

  return TRUE;

}

function _custom_is_valid_date($string) {
  $date = explode('/', $string);
  return checkdate($date[1], $date[0], $date[2]);
}

function _custom_is_valid_cep($string) {

  $numbers = preg_replace("/[^0-9]/","",$string);

  if (strlen($numbers) < 8) {
    return FALSE;
  }

  return TRUE;

}

function validaCNPJ($cnpj) {

  if (strlen($cnpj) <> 14)
    return false; 

  $soma = 0;
  
  $soma += ($cnpj[0] * 5);
  $soma += ($cnpj[1] * 4);
  $soma += ($cnpj[2] * 3);
  $soma += ($cnpj[3] * 2);
  $soma += ($cnpj[4] * 9); 
  $soma += ($cnpj[5] * 8);
  $soma += ($cnpj[6] * 7);
  $soma += ($cnpj[7] * 6);
  $soma += ($cnpj[8] * 5);
  $soma += ($cnpj[9] * 4);
  $soma += ($cnpj[10] * 3);
  $soma += ($cnpj[11] * 2); 

  $d1 = $soma % 11; 
  $d1 = $d1 < 2 ? 0 : 11 - $d1; 

  $soma = 0;
  $soma += ($cnpj[0] * 6); 
  $soma += ($cnpj[1] * 5);
  $soma += ($cnpj[2] * 4);
  $soma += ($cnpj[3] * 3);
  $soma += ($cnpj[4] * 2);
  $soma += ($cnpj[5] * 9);
  $soma += ($cnpj[6] * 8);
  $soma += ($cnpj[7] * 7);
  $soma += ($cnpj[8] * 6);
  $soma += ($cnpj[9] * 5);
  $soma += ($cnpj[10] * 4);
  $soma += ($cnpj[11] * 3);
  $soma += ($cnpj[12] * 2); 
  
  
  $d2 = $soma % 11; 
  $d2 = $d2 < 2 ? 0 : 11 - $d2; 
  
  if ($cnpj[12] == $d1 && $cnpj[13] == $d2) {
    return true;
  }
  else {
    return false;
  }
} 

function validaCPF($cpf = null) {
 
  // Verifica se um número foi informado
  if(empty($cpf)) {
      return false;
  }
   
  // Verifica se o numero de digitos informados é igual a 11 
  if (strlen($cpf) != 11) {
      return false;
  }
  // Verifica se nenhuma das sequências invalidas abaixo 
  // foi digitada. Caso afirmativo, retorna falso
  else if ($cpf == '00000000000' || 
      $cpf == '11111111111' || 
      $cpf == '22222222222' || 
      $cpf == '33333333333' || 
      $cpf == '44444444444' || 
      $cpf == '55555555555' || 
      $cpf == '66666666666' || 
      $cpf == '77777777777' || 
      $cpf == '88888888888' || 
      $cpf == '99999999999') {
      return false;
   // Calcula os digitos verificadores para verificar se o
   // CPF é válido
   } else {   
       
      for ($t = 9; $t < 11; $t++) {
           
          for ($d = 0, $c = 0; $c < $t; $c++) {
              $d += $cpf{$c} * (($t + 1) - $c);
          }
          $d = ((10 * $d) % 11) % 10;
          if ($cpf{$c} != $d) {
              return false;
          }
      }

      return true;
  }
}
