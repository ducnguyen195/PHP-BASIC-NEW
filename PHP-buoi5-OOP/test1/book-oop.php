<?php
//Class Book: Đây là lớp đại diện cho một cuốn sách.
//Thuộc tính:
//
//$id: ID duy nhất của cuốn sách.
//$title: Tiêu đề của cuốn sách.
//$author: Tác giả của cuốn sách.
//$publicationYear: Năm xuất bản của cuốn sách.
//$imageReview: Ảnh review cuốn sách
//$type: Loại sách (eBook hay paperBook)

class Book{
    private $id;
    private $title ;
    private $author ;
    private $publicationYear;
    private $imageReview;
    private $type;

    public function __construct($id, $title, $publicationYear, $imageReview, $type, $author)
{
    $this->id= $id;
    $this->title= $title;
    $this->author = $author;
    $this->publicationYear = $publicationYear;
    $this->imageReview = $imageReview;
    $this->type = $type;
}
    //Getter
    public function getId()
    {
       return $this->id ;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getAuthor()
    {
        return $this->author ;
    }
    public function getPublicationYear()
    {
       return $this->publicationYear ;
    }
    public function getImageReview()
    {
        return $this->imageReview ;
    }
    public function getType()
    {
         return $this->type ;
    }
    //Setter
    public function setId()
    {
        return $this->id ;
    }
    public function setTitle($title)
    {
       return $this->title =$title ;
    }
    public function setAuthor()
    {
       return $this->author;
    }
    public function setPublicationYear()
    {
       return $this->publicationYear ;
    }
    public function setImageReview()
    {
        return $this->imageReview ;
    }
    public function setType()
    {
        return $this->type ;
    }
}
class Library
{
    private $books;

    public function __construct($books)
    {
        $this->books = [];
    }
    public function getBooks()
    {
        return $this->books;
    }
    public function setBooks()
    {
        return $this->books;
    }
    public function addBook($book)
    {
       return $this->books[] =$book;
    }
    public function searchBook($id)
    {
        $index = -1;
        for ($i = 0; $i < count($this->books); $i++)
            if ($this->books[$i]->$id == $id) {
                return $index;
            }
            return $index;
        }
    public function searchByTitle($title)
    {
        global $book;
        $searchTitle = [];
        for ($i = 0; $i < count($this->books); $i++) {
            if ($book->getTitle() == $title){
                $searchTitle[] = $book;
            }
        }
        return $searchTitle;
    }
    public function searchByAuthor($author)
    {
        $searchAuthor = [];
        foreach ( $this->books as $book) {
            if ($book->getAuthor() == $author) {
                $searchAuthor[] = $book;
            }
        }
        return $searchAuthor;
    }
    public function removeBook($title)
    {

    }
    public function searchBookById($id) {
        $index = -1;
        for ($i = 0; $i < count($this->books); $i++)
            if ($this->books[$i]-$id == $id) {
                return $index;
            }
        return $index;
    }

}
class  User {
    private $id;
    private $fullName;


    public function __construct($id,$fullName)
    {
        $this->id = $id;
        $this->fullName =$fullName;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getFullName()
    {
        return $this->fullName;
    }
}

class Loan{
    private $user;
    private $book;
    private $dueDate;

    public function __construct($book,$user,$dueDate)
    {
        $this->user = $user;
        $this->book = $book;
        $this->dueDate = $dueDate;

    }

    public function getUser()
    {
        return $this->user;
    }

    public function getBook()
    {
        return $this->book;
    }

    public function getDueDate()
    {
        return $this->dueDate;
    }
}

$book1 = new Book (1,"Chân đi hài lụa, cổ quấn hạt vàng",2000,"./img.png","Sách Văn Học","Kỳ Nam Uyên");
$book2 = new Book (2,"Ta trong ta",1999,"./img_1.png","Sách Văn Học","Đỗ Minh Tâm");
$book3 = new Book (3,"Gấu Bobbi tô màu và dán hình",2005,"./vaaimg_2.png","Sách Thiếu Nhi","NXB Kim Đồng");

$user1 = new User(11,"Lò Văn A");
$user2 = new User(22,"Thị Mão");
$user3 = new User(33,"Nicolice Tèo");


$liblary = new Library([]);
$liblary->addBook($book1);
$liblary->addBook($book2);
$liblary->addBook($book3);
$searchTilte ='Đỗ Minh Tâm';
$liblary->searchBook(1);

$loan1 = new Loan($book1,$user1,'14/8/2023');
$loan2 = new Loan($book2,$user3,'20/10/2023');
echo "User: " . $loan1->getUser()->getFullName() . '<br>';
echo "Book: " . $loan1->getBook()->getTitle() . '<br>';
echo "Due Date: " . $loan1->getDueDate() . '<br>';

