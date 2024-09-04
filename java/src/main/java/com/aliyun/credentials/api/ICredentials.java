package com.aliyun.credentials.api;

public interface ICredentials {
    String getAccessKeyId();

    String getAccessKeySecret();

    String getSecurityToken();

    String getProviderName();
}
