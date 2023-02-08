<?php class Author {
 private $id;
 private string $firstName;
 private string $lastName;
 private $biography;
 
  public function __construct( $id = null, string $firstName, string $lastName, $biography= null)
    {
        $this->id = null;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->biography = $biography;
    }
   
    public function getid() : int
    {
     return $this->id;
    }
    
    public function setid(int $id) : void
    {
    $this->id = $id;
    }
    
  public function getfirstName() : string
    {
        return $this->firstName;
    }

    
    public function setfirstName(string $firstName) : void
    {
        $this->firstName = $firstName;
    }
    
    public function getlastName() : string
    {
       return $this->lastName;
    }
 
  public function setlastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }
    
    public function getbiography() : string
    {
       return $this->biography;
    }
 
  public function setbiography (string $biography) : void
    {
        $this->biography = $biography;
    }
   
   
   
   
}