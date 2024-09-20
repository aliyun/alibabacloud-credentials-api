using System;
using System.Threading.Tasks;

namespace Aliyun.Credentials.Api
{
    public interface ICredentialsProvider : IDisposable
    {
        string GetProviderName();

        ICredentials GetCredentials();

        Task<ICredentials> GetCredentialsAsync();
    }
}