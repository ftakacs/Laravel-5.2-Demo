<?php



use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Role;

class RoleTableSeeder extends Seeder{

    public function run()
    {

        if (App::environment() === 'production') {
            exit('I just stopped you getting fired. Love, Amo.');
        }

        DB::table('roles')->truncate();

        Role::create([
        		'id'            => 1,
        		'name'          => 'User',
        		'description'   => 'A standard user that can have a licence assigned to them. No administrative features.'
        ]);

        Role::create([
            'id'            => 2,
            'name'          => 'Administrator',
            'description'   => 'Full access.'
        ]);


    }

}