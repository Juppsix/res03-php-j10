<?php class Book {
    private int $id;
 private string $title;
 private Author $author;
 private array $categories;
 
 
   public function __construct(string $title, Author $author, array $categories)
    {
        $this->id = -1;
        $this->title = $title;
        $this->author = $author;
        $this->categories = [];
    }
 public function getid() : int
    {
     return $this->id;
    }
    
    public function setid(int $id) : void
    {
    $this->id = $id;
    }
    
    public function gettitle() : string
    {
        return $this->title;
    }
    
    public function settitle() : void 
    {
        $this->title=$title;
    }
    
    public function getauthor() : Author
    {
        return $this->author;
    }
    
    public function setauthor() : void 
    {
        $this->author=$author;
    }
    
      public function getcategories() : array
    {
     return $this->categories;
    }
    public function setcategories(string $categories) : void
    {
    $this->categories = $categories;
    }
    
    
         // public method
         
         addCategory(Category $category) : array
         
         removeBook(Book $book) : array
         
}