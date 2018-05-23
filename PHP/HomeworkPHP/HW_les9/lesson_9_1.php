<?php
/*
1. Создать фигуры: Circle, Rectangle, Triangle,
у которых будут координаты. Все фигуры должны иметь методы, которые
возвращают площадь и периметр (для окружности - длина окружности).
*/
class Circle
{
    private $radius;
    private $diameter;
    public function __construct(float $r=7, $d=14)
    {
        $this->radius = $r;
        $this->diameter = $d;
    }
    public function getRadius() {
      return $this->radius;
    }

    public function getDiameter() {
      return $this->diameter;
    }

    public function area(){
       return (pow($this->getRadius(),2)*pi (void));
    }

    public function circumference(){
       return (pi(void)*$this->getDiameter());
    }

  }

    class Rectangle
    {
        private $rectangleSide1;
        private $rectangleSide2;
        public function __construct(float $s1=5, $s2=15)
        {
          $this->rectangleSide1 = $s1;
          $this->rectangleSide2= $s2;
        }
        public function getSide1()
        {
            return $this->rectangleSide1;
        }
        public function getSide2()
        {
            return $this->rectangleSide2;
        }
        public function area(){
          return ($this->getSide1()*$this->getSide2());
        }
      public function perimeter() {
          return (($this->getSide1()+$this->getSide2())*2);
      }
  }

  class Triangle
  {
      private $triangleSide1;
      private $triangleSide2;
      private $triangleSide3;
      public function __construct (float $trS1=5,$trS2=5,$trS3=10)
      {
        $this->triangleSide1 = $trS1;
        $this->triangleSide2 = $trS2;
        $this->triangleSide3 = $trS3;
      }
      public function getTrSide1()
      {
          return $this->triangleSide1;
      }
      public function getTrSide2()
      {
          return $this->triangleSide2;
      }
      public function getTrSide3()
      {
          return $this->triangleSide3;
      }
         public function area(){
       return (sqrt($this->halfPerimeter()*($this->halfPerimeter()-$this->getTrSide1())*($this->halfPerimeter()-$this->getTrSide2())*($this->halfPerimeter()-$this->getTrSide3())));
      }
         public function perimeter() {
      return ($this->getTrSide1()+$this->getTrSide2()+$this->getTrSide3());
    }
      public function halfPerimeter() {
      return (($this->perimeter())/2);
}
}

$circ= new Circle();
var_dump ($circ);
$rect= new Rectangle();
$triang=new Triangle();
