<?php
use Migrations\AbstractMigration;

class Users extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');

        $table
            ->addColumn('username', 'string',[
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('password', 'string',[
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('active', 'boolean',[
                'default' => 0,
                'null' => true,
            ])
            ->addColumn('created', 'timestamp',[
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime',[
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

    }

    public function down()
    {
        $this->table('users')->drop()->save();
    }
}
