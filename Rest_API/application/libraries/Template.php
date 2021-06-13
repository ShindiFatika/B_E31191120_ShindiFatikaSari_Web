<?php
class Template
{
    protected $_ci;
    function __construct()
    {
        $this->_ci = &get_instance();
    }
    function views($template = null, $data = null)
    {
        if ($template != null) {
            $data['head'] = $this->_ci->load->view('Admin/_Template/head', $data, true);
            $data['topbar'] = $this->_ci->load->view('Admin/_Template/topbar', $data, true);
            $data['sidebar'] = $this->_ci->load->view('Admin/_Template/sidebar', $data, true);
            $data['konten'] = $this->_ci->load->view($template, $data, TRUE);
            $data['content'] = $this->_ci->load->view('Admin/_Template/content', $data, true);
            $data['footer'] = $this->_ci->load->view('Admin/_Template/footer', $data, true);

            echo $data['template'] = $this->_ci->load->view('Admin/_Template/template', $data, true);
        }
    }
}
