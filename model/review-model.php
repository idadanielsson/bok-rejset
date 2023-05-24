<?php

    class ReviewModel extends DB { 
        protected $table = "userbooks";
        
        public function getAllUserBooks(){
            return $this->getAll($this->table);
        }

        public function getBooksByUserId($userId){
            $sql = "SELECT b.name, ub.review, u.name AS userName
                    FROM books AS b
                    INNER JOIN userbooks AS ub ON b.id = ub.bookId
                    INNER JOIN users AS u ON u.id = ub.userId
                    WHERE ub.userId = :userId";
            $statement = $this->pdo->prepare($sql);
            $statement->execute(['userId' => $userId]);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        public function addReview(string $review, int $userId, int $bookId){
            $sql = "INSERT INTO $this->table (review,userId,bookId) VALUES (?,?,?)";
            $statement = $this->pdo->prepare($sql);
            $statement->execute([$review, $userId, $bookId]);
        }
    }