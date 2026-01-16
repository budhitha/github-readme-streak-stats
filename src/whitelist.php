<?php

/**
 * Check if a GitHub username is allowed based on the whitelist
 *
 * @param string $user GitHub username to check
 * @return bool True if the username is 'budhitha', false otherwise
 */
function isWhitelisted(string $user): bool
{
    return $user === "budhitha";
}
