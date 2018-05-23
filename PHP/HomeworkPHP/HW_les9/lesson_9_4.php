<?php
/*
4. Реализовать объектную модель: Яблоко, Дерево, Сад

Программа должна уметь добавлять деревья в сад.
Яблоки на деревья.
Возвращать информацию о количестве деревьяв и яблок.

Сад - это объект со списком объектов деревьев.
Дерево - это объект со списком объектов яблок.

Яблоки должны иметь определяться:
возрастом
цветом
размером
флаг испорченности (0 - свежее, 1 - испорченное)
флаг упавшего с дерева (0 - на дереве, 1 - упало)

Яблоки имею методы:
упасть с дерева
испортиться

У всего сада есть возраст (например количество суток).
Каждые 30 суток на каждом дереве рождается новое яблок.
Все яблоки каждые сутки стареют на 1 день.
Яблоки падают с дерева при возрасте 30 дней.
Можно усложнить - 50% яблок могут упасть через 28 или через 32 дня по случайному выбору.
Яблоки портятся, после падения через сутки

Сад имеет метод:
просчитать 1 сутки (т.е. метод, который фиксирует прохождение суток)

Остальные методы и атрибуты объектов необходимо предусмотреть и реализовать.

Пример результирующего кода:

$garden = new Garder(); // создать сад, может быть создано N деревьев
с N2 яблоками на каждом (N и N2 любые числа не больше 100, все яблоки при
инцициализации создаются со случайным возрастом от 0 до 30)

$garden->passDay(); // прошли одни сутки
$garden->passDay(); // прошли одни сутки
$garden->passDay(); // прошли одни сутки
$garden->getCountApples(); // получить список висящих яблок на деревьях$garden->passDay(); // прошли одни сутки
$garden->getCountApples(); // получить список висящих яблок на деревьях этого сададеревьях$garden->passDay(); // прошли одни сутки
$garden->getCountApples(); // получить список висящих яблок на деревьях этого сада

В задании могут быть добавлены иные условия и возможности,
 если будет интересно его усложнить (добавить время года, погоду и т.п.
 влияющие на рост/падение яблок, каждое упавшее яблоко может превращаться в
 новое дерево через время, следить за удалением яблок из массива, после того
  как они испортились и т.п.).
  */

  class Garden {
    private $age=1;
    public $trees=[];

    public function __construct ($N,$N2){ //у сада N деревьев и N2 яблок
      for($i = 0; $i < $N; $i++) {
      array_push($this->trees, new Tree());
      }
      foreach($this->trees as $tree){
			for($j = 0; $j < $N2; $j++){
			array_push($tree->apples, new Apple());
			}
    }
  }

  public function passDay(){
  for ($i=1; $i<=365 ; $i++) {
  $this->age++;//c каждым проходом цикла возр увел на 1
   var_dump ("Прошло" . $this->age . "дней" );
   if ($this->$age=30) { //Каждые 30 суток на каждом дереве рождается новое яблоко.
    foreach($this->trees as $tree){
      array_push($tree->apples, new Apple());
    }
  }
  foreach($this->trees as $tree){
    foreach ($tree->apples as $i=>$apple){
      if ($apple->age == 30){ //Яблоки падают с дерева при возрасте 30 дней.
        $apple->toFall();
        array_pop($tree->apples[$i]);
      }
      if ($apple->age == 31){
        $apple->toRot();
      }
      $apple->age++;//Все яблоки каждые сутки стареют на 1 день.
    }
  }
  print_r($this->trees);
  var_dump($this->getCountApples()); // получить список висящих яблок на деревьях
}
}

public function getCountApples(){ //список яблок по деревьям
  return $this->trees;
}

  public function getApplesTotal(){ //количество яблок на всех деревьях
    $sum=0;
 		for($i = 0; $i < count($this->trees); $i++){
 			$sum += $this->trees[$i]-> amountApplesOnTheTree();
 		}
 		return $sum;
 	}
}

  class Tree {
  	public $apples = [];
  	public function amountApplesOnTheTree(){
      $sum=0;
  		foreach($this->apples as $apple){
  			if(!$apple->isFallen){
  				$sum++;
  			}
  		}
  		return $sum;
  	}
  }

  $tree=new Tree();

  class Apple{
  	public $age;
  	private $color = "green";
  	private $size = "small";
  	private $isRotten = false;
  	public $isFallen = false;
  	public function __construct (){
  		$this->age = rand(0, 30);
  	}
  	public function toRot(){
  		$this->isRotten = true;
  	}
  	public function toFall(){
  		$this->isFallen = true;
  	}
  }

  $garden = new Garden(3, 3); // создать сад, может быть создано N деревьев с N2 яблоками на каждом (N и N2 любые числа не больше 100, все яблоки при инцициализации создаются со случайным возрастом от 0 до 30)
