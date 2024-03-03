<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Tests\TagParser;

class Jamin extends TestCase
{
    public function test_parses_single_tag()
    {
        $parser = new TagParser;
        
        $this->assertSame(['Jamin'], $parser->parse('Jamin'));
    }

    public function test_fetches_list_of_tags()
    {
        $parser = new TagParser;

        $this->assertSame(['Jamin', 'Leverancier', 'Magazijn'], $parser->parse('Jamin, Leverancier, Magazijn'));
    }
}
