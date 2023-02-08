<?php class Book {
    private $id;
 private string $title;
 private Author $author;
 private array $categories;
 
 
   public function __construct( $id = null, string $title, Author $author, array $categories)
    {
        $this->id = null;
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
    
    public function settitle(string $title) : void 
    {
        $this->title=$title;
    }
    
    public function getauthor() : Author
    {
        return $this->author;
    }
    
    public function setauthor(Author $author) : void 
    {
        $this->author=$author;
    }
    
      public function getcategories() : array
    {
     return $this->categories;
    }
    public function setcategories(array $categories) : void
    {
    $this->categories = $categories;
    }
    
    
         // public method
         
         public function addCategory(Category $category) : array
         {
               $this->categories[]=$category;
               
               return $this->categories;
         }
         
         public function removeCategory(Category $category) : array
         {
             foreach($this->categories as $key=>$cate){
            
            if($cate->getId() === $category->getId()){
                
                unset($this->categories[$key]);
                
            }
         }
         }   
}