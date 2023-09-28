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
    //Geter
    public function getId($id)
    {
        $this->id = $id;
    }
    public function getTitle($title)
    {
         $this->title = $title;
    }
    public function getAuthor($author)
    {
         $this->author = $author;
    }
    public function getPublicationYear($publicationYear)
    {
        $this->publicationYear = $publicationYear;
    }
    public function getImageReview($imageReview)
    {
        $this->imageReview = $imageReview;
    }
    public function getType($type)
    {
        $this->type = $type;
    }
    //Setter
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setAuthor($author)
    {
        $this->author = $author;
    }
    public function setPublicationYear($publicationYear)
    {
        $this->publicationYear = $publicationYear;
    }
    public function setImageReview($imageReview)
    {
        $this->imageReview = $imageReview;
    }
    public function setType($type)
    {
        $this->type = $type;
    }

}
class Libary
{
    private $books;

    public function __contruct($books)
    {
        $this->books = $books;
    }

    public function getBooks($books)
    {
        return $this->books;
    }
    public function setBooks($books)
    {
        return $this->books;
    }
    public function addBook($book)
    {
        $this->books[] =$book;
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
        $index = -1;
        for ($i = 0; $i < count($this->books); $i++)
            if ($this->books[$i]-$title == $title) {
                 return $index;
            }
        return  $index;
    }
    public function removeBook($book,$index)
    {
        if ($index != -1) {
            $this->books = array_splice($this->books,$index,1);
        }
    }

}