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
        $this->isBrrowed = $isBrrowed;
    }
    public function borrow()
    {
        // TODO: Implement borrow() method.
            if ($this->isBrrowed) {
                $this->isBrrowed = true;
                echo $this->title .'của'.$this->author .'sách đã được mượn từ trước, ko thể mượn ';
            } else {
                echo $this->title."của".$this->author."đã đuoc mượn";
            }
    }

    public function returnItem()
    {
        if ()

    }
}