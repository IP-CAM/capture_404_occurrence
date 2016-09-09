<?php
/*
 * @support
 * http://www.opensourcetechnologies.com/contactus.html
 * sales@opensourcetechnologies.com
 * */
class ControllerToolCapture404Occurrence extends Controller {
	private $error = array();
	public function index() {
		$this->load->language('tool/capture_404_occurrence');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('tool/capture_404_occurrence');

		$this->getList();
	}

	public function getList() {
		$this->load->language('tool/capture_404_occurrence');
		$this->load->model('tool/capture_404_occurrence');
		$this->document->setTitle($this->language->get('heading_title'));

		$data['heading_title'] = $this->language->get('heading_title');
		$data['text_no_results']=$this->language->get('text_no_results');
		$data['text_list'] = $this->language->get('text_list');
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'request_uri';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}
		
		$url='';
		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], 'SSL')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('tool/capture_404_occurrence', 'token=' . $this->session->data['token'], 'SSL')
		);
		$data['delete'] = $this->url->link('tool/capture_404_occurrence/delete', 'token=' . $this->session->data['token'] . $url, 'SSL');
		
		$start=($page - 1) * $this->config->get('config_limit_admin');
		$limit=$this->config->get('config_limit_admin');
		$results=$this->model_tool_capture_404_occurrence->get404Occurrences($sort,$order,$start,$limit);
		$capture_404_occurrence_total=$this->model_tool_capture_404_occurrence->getTotal404Occurrence();
		$data['capture_404_occurrences']=array();
		foreach($results as $result)
		{
			$data['capture_404_occurrences'][]=array(
			'id'=>$result['id'],
			'request_uri'=>$result['request_uri'],
			'occurrence'=>$result['occurrence']
			);
		}
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}
		
		$url='';
		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}
		
		
		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}
		$data['column_serial_no'] = $this->language->get('column_serial_no');
		$data['column_request_uri'] = $this->language->get('column_request_uri');
		$data['column_occurrence'] = $this->language->get('column_occurrence');
		$data['text_confirm'] = $this->language->get('text_confirm');
		$data['button_delete']=$this->language->get('button_delete');
		
		
		
		
		
		$url='';
		
		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		
		$data['sort_request_uri'] = $this->url->link('tool/capture_404_occurrence', 'token=' . $this->session->data['token'] . '&sort=request_uri' . $url, 'SSL');
		$data['sort_occurrence'] = $this->url->link('tool/capture_404_occurrence', 'token=' . $this->session->data['token'] . '&sort=occurrence' . $url, 'SSL');
		
		$url='';
		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}
		
		$pagination = new Pagination();
		$pagination->total = $capture_404_occurrence_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('error/capture_404_occurrence', 'token=' . $this->session->data['token'] . $url . '&page={page}', 'SSL');
		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($capture_404_occurrence_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($capture_404_occurrence_total - $this->config->get('config_limit_admin'))) ? $capture_404_occurrence_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $capture_404_occurrence_total, ceil($capture_404_occurrence_total / $this->config->get('config_limit_admin')));
		$data['sort'] = $sort;
		$data['order'] = $order;
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('tool/capture_404_occurrence.tpl', $data));
	}
	public function delete() {
		$this->load->language('tool/capture_404_occurrence');
		$this->load->model('tool/capture_404_occurrence');
		$this->session->data['success'] = $this->language->get('text_success');
		$this->document->setTitle($this->language->get('heading_title'));

		

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $capture_404_occurrence_id) {
				$this->model_tool_capture_404_occurrence->delete404Occurrence($capture_404_occurrence_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('tool/capture_404_occurrence', 'token=' . $this->session->data['token'] . $url, 'SSL'));
		}

		$this->getList();
	}
	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'catalog/product')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}
