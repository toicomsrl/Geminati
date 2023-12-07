<?php
class blacklist
{

    private $blacklistDomains = ['registry.godaddy'];

    function isDomainInBlacklist(string $domain)
    {
        if (in_array($domain, $this->blacklistDomains)) {
            return true;
        }

        return false;
    }
}
