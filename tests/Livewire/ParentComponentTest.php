<?php

namespace Tests\Livewire;

use App\Livewire\ParentComponent;
use Livewire\Livewire;
use Tests\TestCase;

class ParentComponentTest extends TestCase
{
    public function test_display_child_contents_after_call(): void
    {
        Livewire::test(ParentComponent::class)
            // Assertion successful
            ->assertSee('Hey!')
            ->call('foo')
            // Failed asserting that ... contains 'Hey!'.
            ->assertSee('Hey!');
    }
}
