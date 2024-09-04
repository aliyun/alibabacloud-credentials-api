// This file is auto-generated, don't edit it. Thanks.
package client

type ICredentials interface {
	GetAccessKeyId() (_result *string)
	GetAccessKeySecret() (_result *string)
	GetSecurityToken() (_result *string)
	GetProviderName() (_result *string)
}

type ICredentialsProvider interface {
	GetCredentials() (_result *ICredentials, _err error)
	GetProviderName() (_result *string)
}
