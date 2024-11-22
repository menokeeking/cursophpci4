<?= $this->extend('layout/layout') ?>
<?= $this->section('header') ?>
  Editar
<?= $this->endSection('header') ?>
    
<?= $this->section('contenido') ?>
<?= view('partials/form_error') ?>
<form method ="POST" action= "../update/<?=$categoria['id'] ?>">
    <!-- <label for="titulo"> Editar Categoria</label>
    <input type="text" name="titulo" id="titulo" value="<?= $categoria['titulo']?>"/>
    <input type="submit" value="Enviar"> -->
    <?= view('Categoria/_form', ['op'=> 'Actualizar'])?>
</form>
<?= $this->endSection('contenido') ?>