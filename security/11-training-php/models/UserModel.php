<?php

require_once 'BaseModel.php';

class UserModel extends BaseModel
{

    public function findUserById($id)
    {
        $sql = 'SELECT * FROM users WHERE id = ' . $id;
        $user = $this->select($sql);

        return $user;
    }
    

    public function findUser($keyword)
    {
        $sql = 'SELECT * FROM users WHERE user_name LIKE %' . $keyword . '%' . ' OR user_email LIKE %' . $keyword . '%';
        $user = $this->select($sql);

        return $user;
    }

    /**
     * Authentication user
     * @param $userName
     * @param $password
     * @return array
     */
    public function auth($userName, $password)
    {
        $md5Password = md5($password);
        $sql = 'SELECT * FROM users WHERE name = "' . $userName . '" AND password = "' . $md5Password . '"';

        $user = $this->select($sql);
        return $user;
    }

    /**
     * Delete user by id
     * @param $id
     * @return mixed
     */
    public function deleteUserById($id)
    {
        // Start the session
        session_start();
        $is_login = isset($_SESSION['id']);
        if (!$is_login || $_SESSION['id'] != $id) {
            return false;
        }
        $sql = 'DELETE FROM users WHERE id = ' . $id;
        return $this->delete($sql);

    }
    private function validateInput($input)
    {
        $errors = "";

        if (empty($input['name'])) {
            $errors .= "Tên là bắt buộc.\n";
        } elseif (!preg_match("/^[a-zA-Z0-9]{5,15}$/", $input['name'])) {
            $errors .= "Tên phải là ký tự hợp lệ (A-Z, a-z, 0-9) và có chiều dài từ 5 đến 15 ký tự.\n";
        }
    
        if (empty($input['password'])) {
            $errors .= "Mật khẩu là bắt buộc.\n";
        } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[~!@#$%^&*()]).{5,10}$/", $input['password'])) {
            $errors .= "Mật khẩu phải bao gồm chữ thường, chữ hoa, số, và ký tự đặc biệt (~!@#$%^&*()). Chiều dài từ 5 đến 10 ký tự.\n";
        }
    
        return $errors; 
    }


    /**
     * Update user
     * @param $input
     * @return mixed
     */
    public function updateUser($input)
    {
        $validationErrors = $this->validateInput($input);

        if (!empty($validationErrors)) {
            $_SESSION['message'] = $validationErrors;
            return false;
        }

        $sql = 'UPDATE users SET 
                 name = "' . mysqli_real_escape_string(self::$_connection, $input['name']) . '", 
                 password="' . md5($input['password']) . '"
                WHERE id = ' . $input['id'];

        $user = $this->update($sql);

        return $user;
    }

    /**
     * Insert user
     * @param $input
     * @return mixed
     */
    public function insertUser($input)
    {
        $validationErrors = $this->validateInput($input);
        

    if (!empty($validationErrors)) {
        $_SESSION['message'] = $validationErrors;
        return false;
    }

        $sql = "INSERT INTO `app_web1`.`users` (`name`, `password`) VALUES (" .
            "'" . $input['name'] . "', '" . md5($input['password']) . "')";

        $user = $this->insert($sql);

        return $user;
    }

    /**
     * Search users
     * @param array $params
     * @return array
     */
    public function getUsers($params = [])
    {
        //Keyword
        if (!empty($params['keyword'])) {
            $sql = 'SELECT * FROM users WHERE name LIKE "%' . $params['keyword'] . '%"';

            //Keep this line to use Sql Injection
            //Don't change
            //Example keyword: abcef%";TRUNCATE banks;##
            $users = self::$_connection->multi_query($sql);

            //Get data
            $users = $this->query($sql);
        } else {
            $sql = 'SELECT * FROM users';
            $users = $this->select($sql);
        }

        return $users;
    }
}