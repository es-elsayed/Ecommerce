<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('billing_email')->nullable();
            $table->string('billing_name')->nullable();
            $table->string('billing_phone')->nullable();

            $table->string('billing_region')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('billing_zip')->nullable();

            $table->string('billing_discount_code')->nullable();
            $table->integer('billing_discount')->default(0);
            $table->integer('billing_subtotal');
            $table->integer('billing_total');
            $table->integer('billing_tax');

            $table->string('billing_name_on_card')->nullable();
            $table->string('payment_gateway')->default('paymob');
            $table->string('error')->nullable();

            $table->boolean('shipped')->default(false);
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
        Schema::dropIfExists('orders');
    }
}
