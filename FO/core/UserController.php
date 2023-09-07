<?PHP
require_once "../../config.php";
require_once "../entities/User.php";

function addUser(User $user)
{
    $sql = "insert into user (id,username,name,surname,email,password,role) values (
			null, 
			'" . $user->getUsername() . "',
			'" . $user->getName() . "',
			'" . $user->getUsername() . "',
			'" . $user->getEmail() . "',
			'" . $user->getPassword() . "',
			'" . $user->getRole() . "'
			)";
    $this->executeSql($sql);
    return $sql;
}

function deleteUser(User $user)
{
    $sql = "delete from user where id=" . $user->getId();
    $this->executeSql($sql);
    return $sql;
}

function findUser($email, $password)
{
    $sql = "SELECT * from user where email='" . $email . "' and password='" . $password . "' LIMIT 1";
    $db = config::getConnexion();
    try {
        $stmt = $db->prepare($sql);
        $stmt->execute();
        var_dump($sql);
        $row = $stmt->fetch();
        if (empty($row["id"]))
            return null;
        else {
            $_SESSION["user"] = $row["username"];
            $_SESSION["role"] = $row["role"];
            return array('username' => $row["username"], 'role' => $row["role"]);;
        }
    } catch (Exception $e) {
        return $e->getMessage() . ' ' . $sql;
    }
}

function executeSql($sql)
{
    $db = config::getConnexion();
    $req = null;
    try {
        $req = $db->prepare($sql);
        $s = $req->execute();
    } catch (Exception $e) {
        var_dump(" Erreur ! " . $e->getMessage());
    }
}

?>

