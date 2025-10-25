<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            // customer info
            $table->string('nama');
            $table->string('no_telp');
            $table->text('alamat');
            // total amount (optional)
            $table->decimal('total', 12, 2)->nullable();
            $table->string('status')->default('pending'); // pending, paid, shipped, etc.
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
?>