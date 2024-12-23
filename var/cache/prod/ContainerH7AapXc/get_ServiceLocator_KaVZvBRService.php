<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KaVZvBRService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.KaVZvBR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KaVZvBR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'exception' => ['privates', '.errored..service_locator.KaVZvBR.Throwable', NULL, 'Cannot autowire service ".service_locator.KaVZvBR": it references interface "Throwable" but no such service exists. You should maybe alias this interface to one of these existing services: "Mautic\\CampaignBundle\\Executioner\\Exception\\CampaignNotExecutableException", "Mautic\\CampaignBundle\\Executioner\\Exception\\CannotProcessEventException", "Mautic\\CampaignBundle\\Executioner\\Exception\\ConditionFailedException", "Mautic\\CampaignBundle\\Executioner\\Exception\\DecisionNotApplicableException", "Mautic\\CampaignBundle\\Executioner\\Exception\\IntervalNotConfiguredException", "Mautic\\CampaignBundle\\Executioner\\Exception\\NoContactsFoundException", "Mautic\\CampaignBundle\\Executioner\\Exception\\NoEventsFoundException", "Mautic\\CampaignBundle\\Executioner\\Scheduler\\Exception\\ExecutionProhibitedException", "Mautic\\CampaignBundle\\Executioner\\Scheduler\\Exception\\NotSchedulableException", "Mautic\\CampaignBundle\\Executioner\\Scheduler\\Exception\\NotTimeYetException", "Mautic\\CacheBundle\\Exceptions\\InvalidArgumentException", "Mautic\\CoreBundle\\Helper\\ListParser\\Exception\\FormatNotSupportedException", "Mautic\\CoreBundle\\Helper\\Update\\Exception\\CouldNotFetchLatestVersionException", "Mautic\\CoreBundle\\Helper\\Update\\Exception\\LatestVersionSupportedException", "Mautic\\CoreBundle\\Helper\\Update\\Exception\\MetadataNotFoundException", "Mautic\\CoreBundle\\Helper\\Update\\Exception\\UpdateCacheDataNeedsToBeRefreshedException", "Mautic\\CoreBundle\\Helper\\Update\\Exception\\UpdatePackageNotFoundException", "Mautic\\CoreBundle\\ProcessSignal\\Exception\\SignalCaughtException", "Mautic\\EmailBundle\\Helper\\Exception\\OwnerNotFoundException", "Mautic\\EmailBundle\\Helper\\Exception\\TokenNotFoundOrEmptyException", "Mautic\\EmailBundle\\Mailer\\Exception\\BatchQueueMaxException", "Mautic\\EmailBundle\\MonitoredEmail\\Exception\\BounceNotFound", "Mautic\\EmailBundle\\MonitoredEmail\\Exception\\CategoryNotFound", "Mautic\\EmailBundle\\MonitoredEmail\\Exception\\FeedbackLoopNotFound", "Mautic\\EmailBundle\\MonitoredEmail\\Exception\\NotConfiguredException", "Mautic\\EmailBundle\\MonitoredEmail\\Exception\\ReplyNotFound", "Mautic\\EmailBundle\\MonitoredEmail\\Exception\\UnsubscriptionNotFound", "Mautic\\EmailBundle\\Stat\\Exception\\StatNotFoundException", "Mautic\\EmailBundle\\Stats\\Exception\\InvalidStatHelperException", "Mautic\\LeadBundle\\Field\\Exception\\AbortColumnCreateException", "Mautic\\LeadBundle\\Field\\Exception\\AbortColumnUpdateException", "Mautic\\LeadBundle\\Field\\Exception\\ColumnAlreadyCreatedException", "Mautic\\LeadBundle\\Field\\Exception\\CustomFieldLimitException", "Mautic\\LeadBundle\\Field\\Exception\\LeadFieldWasNotFoundException", "Mautic\\LeadBundle\\Field\\Exception\\NoUserException", "Mautic\\LeadBundle\\Segment\\Exception\\FieldNotFoundException", "Mautic\\LeadBundle\\Segment\\Exception\\InvalidUseException", "Mautic\\LeadBundle\\Segment\\Exception\\PluginHandledFilterException", "Mautic\\LeadBundle\\Segment\\Exception\\SegmentNotFoundException", "Mautic\\LeadBundle\\Segment\\Exception\\SegmentQueryException", "Mautic\\LeadBundle\\Segment\\Exception\\TableNotFoundException", "Mautic\\MessengerBundle\\Exceptions\\InvalidPayloadException", "Mautic\\MessengerBundle\\Exceptions\\MauticMessengerException", "Mautic\\ReportBundle\\Builder\\InvalidReportQueryException", "Mautic\\ReportBundle\\Scheduler\\Exception\\InvalidSchedulerException", "Mautic\\ReportBundle\\Scheduler\\Exception\\NoScheduleException", "Mautic\\ReportBundle\\Scheduler\\Exception\\NotSupportedScheduleTypeException", "Mautic\\ReportBundle\\Scheduler\\Exception\\ScheduleNotValidException".'],
            'themeHelper' => ['services', 'mautic.helper.theme', 'getMautic_Helper_ThemeService', false],
        ], [
            'exception' => 'Throwable',
            'themeHelper' => '?',
        ]);
    }
}
