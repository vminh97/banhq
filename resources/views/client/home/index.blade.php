<?php
    define('F_HOME', 'home/');
    $this->load->view(FRONTEND.F_HOME.'slogan');
    $this->load->view(FRONTEND.F_HOME.'new', $this->data);
    $this->load->view(FRONTEND.F_HOME.'hot', $this->data);
    $this->load->view(FRONTEND.F_HOME.'best', $this->data);
