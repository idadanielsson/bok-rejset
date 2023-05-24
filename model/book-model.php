<?php


class BookModel extends DB {

    protected $table = "books";

    public function getAllBooks(){
        return $this->getAll($this->table);
    }

    public function addBook(string $name, int $year, int $authorId){
        $sql = "INSERT INTO $this->table (name,year,author_id) VALUES (?,?,?)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$name, $year, $authorId]);
    }
    
}

?>