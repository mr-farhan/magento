<?php
namespace Magento\Backend\Console\Command\CacheEnableCommand;

/**
 * Interceptor class for @see \Magento\Backend\Console\Command\CacheEnableCommand
 */
class Interceptor extends \Magento\Backend\Console\Command\CacheEnableCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Cache\Manager $cacheManager)
    {
        $this->___init();
        parent::__construct($cacheManager);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
