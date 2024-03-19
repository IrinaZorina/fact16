<?
class Math
{
  static public function add($num1, $num2)
  {
    return $num1 + $num2;
  }

  static public function sub($num1, $num2)
  {
    return $num1 - $num2;
  }

  static public function multiple($num1, $num2)
  {
    return $num1 * $num2;
  }

  static public function div($num1, $num2)
  {
    return $num2 != 0 ? $num1 / $num2 : "Division by zero";
  }
}
