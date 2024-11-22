<?= $this->extend('layout/layout') ?>
<?= $this->section('header') ?>
Crear
<?= view('partials/session.php') ?>
<?= $this->endSection('header') ?>
    
<?= $this->section('contenido') ?>

    <form method ="POST" action= "create">
        <!-- <label for="titulo"> Titulo </label>
        <input type="text" name="titulo" id="titulo" placeholder="Titulo">
        <label for="descripcion"> Descripcion </label>
        <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion">
        <input type="submit" value="Enviar"> -->
        <?= view('Categoria/_form', ['op'=> 'Crear'])?>
    </form>
<?= $this->endSection('contenido') ?>