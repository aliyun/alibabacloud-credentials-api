package com.aliyun.credentials.api;

import java.util.concurrent.CompletableFuture;

public interface ICredentialsProvider extends AutoCloseable {
    ICredentials getCredentials();

    default CompletableFuture<ICredentials> getCredentialsAsync() {
        return null;
    }

    String getProviderName();
}
