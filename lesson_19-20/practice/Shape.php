<?
abstract class Shape
{
  public $length;

  function __construct($length)
  {
    $this->length = $length;
  }

  public function getPerimeter()
  {
  }

  public function getArea()
  {
  }
}

class Rectangle extends Shape
{
  public $length2;

  public function __construct($length, $length2)
  {
    $this->length = $length;
    $this->length2 = $length2;
  }

  public function getPerimeter()
  {
    return ($this->length + $this->length2) * 2;
  }

  public function getArea()
  {
    return $this->length * $this->length2;
  }
}

class Circle extends Shape
{
  public function getPerimeter()
  {
    return 2 * M_PI * $this->length;
  }

  public function getArea()
  {
    return M_PI * ($this->length) ** 2;
  }
}

class Triangle extends Shape
{
  public $length2;
  public $length3;

  public function __construct($length, $length2, $length3)
  {
    $this->length = $length;
    $this->length2 = $length2;
    $this->length3 = $length3;
  }

  public function getPerimeter()
  {
    return $this->length + $this->length2 + $this->length3;
  }

  public function getArea() // формула Герона
  {
    $p = Triangle::getPerimeter() / 2;
    return ($p * ($p - $this->length) * ($p - $this->length2) * ($p - $this->length3)) ** 0.5;
  }
}

interface IGetPerimeter
{
  function getPerimeter();
}

interface IGetArea
{
  function getArea();
}

class Rect implements IGetPerimeter, IGetArea
{
  public $length;
  public $length2;

  public function __construct($length, $length2)
  {
    $this->length = $length;
    $this->length2 = $length2;
  }

  public function getPerimeter()
  {
    return ($this->length + $this->length2) * 2;
  }

  public function getArea()
  {
    return $this->length * $this->length2;
  }
}

class Circ implements IGetPerimeter, IGetArea
{
  public $length;

  public function __construct($length)
  {
    $this->length = $length;
  }

  public function getPerimeter()
  {
    return 2 * M_PI * $this->length;
  }

  public function getArea()
  {
    return M_PI * ($this->length) ** 2;
  }
}

class Triang implements IGetPerimeter, IGetArea
{
  public $length;
  public $length2;
  public $length3;

  public function __construct($length, $length2, $length3)
  {
    $this->length = $length;
    $this->length2 = $length2;
    $this->length3 = $length3;
  }

  public function getPerimeter()
  {
    return $this->length + $this->length2 + $this->length3;
  }

  public function getArea() // формула Герона
  {
    $p = Triang::getPerimeter() / 2;
    return ($p * ($p - $this->length) * ($p - $this->length2) * ($p - $this->length3)) ** 0.5;
  }
}
