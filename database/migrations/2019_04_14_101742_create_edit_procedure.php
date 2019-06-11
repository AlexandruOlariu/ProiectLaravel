<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE PROCEDURE updatecomp(IN varID INT,IN strNume varchar(50),IN strTip varchar(20),IN strProducator varchar(20),IN intPret INT,IN strImg varchar(1000),IN strDescriere varchar(1000)) BEGIN UPDATE componente SET Nume=strNume,tip=strTip,Producator=strProducator,Pret=intPret,Img=strImg,Descriere=strDescriere where ID=varID; END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS updatecomp');
    }
}
