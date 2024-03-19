<?
interface ISession
{
  function setSession();
  function getSession();
  function destroySession();
  function checkSession($sessionId);
}

class Session implements ISession
{
  public $sessionId;

  public function __construct()
  {
    session_start();
  }

  public function setSession()
  {
    $this->sessionId = session_id();
  }

  public function getSession()
  {
    return $this->sessionId;
  }

  public function destroySession()
  {
    session_start();
    session_unset();
    session_destroy();
  }

  public function checkSession($sessionId)
  {
    return $this->sessionId === $sessionId;
  }
}
