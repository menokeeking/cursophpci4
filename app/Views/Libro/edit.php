<?= $this->extend('layout/layout') ?>
<?= $this->section('header') ?>
  Editar
<?= $this->endSection('header') ?>
    
<?= $this->section('contenido') ?>

    <?= view('partials/form_error') ?>
    <form method ="POST" action= "../update/<?=$libro['id'] ?>">
        <!-- <label for="titulo"> Editar Libro</label>
        <input type="text" name="titulo" id="titulo" value="<?= $libro['titulo']?>"/>
        <label for="descripcion"> Editar Descripcion</label>
        <input type="text" name="descripcion" id="descripcion" value="<?= $libro['descripcion']?>"/>
        <input type="submit" value="Enviar"> -->
        <?= view('Libro/_form', ['op'=> 'Actualizar'])?>
    </form>
<?= $this->endSection('contenido') ?>