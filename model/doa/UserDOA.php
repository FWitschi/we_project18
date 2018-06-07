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

    public static function editUser()
    {

    }

    public static function deleteUser($userId)
    {

    }

}