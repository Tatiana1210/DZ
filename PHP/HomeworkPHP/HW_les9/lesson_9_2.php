<?php
/*
2. Сделать библиотеку, которая ведет учет книг. Должно быть как минимум два
класса: Book и Library. Library имеет два метода: void put(Book book, int quantity)
 и int get(Book book, int quantity). Каждой книге в библиотеке соответствует счетчик,
 показывающий количество хранящихся книг, при добавлении книги - счетчик увеличивается,
 при извлечении - уменьшается на число quantity.
Поля класса Book: author, title, pagesNum.
Библиотека хранит ограниченное число книг, сколько - на ваше усмотрение.
*/
class Book
{
    private $author;
    private $title;
    private $pagesNum;
    public  $count=0;
    public function __construct($author, $title, $pagesNum){
  		$this->author = $author;
  		$this->title = $title;
  		$this->pagesNum = $pagesNum;
  	}
}

class Library
{
    private $max;
    private $books = [];

    public function __construct(int $max){
      $this->max = $max;
    }

private function isFull(){
        if ($this->counterOfBooks() >= $this->max) {
            return true;
        }
        return false;
    }

public function counterOfBooks(){     /*Каждой книге в библиотеке соответствует счетчик,
    показывающий количество хранящихся книг, при добавлении книги - счетчик увеличивается,
    при извлечении - уменьшается на число quantity.*/
      $bookCounter = 0;
      foreach ($this->books as $book){
        $bookCounter+= $book->count;
      }
      return $bookCounter;
    }

  public function getBook(){
      $this->max - $this->counterOfBooks();//оставшиеся книги
    }

    public function put (Book $book, int $quantity){
  if ($this->isFull() ) {
    var_dump("В библиотеке нет мест");
  } else {
    if (in_array($book, $this->books)){
      if($quantity >= $this->getBook()){
        $book->count+= $this->getBook();
      } else {
        $book->amount += $quantity;
      }
    } else {
      array_push($this->books, $book);
      if( $quantity >= $this->getBook() ){
        $book->count = $this->getBook();
      } else {
        $book->count = $quantity;
      }
    }
  }
}


    public function get (Book $book, int $quantity){
		if (in_array($book, $this->books)) {
			if ($book->count >= $quantity) { //если кол-во книг в библиотетеке больше запр кол-ва
				$book->count -= $quantity;
			} else if ($book->count < $quantity && $book->count != 0){
				$res = $quantity - $book->count;
				$book->count = 0;
				echo "не хватило $res книжек";
			}
			if ($book->count == 0){
				$index = array_search($book, $this->books);
				array_splice($this->books, $index, 1);
			}
		} else {
			var_dump("нет такой книги в библиотеке");
		}
	}
}

$library = new Library(40);
$book1 = new Book ("Толстой",'Война и мир', '1060стр');
$book2 = new Book ("Мопассан",'Милый друг', '700стр');
$book3 = new Book ("Хемингуэй",'Старик и море', '250стр');
$book4 = new Book ("Киз",'Цветы для Элджерона', '700стр');
echo "<pre>";
$library->put($book1, 10);
print_r($library->getBook());
print_r($library->counterOfBooks());
$library->put($book2, 10);
print_r($library->getBook());
print_r($library->counterOfBooks());
$library->get($book3, 10);
print_r($library->getBook());
print_r($library->counterOfBooks());
$library->put($book4, 10);
print_r($library->getBook());
print_r($library->counterOfBooks());
echo "</pre>";
