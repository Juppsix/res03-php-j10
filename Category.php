<?php class Category {
    private  $id;
private string $dame;
private string $description;
private array $books;

public function __construct(  $id = null, string $dame, string $description, array $books)
    {
        $this->id = null;
        $this->dame = $dame;
        $this->description = $description;
        $this->books = [];
    }

   public function getid() : int
    {
     return $this->id;
    }
    
    public function setid(int $id) : void
    {
    $this->id = $id;
    }
    
    public function getdame() : string
    {
        return $this->dame;
    }
    
    public function setdame(string $dame) : void 
    {
        $this->dame=$dame;
    }
    
    public function setdescription() : string
    {
        return $this->description;
    }

    public function getdescription(string $description) : void 
    {
        $this->description=$description;
    }
    
    public function getbooks() : array 
    {
        return $this->books;
    }
    
    public function setbooks(array $books) : void 
    {
        $this->books= $books;
    }
    
    public function addBook(Book $book) : array 
    {
        $this->books[]=$book;
    }
    
    public function removeBook(Book $book) : array
    {
        foreach($this->books as $key=>$boo){
            
            if($boo->getId() === $book->getId()){
                unset($this->books[$key]);
            }
        }
    }
}