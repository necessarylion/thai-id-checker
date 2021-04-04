<?php

namespace Necessarylion;

class ThaiIdChecker {

  /**
   * @param string $idCardNumber
   * @return boolean
   */
  public static function check(String $idCardNumber): bool {
    $idCardNumber = (String) $idCardNumber;
    if (strlen($idCardNumber) !== 13) {
      return false;
    }
    $lastIndexOfCode = strlen($idCardNumber) - 1;
    $codeLastString  = $idCardNumber[$lastIndexOfCode];

    $total         = 0;
    $startingPoint = 13;

    for ($i = 0; $i < strlen($idCardNumber) - 1; $i++) {
      $total += $idCardNumber[$i] * $startingPoint;
      $startingPoint--;
    }

    $result = 11 - ($total % 11);

    $result           = (String) $result;
    $lastIndex        = strlen($result) - 1;
    $resultLastString = $result[$lastIndex];
    return $resultLastString === $codeLastString;
  }

}