<?php

function url(){
    return array(
        array(
            'title' => 'Inicio_controller',
            'url' => base_url(), 
        ),
        array(
            'title' => 'Login_controller',
            'url' => base_url('index.php/Login_controller'), 
        ),
    );
}