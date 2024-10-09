<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Livro extends Model
{
    use HasFactory;
    public function up() {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descricao')->nullable();
            $table->date('data_publicacao');
            $table->foreignId('categoria_id')->constrained('categorais')->onDelete('cascade'); // Relacionamento belongsTo com Categoria
            $table->timestamps();
        });
    }
}