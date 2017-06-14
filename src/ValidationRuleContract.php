<?php

namespace Hareku\LaravelRule;

interface ValidationRuleContract
{
    /**
     * Get the specified rule.
     *
     * @param  string  $key
     * @return string|array
     *
     * @throws RuleNotFoundException
     */
    public function get(string $key);
}
