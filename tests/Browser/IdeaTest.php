<?php

use App\Models\User;

it ('shows all ideas', function(){
    $this->actingAs( $user = User::factory()->create());
    $user->ideas()->create([
       'description' => 'Build a custom idea',

    ]);
    visit('/ideas')
        ->assertSee('Build a custom idea');
});

it ('shows a single idea', function(){
    $this->actingAs($user = User::factory()->create());

    $idea = $user->ideas()->create([
        'description' => 'Build a custom idea',
    ]);

    visit('/ideas/'. $idea->id)
    ->assertSee('Build a custom idea');
});

it('shows an edit form to update an idea', function () {
    $this->actingAs($user = User::factory()->create());

    $idea = $user->ideas()->create([
        'description' => 'Build a custom idea',
    ]);

    visit("/ideas/{$idea->id}/edit")
        ->assertSee('Build a custom idea')
        ->assertSee('Update');
});
