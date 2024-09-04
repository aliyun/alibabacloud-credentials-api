<?php

namespace Alibabacloud\CredentialsAPI;

use Alibabacloud\CredentialsAPI\ICredentials;

interface ICredentialsProvider {

    /**
     * @return ICredentials
     */
    public function getCredentials();

    /**
     * @return string
     */
    public function getProviderName();
}
