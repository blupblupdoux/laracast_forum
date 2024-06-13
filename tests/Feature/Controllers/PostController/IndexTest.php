<?php

use Inertia\Testing\AssertableInertia;

use function Pest\Laravel\get;

test('Should return the correct page', function () {
  get(route('posts.index'))
    ->assertInertia(fn (AssertableInertia $page) => $page
      ->component('Posts/Index')
    );
});

test('Should have posts', function () {
  get(route('posts.index'))
    ->assertInertia(fn (AssertableInertia $page) => $page
      ->has('posts')
    );
});