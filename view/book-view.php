<?php

class BookView {

public function renderAllBooksAsList(array $books) {
    echo "<ul>";
    foreach($books as $book){
    echo "<li>{$book['name']}</li>";
}
    echo "</ul>";

}

}

?>