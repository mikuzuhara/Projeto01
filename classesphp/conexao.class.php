<?php
class conexao
{
  private $db_host = 'localhost';
  private $db_user = 'root';
  private $db_pass = '';
  private $db_name = 'ead';

  private $con = false;


  public function connect()
  {  // estabelece conexão com o banco de dados  

    if (!$this->con) {
      $myconn = @mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
      if ($myconn) {
        $this->con = true;
        return true;
      } else {
        return false;
      }
    } else {
      return true;
    }
  }

  public function disconnect()
  {
    $chave = $this->con;
    if ($chave) {
      if (@mysqli_close($myconn)) {
        $this->con = false;
        return true;
      } else {
        return false;
      }
    }
  }
}
