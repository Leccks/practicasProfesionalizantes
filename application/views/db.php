<?php
$dataCon = new mysqli("localhost","root","");
$query = "SHOW DATABASES LIKE 'practicas'";
$envio = $dataCon->query($query);
if($envio->num_rows == 0){
  $query = "create database practicas";
  $dataCon->query($query);
  $dataCon = new mysqli("localhost","root","","practicas");
  $query = "create table usuarios(id integer NOT NULL AUTO_INCREMENT, nombre varchar(40),mail varchar(50),
    password varchar(30),admin bit,PRIMARY KEY(id))";
  $dataCon->query($query);
  $query = "create table productos(id integer NOT NULL AUTO_INCREMENT, nombre varchar(40),descripcion varchar(150),
    precio float,stock int(4),PRIMARY KEY(id))";
  $dataCon->query($query);
}
?>