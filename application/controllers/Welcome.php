<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Rizki Tujuhbelas Kelola';

		$this->load->view('templates/header', $data);
		$this->load->view('index');
		$this->load->view('templates/footer');
	}

	public function about()
	{
		$data['title'] = 'About Rizki Tujuhbelas Kelola';

		$this->load->view('templates/header', $data);
		$this->load->view('about');
		$this->load->view('templates/footer');
	}

	public function digital_age_networking()
	{
		$data['title'] = 'Digital Age Networking';

		$this->load->view('templates/header', $data);
		$this->load->view('digital_age_networking');
		$this->load->view('templates/footer');
	}

	public function business_continuity_collaboration()
	{
		$data['title'] = 'Business Continutiy Collaboration';

		$this->load->view('templates/header', $data);
		$this->load->view('business_continuity_collaboration');
		$this->load->view('templates/footer');
	}

	public function security_intelligence()
	{
		$data['title'] = 'Security and Intelligence';

		$this->load->view('templates/header', $data);
		$this->load->view('security_intelligence');
		$this->load->view('templates/footer');
	}

	public function unified_network_infrastructure()
	{
		$data['title'] = 'Unified Network Infrastructure';

		$this->load->view('templates/header', $data);
		$this->load->view('unified_network_infrastructure');
		$this->load->view('templates/footer');
	}

	public function private_cloud()
	{
		$data['title'] = 'Private Cloud Computing for Mission Critical System';

		$this->load->view('templates/header', $data);
		$this->load->view('private_cloud');
		$this->load->view('templates/footer');
	}

	public function internet_of_things()
	{
		$data['title'] = 'Internet of Things (IoT)';

		$this->load->view('templates/header', $data);
		$this->load->view('internet_of_things');
		$this->load->view('templates/footer');
	}

	public function collaboration_communication()
	{
		$data['title'] = 'Collaboration & Communication';

		$this->load->view('templates/header', $data);
		$this->load->view('collaboration_communication');
		$this->load->view('templates/footer');
	}

	public function secured_communication()
	{
		$data['title'] = 'Secured Communication';

		$this->load->view('templates/header', $data);
		$this->load->view('secured_communication');
		$this->load->view('templates/footer');
	}

	public function military_grade()
	{
		$data['title'] = 'Military Grade Communication System';

		$this->load->view('templates/header', $data);
		$this->load->view('military_grade');
		$this->load->view('templates/footer');
	}

	public function digital_workplace()
	{
		$data['title'] = 'Digital Workplace';

		$this->load->view('templates/header', $data);
		$this->load->view('digital_workplace');
		$this->load->view('templates/footer');
	}

	public function r17_integrated()
	{
		$data['title'] = 'R17 Integrated Security Solutions (RISS)';

		$this->load->view('templates/header', $data);
		$this->load->view('r17_integrated');
		$this->load->view('templates/footer');
	}

	public function location_services()
	{
		$data['title'] = 'R17 Integrated Security Solutions (RISS)';

		$this->load->view('templates/header', $data);
		$this->load->view('location_services');
		$this->load->view('templates/footer');
	}

	public function tech_security_intelligence()
	{
		$data['title'] = 'Security Intelligence';

		$this->load->view('templates/header', $data);
		$this->load->view('tech_security_intelligence');
		$this->load->view('templates/footer');
	}

	public function it_service_management()
	{
		$data['title'] = 'IT Service Management';

		$this->load->view('templates/header', $data);
		$this->load->view('it_service_management');
		$this->load->view('templates/footer');
	}

	public function it_enterprise_architecture()
	{
		$data['title'] = 'IT Enterprise Architecture';

		$this->load->view('templates/header', $data);
		$this->load->view('it_enterprise_architecture');
		$this->load->view('templates/footer');
	}

	public function secure_cyber()
	{
		$data['title'] = 'Secure Cyber Ecosystem Monitoring Center (SCEMC)';

		$this->load->view('templates/header', $data);
		$this->load->view('secure_cyber');
		$this->load->view('templates/footer');
	}

	public function radio_communication()
	{
		$data['title'] = 'Radio Communication System – Combat Vehicles';

		$this->load->view('templates/header', $data);
		$this->load->view('radio_communication');
		$this->load->view('templates/footer');
	}

	public function data_digital_forensic()
	{
		$data['title'] = 'Data Digital Forensic';

		$this->load->view('templates/header', $data);
		$this->load->view('data_digital_forensic');
		$this->load->view('templates/footer');
	}

	public function contact_us()
	{
		$data['title'] = 'Contacts Rizki Tujuhbelas Kelola';

		$this->load->view('templates/header', $data);
		$this->load->view('contact_us');
		$this->load->view('templates/footer');
	}

	public function career()
	{
		$data['title'] = 'Career Rizki Tujuhbelas Kelola';

		$this->load->view('templates/header', $data);
		$this->load->view('career');
		$this->load->view('templates/footer');
	}
}
