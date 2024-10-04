<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Autor extends Model
{
    use HasFactory;
    Protected $table = 'autores';
    public function up() {
        Schema::create('autores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('biografia')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->timestamps();
        });
    }
    
    
}