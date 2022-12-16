<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();                     
            $table->string('about_title')->nullable();                       
            $table->text('about_text')->nullable();
            $table->string('ser_title')->nullable();                     
            $table->string('ser_des')->nullable();                         
            $table->string('s_t1')->nullable();                     
            $table->string('s_c1')->nullable();                         
            $table->string('s_t2')->nullable();                     
            $table->string('s_c2')->nullable();                         
            $table->string('s_t3')->nullable();                     
            $table->string('s_c3')->nullable();                         
            $table->string('s_t4')->nullable();                     
            $table->string('s_c4')->nullable();
            // why         
            $table->string('why_phone')->nullable();        
            $table->string('why_op1')->nullable();                     
            $table->string('why_op2')->nullable();  
            $table->string('why_title')->nullable();                     
            $table->string('why_content')->nullable();
            // FAQ                       
            $table->string('faq_title')->nullable();                     
            $table->string('faq_q1')->nullable();                         
            $table->string('faq_a1')->nullable();                     
            $table->string('faq_q2')->nullable();                         
            $table->string('faq_a2')->nullable();                     
            $table->string('faq_q3')->nullable();                         
            $table->string('faq_a3')->nullable();  
            // Banner                       
            $table->string('b_t1')->nullable();                     
            $table->string('b_t2')->nullable();                         
            $table->string('b_text')->nullable();                     
            $table->string('b_img')->nullable();                         
            $table->string('pro_title')->nullable();                     
            $table->string('pro_des')->nullable();  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sections');
    }
};
