namespace Aliyun.Credentials.Api
{
    public interface ICredentials
    {
        string AccessKeyId { get; }

        string AccessKeySecret { get; }

        string SecurityToken { get; }

        string ProviderName { get; }
    }
}