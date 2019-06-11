<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsertProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE PROCEDURE insertcomp(IN strNume varchar(50),IN strTip varchar(20),IN strProducator varchar(20),IN intPret INT,IN strImg varchar(1000),IN strDescriere varchar(1000))
                BEGIN
INSERT INTO componente(Nume,tip,Producator,Pret,Img,Descriere) VALUES (strNume,strTip,strProducator,intPret,strImg,strDescriere);
END
                ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         DB::unprepared('DROP PROCEDURE IF EXISTS insertcomp');
    }
}
