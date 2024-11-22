<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Libros extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => TRUE,
                'constraint' => 10,
                'auto_increment' => TRUE
            ],
            'titulo' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => FALSE
            ],
            'descripcion' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE
            ]
        ]);
        //Creamos llave primaria 
        $this->forge->addKey('id', TRUE);

        //Creamos la tabla
        $this->forge->createTable('libros');
    }

    public function down()
    {
        //Borramos la tabla
        $this->forge->dropTable('libros');
    }
}
