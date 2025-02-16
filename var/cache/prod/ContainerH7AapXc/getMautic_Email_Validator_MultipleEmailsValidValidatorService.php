<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Email_Validator_MultipleEmailsValidValidatorService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.email.validator.multiple_emails_valid_validator' shared service.
     *
     * @return \Mautic\EmailBundle\Validator\MultipleEmailsValidValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.validator.email'] ?? $container->getMautic_Validator_EmailService());

        if (isset($container->services['mautic.email.validator.multiple_emails_valid_validator'])) {
            return $container->services['mautic.email.validator.multiple_emails_valid_validator'];
        }

        return $container->services['mautic.email.validator.multiple_emails_valid_validator'] = new \Mautic\EmailBundle\Validator\MultipleEmailsValidValidator($a);
    }
}
