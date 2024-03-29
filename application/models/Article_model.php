<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Article_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function get_article($start, $limit)
  {
    $current_time = date('Y-m-d H:i:s', time());
    $query = "SELECT * FROM `article` WHERE tampil=1 AND publish_date <= NOW() ORDER BY id DESC LIMIT $start, $limit";
    return $this->db->query($query);
  }

  public function get_event($start, $limit)
  {
    $query = "SELECT * FROM `event` WHERE tampil=1 ORDER BY id DESC LIMIT $start, $limit";
    return $this->db->query($query);
  }

  public function count_article()
  {
    $query = "SELECT * FROM `article` WHERE tampil=1 ORDER BY id DESC";
    return $this->db->query($query)->num_rows();
  }

  public function count_event()
  {
    $query = "SELECT * FROM `event` WHERE tampil=1 ORDER BY id DESC";
    return $this->db->query($query)->num_rows();
  }

  public function single_event($slug)
  {
    $query = "SELECT * FROM `event` WHERE slug_id = $slug";
    return $this->db->query($query);
  }
}