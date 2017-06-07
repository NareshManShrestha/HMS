<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Hello extends CI_Controller{
 
 public function index(){
 	echo"this is my index function <br>";
 }
 public function one(){
 $this->load->view('one');
 }
 }
 ?> 