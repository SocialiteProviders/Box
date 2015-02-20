<?php
namespace SocialiteProviders\Box;

use SocialiteProviders\Manager\SocialiteWasCalled;

class BoxExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('box', __NAMESPACE__.'\Provider');
    }
}
