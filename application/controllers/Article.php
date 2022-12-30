<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Article extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Article_model', 'article');
    $this->load->model('Assets_model', 'client');
  }

  public function article_news()
  {

    $this->load->library('pagination');
    $config['base_url'] = base_url('insight/article-news/');
    $config['total_rows'] = $this->article->count_article();
    $config['per_page'] = 6;

    $this->pagination->initialize($config);

    $data['title'] = 'Article and News';
    $data['start'] = $this->uri->segment(3);
    if ($data['start'] == NULL) {
      $start = 0;
    } else {
      $start = $data['start'];
    }

    $data['articles'] = $this->article->get_article($start, $config['per_page'])->result_array();
    $data['technologies'] = $this->client->get_tech()->result_array();
    $data['solutions'] = $this->client->get_solution()->result_array();

    $this->load->view('templates/header', $data);
    $this->load->view('article_news');
    $this->load->view('templates/footer');
  }

  public function single_article($slug)
  {
    $data['title'] = 'Article and News';
    $data['technologies'] = $this->client->get_tech()->result_array();
    $data['solutions'] = $this->client->get_solution()->result_array();
    $data['article'] = $this->db->get_where('article', ['slug_id' => $slug])->row();

    $this->load->view('article/header', $data);
    $this->load->view('article/single_article');
    $this->load->view('article/footer');
  }

  public function single_event($slug)
  {
    $data['title'] = 'Article and News';
    $data['technologies'] = $this->client->get_tech()->result_array();
    $data['solutions'] = $this->client->get_solution()->result_array();
    $data['article'] = $this->db->get_where('event', ['slug_id' => $slug])->row();

    $this->load->view('article/header', $data);
    $this->load->view('article/single_event');
    $this->load->view('article/footer');
  }

  public function event()
  {
    $this->load->library('pagination');
    $config['base_url'] = base_url('insight/event/');
    $config['total_rows'] = $this->article->count_event();
    $config['per_page'] = 6;

    $this->pagination->initialize($config);

    $data['title'] = 'R17 Event';
    $data['start'] = $this->uri->segment(3);
    if ($data['start'] == NULL) {
      $start = 0;
    } else {
      $start = $data['start'];
    }

    $data['technologies'] = $this->client->get_tech()->result_array();
    $data['solutions'] = $this->client->get_solution()->result_array();
    $data['events'] = $this->article->get_event($start, $config['per_page'])->result_array();

    $this->load->view('templates/header', $data);
    $this->load->view('event');
    $this->load->view('templates/footer');
  }

  public function search_article()
  {
  }
}
