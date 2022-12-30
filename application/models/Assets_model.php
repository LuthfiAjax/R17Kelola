<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Assets_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function get_client()
  {
    $query = "SELECT * FROM `clients` ORDER BY `name` ASC";
    return $this->db->query($query);
  }

  public function get_partner()
  {
    $query = "SELECT * FROM `partners` ORDER BY `name` ASC";
    return $this->db->query($query);
  }

  public function get_tech()
  {
    $query = "SELECT * FROM `technology` ORDER BY `name` ASC";
    return $this->db->query($query);
  }

  public function get_solution()
  {
    $query = "SELECT * FROM `solution` ORDER BY `name` ASC";
    return $this->db->query($query);
  }
}
