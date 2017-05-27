<?php

namespace Hareku\LaravelRule;

interface ValidationRuleContract
{
    /**
     * Get the specified rule.
     *
     * @param  string  $key
     * @return string
     * 
     * @throws RuleNotFoundException
     */
    public function get(string $key): string;
}
