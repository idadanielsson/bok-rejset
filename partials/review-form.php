<?php
    require_once 'model/user-model.php';
    require_once 'model/book-model.php';
    require_once 'partials/connect.php';
    
    $userModel = new UserModel($pdo);
    $bookModel = new BookModel($pdo);

?>

<form action="form-handlers/review-form-handler.php" method="post">
    <div>
        <label for="name">Recension: </label> <input type="text" name="review" id="review">
    </div>
    <div>
        <label for="userId">Användare: </label>

        <select name="userId" id="user">
            <option value="">--Välj användare--</option>

            <?php
                $users = $userModel->getAllUsers();
                foreach($users as $user){
                    echo "<option value='{$user['id']}'>
                        {$user['name']}
                    </option>";
                }

            ?>
        </select>
    </div>

    <div>
        <label for="book">Bok: </label>

        <select name="bookId" id="book">
            <option value="">--Välj bok--</option>

            <?php
                $books = $bookModel->getAllBooks();
                foreach($books as $book){
                    echo "<option value='{$book['id']}'>
                        {$book['name']}
                    </option>";
                }

            ?>
        </select>
    </div>
    <button type="submit">Lägg till recenssion</button>
    
    
</form>