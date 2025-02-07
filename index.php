<?PHP 
require_once __DIR__ . '/config.php';
class API {
  function Select(){
    $db = new Connect;
    $users = array();
    $data = $db->prepare('SELECT * FROM users ORDER BY id');
    $data->execute();
    while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
      $users[$OutputData['id']] = array(
        'id' => $OutputData['id'],
        'nom' => $OutputData['nom'],
        'email' => $OutputData['email'],
        'password' => $OutputData['password']
      );
    }
    return json_encode($users);
  }
}

$API = new API;
header('Content-Type: application/json');
echo $API->Select();

?>