<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeleteTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE TRIGGER produse.after_delete
AFTER DELETE ON produse.componente
FOR EACH ROW
BEGIN
                INSERT INTO componente_updated(nume,status,edtime)VALUES(OLD.nume,'DELETED',NOW());
                END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       DB::unprepared("DROP TRIGGER IF EXISTS after_delete");
    }
}
