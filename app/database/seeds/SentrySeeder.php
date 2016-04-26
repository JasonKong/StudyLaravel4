<?php

class SentrySeeder extends Seeder {

  public function run()
  {
    DB::table('users')->delete();
    DB::table('groups')->delete();
    DB::table('users_groups')->delete();
 
    Sentry::getUserProvider()->create(array(
      'email'      => 'jasonkongnz@gmail.com',
      'password'   => "123456",
      'first_name' => 'Jason',
      'last_name'  => 'Kong',
      'activated'  => 1,
    ));
 
    Sentry::getGroupProvider()->create(array(
      'name'        => 'Admin',
      'permissions' => ['admin' => 1],
    ));
 
    // add user into the user group
    $adminUser  = Sentry::getUserProvider()->findByLogin('jasonkongnz@gmail.com');
    $adminGroup = Sentry::getGroupProvider()->findByName('Admin');
    $adminUser->addGroup($adminGroup);
  }
}