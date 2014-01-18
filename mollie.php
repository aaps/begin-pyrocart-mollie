<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gateway_Mollie extends PaymentGateway {

    public $title = 'Mollie-ideal';
    public $description = '';
    public $author = 'Aat Karelse';
    public $website = 'http://vuurrosmedia.nl';
    public $version = '1.0';
    
    public $fields = array(
        array(
            'field' => 'options[service]',
            'label' => 'Test mode',
            'rules' => 'trim|max_length[100]|required'
        ),
        array(
            'field' => 'options[partnerid]',
            'label' => 'Partner ID',
            'rules' => 'trim|max_length[100]|required'
        ),
        array(
            'field' => 'options[image]',
            'label' => 'Image',
            'rules' => 'trim|max_length[100]'
        ),
        array(
            'field' => 'options[auto]',
            'label' => 'Self submit',
            'rules' => 'trim|max_length[100]|numeric'
        ),
    );

    public function __construct()
    {
        parent::__construct();
        $this->load->library('firephp');
        $this->load->library('mollie_ideal');
        
    }

    public function form($options) 
    {
        $this->firephp->log("hij gaat door de form heen");
        

        return $options;
    }

    public function run($options)
    {
        // $actions['live'] = 'https://secure.mollie.nl/xml/ideal';
        // $actions['sandbox'] = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
        $options['action'] = 'https://secure.mollie.nl/xml/ideal';
         // $options['issuers'] = issuers($options);
        $options['issuers'] = $this->mollie_ideal->banklist();
        $this->firephp->log("hij gaat door de run heen");
        

        return $options;
    }

    public function callback()
    { 
    $this->firephp->log("hij gaat door de callback heen"); 
    }





}
