<?php
use Migrations\AbstractMigration;

class AddBidinfoIdToBidmessages extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */

    public function up()
    {
        $table = $this->table('bidmessages');
        $table->addColumn('bidinfo_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->update();
    }

    public function down()
    {
        $table = $this->table('bidmessages');
        $table->removeColumn('bidinfo_id');
        $table->update();
    }
}
