<?php
declare(strict_types = 1);

namespace App\Models;

/**
 * Class responsible for user validation and session management.
 */
class UserValidator extends Database
{
	/* [start validating user login request] */
  protected function validateUser($credentials): array
  {
    $dbValidationResult = ['validated' => false, 'message' => 'Invalid username or password! Please try again.'];
    try {
      $userData = $this->getUserData($credentials['uname']);
      if($userData && $this->validatePassword($credentials['pword'], $userData['pword'])) {
        $this->updateSessionLogin($credentials['uname']);
        $dbValidationResult = ['validated' => true, 'management' => $userData['admin_at'], 'message' => 'Login Success!'];
      }
    } catch(\PDOException $e) {
      $dbValidationResult = ['validated' => false, 'message' => 'Something went wrong: ' . $e->getMessage()];
    }

    return $dbValidationResult;
  }

  /* [Get data of user when its logged in] */
  private function getUserData($username): ?array
  {
    $stmt = $this->db()->prepare("SELECT * FROM users WHERE uname = :uname LIMIT 1");
    $stmt->bindParam(':uname', $username, \PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch(\PDO::FETCH_ASSOC) ?: null;
  }

  /* [Validate user password againts database.] */
  private function validatePassword($inputPassword, $hashedPassword): bool
  {
    return password_verify($inputPassword, $hashedPassword);
  }

  /* [Update user login status and session every time user logged in.] */
  private function updateSessionLogin($username): void
  {
    session_start();
    session_regenerate_id();
    $usid = session_id();

    $stmt = $this->db()->prepare("UPDATE users SET is_online = 1, session_id = :usid WHERE uname = :uname LIMIT 1");
    $stmt->bindParam(':usid', $usid, \PDO::PARAM_STR);
    $stmt->bindParam(':uname', $username, \PDO::PARAM_STR);
    $stmt->execute();
  }
}
