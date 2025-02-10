<?php

namespace Core;
use Exception;
use PDOException;

class Event
{
  private $db;

  public function __construct(Database $db)
  {
    $this->db = $db;
  }

  public function getAllEvents()
  {
    $sql = 'SELECT e.event_date, e.event_name, e.description, c.committee_name, e.created_at, e.updated_at, e.event_id, c.committee_id
    FROM events e
    LEFT JOIN committees_events ce
    ON e.event_id = ce.event_id
    LEFT JOIN committees c
    ON ce.committee_id = c.committee_id;';
    return $this->db->fetchAll($sql);
  }

  // public function getEventById($id)
  // {
  //   $sql = 'SELECT * FROM events WHERE event_id = :event_id';
  //   return $this->db->fetchOne($sql, ['event_id' => $id]);
  //   // TODO: try-catch
  // }

  // public function getMemberByUsername($username)
  // {
  //   $sql = 'SELECT * FROM members WHERE username = :username';
  //   return $this->db->fetchOne($sql, ['username' => $username]);
  //   // TODO: try-catch
  // }

  // public function getMemberByPassword($password)
  // {
  //   $sql = 'SELECT * FROM members WHERE password = :password';
  //   return $this->db->fetchOne($sql, ['password' => $password]);
  //   // TODO: try-catch
  // }

  // public function getMemberByUsernamePassword($username, $password)
  // {
  //   $sql = 'SELECT * FROM members WHERE username = :username AND password = :password';
  //   return $this->db->fetchOne($sql, [
  //     'username' => $username,
  //     'password' => $password,
  //   ]);
  //   // TODO: try-catch
  // }

  // public function getMemberByEmail($email)
  // {
  //   $sql = 'SELECT * FROM members WHERE email = :email';
  //   return $this->db->fetchOne($sql, ['email' => $email]);
  //   // TODO: try-catch
  // }

  // public function getMemberByPhoneNumber($phoneNumber)
  // {
  //   $sql = 'SELECT * FROM members WHERE phone_number = :phone_number';
  //   return $this->db->fetchOne($sql, ['phone_number' => $phoneNumber]);
  //   // TODO: try-catch
  // }

  // public function getAllMembers()
  // {
  //   $sql = 'SELECT * FROM members';
  //   return $this->db->fetchAll($sql);
  //   // TODO: try-catch
  // }

  // public function createNewMember($username, $password, $email, $firstName, $lastName, $countryCode, $phoneNumber)
  // {
  //   $existingUsername = $this->getMemberByUsername($username);
  //   $existingEmail = $this->getMemberByEmail($email);
  //   $existingPhoneNumber = $this->getMemberByPhoneNumber($countryCode . $phoneNumber);

  //   if ($existingUsername) {
  //     return 'Username already exists.';
  //   }
  //   if ($existingEmail) {
  //     return 'Email already exists.';
  //   }
  //   if ($existingPhoneNumber) {
  //     return 'Phone number already exists.';
  //   }
  //   $sql = 'INSERT INTO members (username, password, email, first_name, last_name, phone_number) VALUES (:username, :password, :email, :first_name, :last_name, :phone_number)';
  //   $this->db->query($sql, [
  //     'username' => $username,
  //     'password' => $password,
  //     'email' => $email,
  //     'first_name' => $firstName,
  //     'last_name' => $lastName,
  //     'phone_number' => $countryCode . $phoneNumber,
  //   ]);

  //   return true;
  //   // TODO: try-catch
  // }
}