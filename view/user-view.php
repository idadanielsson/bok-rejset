<?php

class UserView {
    public function renderAllUsersAsList(array $users): void{
        echo "<ul>";
        foreach($users as $user){
            echo "<li><a href='users.php?userId={$user['id']}'>{$user['name']}</a></li>";
        }
        echo "</ul>";
    }
}