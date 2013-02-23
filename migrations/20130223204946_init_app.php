<?php

use Phinx\Migration\AbstractMigration;

class InitApp extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $album = $this->table('album');
        $album->addColumn('artist', 'string', array('limit'=>100))
              ->addColumn('title', 'string', array('limit'=>100))
              ->save();
        
        $this->query("INSERT INTO album (artist, title) VALUES  ('The  Military  Wives',  'In  My  Dreams');");
        $this->query("INSERT INTO album (artist, title) VALUES  ('Adele',  '21');");
        $this->query("INSERT INTO album (artist, title) VALUES  ('Bruce  Springsteen',  'Wrecking Ball (Deluxe)');");
        $this->query("INSERT INTO album (artist, title) VALUES  ('Lana  Del  Rey',  'Born  To  Die');");
        $this->query("INSERT INTO album (artist, title) VALUES  ('Gotye',  'Making  Mirrors');");
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('album');
    }
}