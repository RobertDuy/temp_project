<?php
    class ControllerTravelDetail extends Controller{
        public function index(){
            $this->document->setTitle($this->config->get('config_title'));
            $this->document->setDescription($this->config->get('config_meta_description'));

            $this->data['heading_title'] = $this->config->get('config_title');

            if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/travel/detail.tpl')) {
                $this->template = $this->config->get('config_template') . '/template/travel/detail.tpl';
            } else {
                $this->template = 'default/template/travel/detail.tpl';
            }
            $this->children = array(
                'common/header',
                'common/footer'
            );

            $this->response->setOutput($this->render());
        }
    }
?>