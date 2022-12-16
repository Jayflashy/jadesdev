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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('description')->nullable();                       
            $table->string('address')->nullable();                      
            $table->string('phone')->nullable();                       
            $table->string('phone_2')->nullable();                      
            $table->string('email')->nullable();                        
            $table->string('email_2')->nullable();  
            $table->string('favicon')->nullable(); 
            $table->string('logo')->nullable();    
            $table->string('facebook')->nullable();  
            $table->string('twitter')->nullable(); 
            $table->string('instagram')->nullable();    
            $table->string('whatsapp')->nullable();
            $table->string('office_hour')->nullable();  
            $table->string('google_analytics')->nullable();                     
            $table->string('seo_title')->nullable();                     
            $table->string('seo_keywords')->nullable();
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
        Schema::dropIfExists('settings');
    }
};
