<?php

namespace Dojo;

class Bucket {

    public $value = 0;
    private $bookList;
    
    function __construct() {
        
    }
    
    public function bookExist(){
        return 0;
    }
    
    public function getValue(){
        return $this->value;
    }
    
    public function getBookList(){
        return $this->bookList;
    }
    
    public function addBook($id){
        $this->bookList[] = $id;
    }
    
    public function booksNumber(){
        return count($this->bookList);
    }

}