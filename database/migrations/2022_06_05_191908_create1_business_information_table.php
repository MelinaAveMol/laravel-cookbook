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
        Schema::create('_business__information', function (Blueprint $table) {
            $table->id();
            $table->string('commercial_strategies');
            $table->string('business_methods');
            $table->string('corporate_plans');
            $table->string('management_systems');
            $table->string('finances');
            $table->string('business_opportunities');
            $table->string('marketing_sales');
            $table->string('sales_target');
            $table->string('sales_statistics');
            $table->string('market_share');
            $table->string('pricing_statics');
            $table->string('marketing_surveys');
            $table->string('market_reports');
            $table->string('sales_techniques');
            $table->string('price_lists');
            $table->string('discounts_structures');
            $table->string('advertising_material');
            $table->string('investment_arrangements');
            $table->string('terms_of_agreements');
            $table->string('financial_position');
            $table->string('financial_structure');
            $table->string('financial_results');
            $table->string('name');
            $table->string('address');
            $table->integer('mobile');
            $table->string('nature');
            $table->string('relationship');
            $table->boolean('affiliate');
            $table->boolean('active');
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
        Schema::dropIfExists('_business__information');
    }
};
