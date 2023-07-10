<?php
$p = $_GET['p'] ?? 'home';

if (file_exists("modul/$p.php")) {
  include "modul/$p.php";
} else {
  include 'na.php';
}
