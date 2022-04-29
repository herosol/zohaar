<?php
class Pages extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pages_model', 'page');
    }

    function about()
    {
        $meta = $this->page->getMetaContent('about_us');
        $this->data['page_title'] = $meta->page_name;        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('about_us');
        if ($data) {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            $this->load->view('about', $this->data);
        } else {
            show_404();
        }
    }

    function services()
    {
        $meta = $this->page->getMetaContent('services');
        $this->data['page_title'] = $meta->page_name;        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('services');
        if ($data) {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            $this->data['services'] = $this->master->get_data_rows('services', ['status' => '1']);
            $this->load->view('services', $this->data);
        } else {
            show_404();
        }
    }
    
    function opportunities()
    {
        $meta = $this->page->getMetaContent('opportunities');
        $this->data['page_title'] = $meta->page_name;        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('opportunities');
        if ($data) {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            $this->data['opportunities'] = $this->master->get_data_rows('opportunities', ['status' => '1']);
            $this->load->view('opportunities', $this->data);
        } else {
            show_404();
        }
    }

    function contact()
    {
        if ($vals = $this->input->post()) {
            $res = array();
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 0;
            $res['status'] = 0;
            $res['frm_reset'] = 0;
            $res['redirect_url'] = 0;

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('subject', 'Subject', 'required');
            $this->form_validation->set_rules('phone', 'Phone Number', 'required');
            $this->form_validation->set_rules('msg', 'Message', 'required');
            if ($this->form_validation->run() === FALSE) {
                $res['status'] = 0;
                $res['msg'] = validation_errors();
            } else {
                $vals['msg'] = html_escape($this->input->post('msg'));
                $vals['created_date'] = date('Y-m-d H:i:s');
                $vals['status'] = 0;
                $this->master->save('contact', $vals);
                $vals['site_email'] = $this->data['site_settings']->site_email;
                $vals['site_noreply_email'] = $this->data['site_settings']->site_noreply_email;
                $okmsg = send_email($vals);
                if ($okmsg) {
                    $res['msg'] = 'Message send sucessfully!';
                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                    $res['hide_msg'] = 1;
                    // $res['redirect_url'] = site_url('contact-us');
                } else {
                    $res['msg'] = 'Message send sucessfully!';
                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                    $res['hide_msg'] = 1;
                }
            }
            exit(json_encode($res));
        } else {
            $meta = $this->page->getMetaContent('contact');
            $this->data['page_title'] = $meta->page_name;
            $this->data['slug'] = $meta->slug;
            $data = $this->page->getPageContent('contact');
            if ($data) {
                $this->data['content'] =  unserialize($data->code);
                $this->data['meta_desc'] = json_decode($meta->content);
                $this->load->view('contact', $this->data);
            } else {
                show_404();
            }
        }
    }


    function error()
    {
        $this->load->view('pages/404', $this->data);
    }
}
