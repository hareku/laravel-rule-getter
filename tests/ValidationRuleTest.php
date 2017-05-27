<?php

namespace Hareku\LaravelRule\Tests;

use Tests\TestCase;
use Hareku\LaravelRule\ValidationRuleContract as ValidationRule;
use Hareku\LaravelRule\RuleNotFoundException;

class ValidationRuleTest extends TestCase
{
    /**
     * @test
     */
    public function it_gets_rule()
    {
        $class = resolve(ValidationRule::class);

        $this->assertEquals($class->get('user.name'), 'required|min:1|max:20');
        $this->assertEquals($class->get('user.email'), 'required|email|max:255|unique:users');
        $this->assertEquals($class->get('user.password'), 'required|min:6|max:100|confirmed');
    }

    /**
     * @test
     */
    public function it_gets_rule_using_helper_function()
    {
        $this->assertEquals(rule('user.name'), 'required|min:1|max:20');
    }

    /**
     * @test
     */
    public function it_throws_an_exception_when_the_rule_does_not_exist()
    {
        $class = resolve(ValidationRule::class);

        $this->expectException(RuleNotFoundException::class);

        $class->get('user.does_not_exist_rule');
    }
}
