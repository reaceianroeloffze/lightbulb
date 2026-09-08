<?php

declare(strict_types=1);

use App\Models\Idea;
use App\Models\User;

test('it belongs to a user', function (): void {
    $idea = Idea::factory()->create();

    expect($idea->user)->toBeInstanceOf(User::class);
});

test('it can have steps', function (): void {
    $idea = Idea::factory()->create();

    expect($idea->steps)->toBeEmpty();

    $idea->steps()->create([
        'description' => 'Put thought to pen',
    ]);

    expect($idea->fresh()->steps)->toHaveCount(1);
});
