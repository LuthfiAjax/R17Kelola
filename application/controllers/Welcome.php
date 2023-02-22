<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Assets_model', 'client');
	}

	public function index()
	{
		$data['title'] = 'Rizki Tujuhbelas Kelola';
		$data['clients'] = $this->client->get_client()->result_array();
		$data['partners'] = $this->client->get_partner()->result_array();
		$data['technologies'] = $this->client->get_tech()->result_array();
		$data['solutions'] = $this->client->get_solution()->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('index');
		$this->load->view('templates/footer');
	}

	public function about()
	{
		$data['technologies'] = $this->client->get_tech()->result_array();
		$data['solutions'] = $this->client->get_solution()->result_array();
		$data['sertifikatpro'] = $this->client->get_sertif_pro()->result_array();
		$data['sertifikat'] = $this->client->get_sertif()->result_array();
		$data['title'] = 'About Rizki Tujuhbelas Kelola';

		$this->load->view('templates/header', $data);
		$this->load->view('about');
		$this->load->view('templates/footer');
	}

	public function project()
	{
		$data['technologies'] = $this->client->get_tech()->result_array();
		$data['solutions'] = $this->client->get_solution()->result_array();
		$data['title'] = 'Project R17';

		$this->load->view('templates/header', $data);
		$this->load->view('project');
		$this->load->view('templates/footer');
	}

	public function digital_age_networking()
	{
		$data['technologies'] = $this->client->get_tech()->result_array();
		$data['solutions'] = $this->client->get_solution()->result_array();
		$data['title'] = 'Digital Age Networking';

		$this->load->view('templates/header', $data);
		$this->load->view('digital_age_networking');
		$this->load->view('templates/footer');
	}

	public function business_continuity_collaboration()
	{
		$data['technologies'] = $this->client->get_tech()->result_array();
		$data['solutions'] = $this->client->get_solution()->result_array();
		$data['title'] = 'Business Continutiy Collaboration';

		$this->load->view('templates/header', $data);
		$this->load->view('business_continuity_collaboration');
		$this->load->view('templates/footer');
	}

	public function security_intelligence()
	{
		$data['technologies'] = $this->client->get_tech()->result_array();
		$data['solutions'] = $this->client->get_solution()->result_array();
		$data['title'] = 'Security and Intelligence';

		$this->load->view('templates/header', $data);
		$this->load->view('security_intelligence');
		$this->load->view('templates/footer');
	}

	public function unified_network_infrastructure()
	{
		$data['technologies'] = $this->client->get_tech()->result_array();
		$data['solutions'] = $this->client->get_solution()->result_array();
		$data['title'] = 'Unified Network Infrastructure';

		$this->load->view('templates/header', $data);
		$this->load->view('unified_network_infrastructure');
		$this->load->view('templates/footer');
	}

	public function private_cloud()
	{
		$data['technologies'] = $this->client->get_tech()->result_array();
		$data['solutions'] = $this->client->get_solution()->result_array();
		$data['title'] = 'Private Cloud Computing for Mission Critical System';

		$this->load->view('templates/header', $data);
		$this->load->view('private_cloud');
		$this->load->view('templates/footer');
	}

	public function internet_of_things()
	{
		$data['technologies'] = $this->client->get_tech()->result_array();
		$data['solutions'] = $this->client->get_solution()->result_array();
		$data['title'] = 'Internet of Things (IoT)';

		$this->load->view('templates/header', $data);
		$this->load->view('internet_of_things');
		$this->load->view('templates/footer');
	}

	public function collaboration_communication()
	{
		$data['technologies'] = $this->client->get_tech()->result_array();
		$data['solutions'] = $this->client->get_solution()->result_array();
		$data['title'] = 'Collaboration & Communication';

		$this->load->view('templates/header', $data);
		$this->load->view('collaboration_communication');
		$this->load->view('templates/footer');
	}

	public function secured_communication()
	{
		$data['technologies'] = $this->client->get_tech()->result_array();
		$data['solutions'] = $this->client->get_solution()->result_array();
		$data['title'] = 'Secured Communication';

		$this->load->view('templates/header', $data);
		$this->load->view('secured_communication');
		$this->load->view('templates/footer');
	}

	public function military_grade()
	{
		$data['technologies'] = $this->client->get_tech()->result_array();
		$data['solutions'] = $this->client->get_solution()->result_array();
		$data['title'] = 'Military Grade Communication System';

		$this->load->view('templates/header', $data);
		$this->load->view('military_grade');
		$this->load->view('templates/footer');
	}

	public function digital_workplace()
	{
		$data['technologies'] = $this->client->get_tech()->result_array();
		$data['solutions'] = $this->client->get_solution()->result_array();
		$data['title'] = 'Digital Workplace';

		$this->load->view('templates/header', $data);
		$this->load->view('digital_workplace');
		$this->load->view('templates/footer');
	}

	public function r17_integrated()
	{
		$data['technologies'] = $this->client->get_tech()->result_array();
		$data['solutions'] = $this->client->get_solution()->result_array();
		$data['title'] = 'R17 Integrated Security Solutions (RISS)';

		$this->load->view('templates/header', $data);
		$this->load->view('r17_integrated');
		$this->load->view('templates/footer');
	}

	public function location_services()
	{
		$data['technologies'] = $this->client->get_tech()->result_array();
		$data['solutions'] = $this->client->get_solution()->result_array();
		$data['title'] = 'R17 Integrated Security Solutions (RISS)';

		$this->load->view('templates/header', $data);
		$this->load->view('location_services');
		$this->load->view('templates/footer');
	}

	public function tech_security_intelligence()
	{
		$data['technologies'] = $this->client->get_tech()->result_array();
		$data['solutions'] = $this->client->get_solution()->result_array();
		$data['title'] = 'Security Intelligence';

		$this->load->view('templates/header', $data);
		$this->load->view('tech_security_intelligence');
		$this->load->view('templates/footer');
	}

	public function it_service_management()
	{
		$data['technologies'] = $this->client->get_tech()->result_array();
		$data['solutions'] = $this->client->get_solution()->result_array();
		$data['title'] = 'IT Service Management';

		$this->load->view('templates/header', $data);
		$this->load->view('it_service_management');
		$this->load->view('templates/footer');
	}

	public function it_enterprise_architecture()
	{
		$data['technologies'] = $this->client->get_tech()->result_array();
		$data['solutions'] = $this->client->get_solution()->result_array();
		$data['title'] = 'IT Enterprise Architecture';

		$this->load->view('templates/header', $data);
		$this->load->view('it_enterprise_architecture');
		$this->load->view('templates/footer');
	}

	public function secure_cyber()
	{
		$data['technologies'] = $this->client->get_tech()->result_array();
		$data['solutions'] = $this->client->get_solution()->result_array();
		$data['title'] = 'Secure Cyber Ecosystem Monitoring Center (SCEMC)';

		$this->load->view('templates/header', $data);
		$this->load->view('secure_cyber');
		$this->load->view('templates/footer');
	}

	public function radio_communication()
	{
		$data['technologies'] = $this->client->get_tech()->result_array();
		$data['solutions'] = $this->client->get_solution()->result_array();
		$data['title'] = 'Radio Communication System – Combat Vehicles';

		$this->load->view('templates/header', $data);
		$this->load->view('radio_communication');
		$this->load->view('templates/footer');
	}

	public function data_digital_forensic()
	{
		$data['technologies'] = $this->client->get_tech()->result_array();
		$data['solutions'] = $this->client->get_solution()->result_array();
		$data['title'] = 'Data Digital Forensic';

		$this->load->view('templates/header', $data);
		$this->load->view('data_digital_forensic');
		$this->load->view('templates/footer');
	}

	public function contact_us()
	{
		$data['technologies'] = $this->client->get_tech()->result_array();
		$data['solutions'] = $this->client->get_solution()->result_array();
		$data['title'] = 'Contacts Rizki Tujuhbelas Kelola';

		$this->load->view('templates/header', $data);
		$this->load->view('contact_us');
		$this->load->view('templates/footer');
	}

	public function career()
	{
		$data['technologies'] = $this->client->get_tech()->result_array();
		$data['solutions'] = $this->client->get_solution()->result_array();
		$data['careers'] = $this->client->get_carerr()->result_array();
		$data['title'] = 'Career Rizki Tujuhbelas Kelola';

		$this->load->view('templates/header', $data);
		$this->load->view('career');
		$this->load->view('templates/footer');
	}

	public function career_us($slug)
	{
		$data['careers'] = $this->db->get_where('career', ['slug_jobs' => $slug])->row();
		$data['title'] = 'Career Rizki Tujuhbelas Kelola ';

		$this->load->view('templates/header', $data);
		$this->load->view('career_us');
		$this->load->view('templates/footer');
	}

	public function career_apply()
	{
		// get hitung
		$number1 = $this->input->post('number1');
		$number2 = $this->input->post('number2');
		$hasil = $this->input->post('hasil');

		// get data
		$apply = $this->input->post('apply');
		$email = $this->input->post('email');
		$nama = $this->input->post('nama');
		$phone = $this->input->post('phone');
		$slug = $this->input->post('slug');

		// get file
		$cv = $_FILES['cv']['name'];
		$portofolio = $_FILES['portofolio']['name'];

		$count = $number1 + $number2;
		// cek captcha
		if ($hasil == $count) {
			$cek_candidate = $this->db->get_where('candidate', [
				'apply' => $apply,
				'email_candidate' => $email
			])->row();
			// cek apakah data sudah pernah ada
			if ($cek_candidate == NULL) {
				$config['encrypt_name'] = TRUE;
				$config['allowed_types'] = 'pdf';
				$config['max_size']      = '5120';
				$config['upload_path'] = 'assets/pdf/career/';
				$config['file_ext_tolower'] = TRUE;
				$this->load->library('upload', $config);

				if ($cv != null) {
					$this->upload->do_upload('cv');
					$pdf1 = $this->upload->data('');
					$cv = $pdf1['file_name'];
				} else {
					$cv = null;
				}
				// upload portofolio
				if ($portofolio != null) {
					$this->upload->do_upload('portofolio');
					$pdf2 = $this->upload->data('');
					$portofolio = $pdf2['file_name'];
				} else {
					$portofolio = null;
				}

				$data = array(
					'apply' => $apply,
					'email_candidate' => htmlspecialchars($email),
					'nama_candidate' => htmlspecialchars($nama),
					'phone_candidate' => htmlspecialchars($phone),
					'cv_candidate' => $cv,
					'portofolio_candidate' => $portofolio,
					'time' => time(),
					'form' => 'kelola'
				);
				$status = $this->db->insert('candidate', $data);

				if ($status) {
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your application has been successfully submitted</div>');
					redirect(base_url('career/' . $slug));
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">The system has encountered a problem</div>');
					redirect(base_url('career/' . $slug));
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">You have applied for this job</div>');
				redirect(base_url('career/' . $slug));
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Your calculation result is wrong!</div>');
			redirect(base_url('career/' . $slug));
		}
	}

	public function sitemap()
	{
		$data['articles'] = $this->db->get_where('article', ['tampil' => 1])->result_array();
		$data['events'] = $this->db->get_where('event', ['tampil' => 1])->result_array();
		$this->load->view('sitemap', $data);
	}
}
