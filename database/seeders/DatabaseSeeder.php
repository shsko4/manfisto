<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CreateUserSeeder;
use Database\Seeders\PermissionTableSeeder;
use Database\Seeders\TransporterTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionTableSeeder::class);
        $this->call(OfficesTableSeeder::class);
        $this->call(CreateUserSeeder::class);
        $this->call(TransportersTableSeeder::class);
        //$this->call(TransporterTableSeeder::class);
        $this->call(ManfistoTableSeeder::class);
        //$this->call(OfficeSeeder::class);
        $this->call(PenaltyTypeSeeder::class);
        $this->call(TypeOfIdSeeder::class);
        $this->call(PenaltyOwnerSeeder::class);
        $this->call(PenaltySeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(LocalitiesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        //$this->call(CustomSeeder::class);
        $this->call(UnitSeeder::class);



        $this->call(TracksTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(LoadsTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(ManfistoListsTableSeeder::class);
    }
}
