<?php
/*
3. Дом строится со следующими характеристиками:
Что из низ задается через конструктор, а что потом - решайте сами
1. какое-то количество подъездов
2. какое-то количество этажей
3. какое-то количество квартир на этаже
4. адрес
У дома должна быть возможность сообщить, сколько в нем квартир - метод
У дома должна быть возможность показать адрес - метод
У дома должна быть возможность сообщить, сколько людей в нем живет - метод

Есть очередь людей (массив с объектами класса Human),
каждый хочет заселиться в дом , но у каждого есть пожелание - этажность дома!

Одновременно в дом можно заселить троих.
house.add(); при вызове этого метода можно заселить только 3х людей

Людей из списка можно заселять в дом (по квартире на человека),
если в нем есть еще свободные квартиры
и если их пожелание можно учесть (желаемый этаж должен быть в доме).

Если человека нельзя поселить, потому что его пожелание не выполняется,
он перемещяется в конец очереди.
Если не хватило места - остается на прежнем месте, ждать нового дома
*/
class House
{
    private $floors;
    private $flats_amount_on_a_floor;
    public  $freeFlats=[];
    private $entrances;
    private $address;
    public $queue;

   public function __construct($address,$floors,$flats_amount_on_a_floor,$entrances) {
   $this->address=$address;
   $this->$floors=$floors;
   $this->flats_amount_on_a_floor=$flats_amount_on_a_floor;
   $this->entrances=$entrances;
   $this->queue=new Queue();
}

    public function getfloors()
    {
        return $this->floors;
    }
    public function getFlats_amount_on_a_floor()
    {
        return $this->flats_amount_on_a_floor;
    }

    public function howManyFlats() {
        return ($this->getfloors()*$this->getFlats_amount_on_a_floor());
        }

    public function schowAddress() {
        echo $this->address;
      }

    public function people_amount_in_the_house() {//сколько людей живет в доме=кол-во объектов в массиве freeFlats
          echo ('В доме живет'. count($this->freeFlats).'человек');
        }

    public function addInHouse(&$queue) { !!!! //заселение трех человек
        $addInHouse=0;
        foreach ($queue->$people as $i=>$person) {
          if ($addInHouse==3) return;
            if ($person->desiredFloor<=$house->getfloors()) {
            if(count($this->freeFlats)==0){
             $tenant=array_pop($queue->$people[$i]);
             array_push($this->$freeFlats,$tenant);
             $addInHouse++;
          }
          else {
  					continue;
  				}
        }
          else {
  					$queue->addPerson($person);
  				}
            }
          }

    public function startQueue(){
      $person1 = new Person("Вася",'4');
      $person2 = new Person("Катя",'7');
      $person3 = new Person("Ваня",'8');
      $person4 = new Person("Соня",'3');
      $person5 = new Person("Андрей",'1');
      $this->queue->addPerson($person1);
      var_dump($this->queue->getPeople());
      $this->queue->addPerson($person2);
      var_dump($this->queue->getPeople());
      $this->queue->addPerson($person3);
      var_dump($this->queue->getPeople());
      $this->queue->addPerson($person4);
      var_dump($this->queue->getPeople());
      $this->queue->addPerson($person5);
      var_dump($this->queue->getPeople());
      }

    public function isFull(){
         if(count($this->freeFlats)==$this->howManyFlats()){
           echo ("Больше нет места");
           return true;
         }
           return false;
  }
}
$house=new House("ул. Кораблестроителей, дом 2",5,4,1);
$house->startQueue();

class Queue{
  private $people=[];

  public function addPerson($person){
      if ($house->isFull()){
          array_push($this->people, $person);
      } else {
          $temp=array_pop($people);
          array_unshift($this->people,$temp);
      }
  }

  public function getPeople()
  {
      return $this->people;
  }
}


class Person {
    private $name;
    private $desiredFloor;

    public function _construct($name,$desiredFloor)
    {
      $this->name=$name;
      $this->desiredFloor=$desiredFloor;

    }
    }
