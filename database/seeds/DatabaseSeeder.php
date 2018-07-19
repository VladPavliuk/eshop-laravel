<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CreateCategories::class);
        $this->call(CreatePricesTypes::class);
        $this->call(CreateUsersTypes::class);
        $this->call(CreateColors::class);
        $this->call(CreateSizes::class);
        $this->call(CreateLeonardoProducts::class);
        $this->call(CreateFrodoProducts::class);
        $this->call(CreateRikoProducts::class);
        $this->call(CreateFurniture::class);
        $this->call(CreateAdmins::class);
        $this->call(CreateDiscounts::class);
        $this->call(CreatePrices::class);
        $this->call(CreateUsersTypesPricesTypesRelations::class);
        $this->call(CreateUsers::class);
        $this->call(CreateUsersTypesDiscounts::class);
        $this->call(CreateTransportationOptions::class);
        $this->call(CreatePaymentsFormats::class);
        $this->call(CreateCategoryTags::class);
        $this->call(CreateCategoriesTagsRelations::class);
        $this->call(CreateProductsImages::class);
    }
}
