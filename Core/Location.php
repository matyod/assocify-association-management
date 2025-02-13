<?php

namespace Core;
use Exception;
use PDOException;

class Location
{
  private $db;

  public function __construct(Database $db)
  {
    $this->db = $db;
  }

  public function getAllLocations()
  {
    $sql = 'SELECT *
    FROM location;';
    return $this->db->fetchAll($sql);
  }

  // public function getCommitteeMembersByCommitteeId($id)
  // {
  //   $sql = 'SELECT cm.c_member_id, cm.role, cm.joined_at, m.username, m.email, m.first_name, m.last_name, m.phone_number
  //   FROM committee_members cm
  //   LEFT JOIN members m ON cm.c_member_id = m.member_id
  //   WHERE cm.committee_id = :committee_id;';
  //   return $this->db->fetchAll($sql, ['committee_id' => $id]);
  // }

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