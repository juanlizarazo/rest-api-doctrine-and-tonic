<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

class Version20150205224510 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $table = $schema->createTable('users');
        $table->addColumn('id', 'integer', array('unsigned' => true));
        $table->addColumn('first_name', 'string', array('length' => 24));
        $table->addColumn('last_name', 'string', array('length' => 24));
        $table->addColumn('email', 'string', array('length' => 254));
        $table->setPrimaryKey(array('id'));
    }

    public function down(Schema $schema)
    {
        $schema->dropTable('users');
    }
}
