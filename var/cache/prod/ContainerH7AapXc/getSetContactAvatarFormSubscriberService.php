<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSetContactAvatarFormSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\EventListener\SetContactAvatarFormSubscriber' shared autowired service.
     *
     * @return \Mautic\LeadBundle\EventListener\SetContactAvatarFormSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\SetContactAvatarFormSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\SetContactAvatarFormSubscriber'];
        }

        return $container->services['Mautic\\LeadBundle\\EventListener\\SetContactAvatarFormSubscriber'] = new \Mautic\LeadBundle\EventListener\SetContactAvatarFormSubscriber(($container->services['mautic.helper.twig.avatar'] ?? $container->getMautic_Helper_Twig_AvatarService()), ($container->services['mautic.form.helper.form_uploader'] ?? $container->getMautic_Form_Helper_FormUploaderService()), $a);
    }
}
