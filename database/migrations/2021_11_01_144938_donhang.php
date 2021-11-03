<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class donhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('donhang', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string("email_user");
        
        $table->timestamp("ngay_dat");
        $table->date("ngay_giao_du_kien");
        $table->integer("tong_gia_tien");
        $table->string("trang_thai");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('sanphams');
    }
}
