<?php

namespace Kunststube\Routing;

require_once 'route.php';

class CaseInsensitiveRoute extends Route {

    /**
     * Builds a complete case-insensitive regex that will match a valid URL.
     *
     * @return string
     */
    protected function buildRegex() {
        return sprintf('/^%s%s$/i', $this->regex, $this->wildcard ? '(.*)' : null);
    }

}