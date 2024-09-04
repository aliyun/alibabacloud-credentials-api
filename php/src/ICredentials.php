<?php

namespace Alibabacloud\CredentialsAPI;

interface ICredentials
{
    /**
     * @return string
     */
    public function getAccessKeyId();

    /**
     * @return string
     */
    public function getAccessKeySecret();

    /**
     * @return string
     */
    public function getSecurityToken();

    /**
     * @return string
     */
    public function getProviderName();

}
