<?php

namespace Database\Seeders;

use App\Models\Plugin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PluginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		Plugin::updateOrCreate([
	        'name' => 'LeadManager',
	        'namespace' => 'App\\Plugins\\LeadManager',
	        'enabled' => true,
	    ]);
    }
}
