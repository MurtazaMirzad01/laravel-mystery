<?php

use App\Models\User;

it ('registers a user', function () {
    visit('/register')
        ->fill('name', 'Ahmad Khan')
        ->fill('email', 'ahmad@gmail.com')
        ->fill('password', 'password123')
        ->press('@register-button')
        ->assertPathIs('/ideas');

    expect(User::count())->toBe(1);

    $this->assertAuthenticated();


});
