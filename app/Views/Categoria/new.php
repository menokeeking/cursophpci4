<?= $this->extend('layout/layout') ?>
<?= $this->section('header') ?>
Crear
<?= $this->endSection('header') ?>
    
<?= $this->section('contenido') ?>
<?= view('partials/form_error') ?>
<form method ="POST" action= "create">
    <!-- <label for="titulo"> Titulo </label>
    <input type="text" name="titulo" id="titulo" placeholder="Titulo">
    <input type="submit" value="Enviar"> -->
    <?= view('Categoria/_form', ['op'=> 'Crear'])?>
</form>
<?= $this->endSection('contenido') ?>