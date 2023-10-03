<?php
interface Borrowable {
    public function borrow();
    public function returnItem();
}

class Book implements Borrowable {
    private $title;
    private $author;
    private $isBrrowed;

    public function __construct($title,$author,$isBrrowed)
    {
        $this->title = $title;
        $this->author = $author;
        $this->isBrrowed = false;
    }
    public function borrow()
    {
        // TODO: Implement borrow() method.
            if ($this->isBrrowed) {
                $this->isBrrowed = true;
                echo $this->title .' của'. $this->author .' sách đã được mượn từ trước, ko thể mượn ' . '<br>';
            } else {
                echo $this->title. " của". $this->author. " đã đuoc mượn".'<br>';
            }
    }

    public function returnItem()
    {
        if (!$this->isBrrowed) {
            $this->isBrrowed = false;
            echo  'Sach'.$this->title . 'cua' .$this->author . 'da tra thanh cong' . '<br>';
        } else {
            echo  'Sach'.$this->title . 'cua' .$this->author . 'chua tra sach' . '<br>';
        }
    }
}
class Paper implements Borrowable {
    private $title;
    private $author;
    private $isBrrowed;

    public function __construct($title,$author,$isBrrowed)
    {
        $this->title = $title;
        $this->author = $author;
        $this->isBrrowed = false;
    }
    public function borrow()
    {
        // TODO: Implement borrow() method.
        if ($this->isBrrowed) {
            $this->isBrrowed = true;
            echo $this->title .'của'.$this->author .'sách đã được mượn  ' . '<br>';
        } else {
            echo $this->title."của".$this->author."đã đuoc mượn" .'<br>';
        }
    }

    public function returnItem()
    {
        if (!$this->isBrrowed) {
            $this->isBrrowed = false;
            echo  'Sach'.$this->title . 'cua' .$this->author . 'da tra thanh cong'.'<br>';
        } else {
            echo  'Sach'.$this->title . 'cua' .$this->author . 'chua tra sach'.'<br>';
        }
    }
}
$book = new Book('Sach Giao Khoa','NXB Kim Dong',true);
$book->borrow(false);
$book->returnItem(true);
echo "<br>";
$paper = new Paper("Tuoi Teen", "NXB Phuong Nam",true);
$paper->borrow(false);
$paper->returnItem(true);