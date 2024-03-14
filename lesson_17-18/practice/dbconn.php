<?
class DB
{
  static function getInstance()
  {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'project2';
    $port = '3306';

    $driver = new mysqli_driver();
    $driver->report_mode = MYSQLI_REPORT_OFF;

    $dbConn = @new mysqli($host, $user, $password, $db, $port);
    if ($dbConn->connect_error) {
      error_log($dbConn->connect_error);
    }

    $dbConn->set_charset('utf8mb4_unicode_ci');
    $dbConn->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);

    return $dbConn;
  }
}
