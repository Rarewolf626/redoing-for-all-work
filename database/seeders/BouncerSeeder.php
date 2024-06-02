<?php

namespace Database\Seeders;

use App\Models\MediaFile;
use App\Models\User;
use Bouncer;
use Illuminate\Database\Seeder;

class BouncerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bouncer::allow('admin')->everything();
        Bouncer::allow('regular')->toOwn(MediaFile::class)->to(['list', 'view', 'create', 'edit', 'delete']);
        Bouncer::allow('regular')->to('edit-profile', User::class);
    }
}
