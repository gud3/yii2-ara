<?php

namespace gud3\ara;

/**
 * Trait ErrorTrait
 * @package gud3\ara
 */
trait ErrorTrait
{
    /**
     * @return string
     */
    public function getErrorsString()
    {
        if ($this->hasErrors()) {
            return implode(PHP_EOL, $this->getFirstErrors());
        }

        return '';
    }
}