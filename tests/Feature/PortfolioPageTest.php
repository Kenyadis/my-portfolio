<?php

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioPageTest extends TestCase
{
    public function test_portfolio_page_includes_github_and_interactive_features(): void
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertSee('Ken Denver B. Castillo')
            ->assertSee('https://github.com/choeymauzar/abrakeeps', false)
            ->assertSee('id="repo-search"', false)
            ->assertSee('id="back-to-top"', false)
            ->assertSee('id="scroll-progress-bar"', false)
            ->assertSee('data-copy="kbernardez83@gmail.com"', false)
            ->assertSee('aria-controls="mobile-menu"', false)
            ->assertSee('application/ld+json', false);
    }
}
