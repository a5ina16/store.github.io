<?php

// في المسار database/migrations/{timestamp}_create_products_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // هذا العمود هو المعرف (primary key) للمنتج
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->integer('quantity');
            $table->string('image');
            $table->string('cpu'); // لإضافة المعالج
            $table->string('ram'); // لإضافة الرام
            $table->timestamps(); // هذه الأعمدة يتم إضافتها تلقائيًا (created_at و updated_at)
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
