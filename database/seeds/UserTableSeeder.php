<?php
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

    public function run()
    {
		for($i = 1;$i <= 2; $i++){
			\App\User::create(['name' => 'Customer'.$i, 'email' => 'customer'.$i.'@gmail.com', 'password' => bcrypt('123456')]);
      \App\User::create(['name' => 'Admin'.$i, 'email' => 'admin'.$i.'@gmail.com', 'password' => bcrypt('123456')]);
		}
    }

}
