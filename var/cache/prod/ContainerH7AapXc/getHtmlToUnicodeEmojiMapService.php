<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHtmlToUnicodeEmojiMapService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Helper\EmojiMap\HtmlToUnicodeEmojiMap' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Helper\EmojiMap\HtmlToUnicodeEmojiMap
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Helper\\EmojiMap\\HtmlToUnicodeEmojiMap'] = new \Mautic\CoreBundle\Helper\EmojiMap\HtmlToUnicodeEmojiMap();
    }
}
