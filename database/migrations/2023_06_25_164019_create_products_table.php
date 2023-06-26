<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer('ProId');
            $table->integer('Code');
            $table->string('Name');
            $table->integer('YourPrice');
            $table->integer('YourPriceWithFees');
            $table->string('CommodityCode');
            $table->integer('GarbageFee');
            $table->integer('AuthorFee');
            $table->integer('ValuePack');
            $table->integer('ValuePackQty');
            $table->string('Warranty');
            $table->string('CommodityName');
            $table->integer('DealerPrice');
            $table->integer('EndUserPrice');
            $table->integer('Vat');
            //$table->string('PartNumber');

            $table->string('OnStockCount');
            $table->string('CategoryCode');
            $table->string('ProducerName');
            $table->string('NameB2C');
            $table->string('MultipleQuantity');
            $table->string('Description');
            $table->string('IsTop');
            $table->string('InfoCode');
            $table->string('ProducerCode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
