<?php

use Phinx\Migration\AbstractMigration;

class CreateRecordsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
    	$dispatch = $this->table('records', ['id' => true]);
        $dispatch->addColumn('invoice_no','integer')
                 ->addColumn('owner_name','string', ['limit' => 100])
                 ->addColumn('address','string', ['limit' => 1000])
                 ->addColumn('phone','string', ['limit' => 30])
                 ->addColumn('stacker','string', ['limit' => 50])
                 ->addColumn('supervisor','string', ['limit' => 50])
                 ->addColumn('driver_name','string', ['limit' => 100])
                 ->addColumn('license','string', ['limit' => 200])
                 ->addColumn('drivers_contact','string', ['limit' => 50])
                 ->addColumn('date','datetime')
                 ->addColumn('created_at','datetime')
                 ->addColumn('updated_at','datetime')
                 ->save();
    }
}
