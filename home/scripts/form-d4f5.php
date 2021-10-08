<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Conto do Site',
    'email_message' => 'Nova solicitação do Site',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'escolajardimcolibri@gmail.com',
    'to' => 'escolajardimcolibri@gmail.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'name\' is required.'
    )
    ),
    'message' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'message\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>