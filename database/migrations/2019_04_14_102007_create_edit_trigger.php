<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE TRIGGER produse.MysqlTrigger2
AFTER UPDATE ON produse.componente
FOR EACH ROW
BEGIN
                INSERT INTO componente_updated(Nume,status,edtime)VALUES(New.Nume,'UPDATED',NOW());
                END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS MysqlTrigger2');
    }
}
