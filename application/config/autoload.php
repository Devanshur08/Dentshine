<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$autoload['packages'] = array();


$autoload['libraries'] = array('database','session','email');


$autoload['drivers'] = array();


$autoload['helper'] = array('url','file','form');


$autoload['config'] = array();

$autoload['language'] = array();


$autoload['model'] = array('doctor_model','appointment_model','patient_model','user_model','treatment_model','appointment_book_model','contactus_model');
