<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 07.06.18
 * Time: 16:53
 */

namespace doa;

class UserDOA
{

    public static function verifyUser($email, $password, $connection)
    {
        $stmt = $connection->prepare("SELECT * FROM user WHERE EMAIL = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($password == $user['PASSWORD']) {
            $_SESSION['userID'] = $user['ID'];
            setcookie('user_id', $user['ID'], time() + 86400, '/');
            setcookie('email', $user['EMAIL'], time() + 86400, '/');
            return true;
        } else {
            return false;
        }
    }

    public static function registerUser($firstname, $lastname, $email, $password, $connection)
    {
        $stmt = $connection->prepare("INSERT INTO user (FIRST_NAME, LAST_NAME, EMAIL, PASSWORD) VALUES (:first_name, :last_name, :email, :password)");
        $stmt->bindParam(':first_name', $firstname);
        $stmt->bindParam(':last_name', $lastname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
    }

    public static function editUser($user_id, $selected_property, $new_value, $connection)
    {
        $stmt = $connection->prepare("UPDATE user SET " . $selected_property . " = :new_value WHERE ID = :user_id");
        $stmt->bindParam(':new_value', $new_value);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();
    }

    public static function deleteUser($user_id, $connection)
    {
        $stmt = $connection->prepare("DELETE FROM user WHERE ID = ?");
        $stmt->execute([$user_id]);

        return true;
    }

}