<?= $this->extend('layout/layout') ?>
<?= $this->section('header') ?>
Mostrar 
<?= $this->endSection('header') ?>
    
<?= $this->section('contenido') ?>
    <h1>Titulo: <?= $categoria['titulo']?></h1>
<?= $this->endSection('contenido') ?>