using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(DoThis.Startup))]
namespace DoThis
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
