<?php

class ReviewView {
    public function renderAllUserBooksAsList(array $userbooks): void{
        echo "<ul>";
        foreach($userbooks as $userbook){
            echo "<li>{$userbook['userName']} har läst boken {$userbook['name']} och gav recensionen: {$userbook['review']}</li>";
        }
        echo "</ul>";
    }
}