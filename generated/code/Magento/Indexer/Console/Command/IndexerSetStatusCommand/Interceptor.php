<?php
namespace Magento\Indexer\Console\Command\IndexerSetStatusCommand;

/**
 * Interceptor class for @see \Magento\Indexer\Console\Command\IndexerSetStatusCommand
 */
class Interceptor extends \Magento\Indexer\Console\Command\IndexerSetStatusCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Indexer\Model\ResourceModel\Indexer\State $stateResourceModel, \Magento\Framework\App\ObjectManagerFactory $objectManagerFactory)
    {
        $this->___init();
        parent::__construct($stateResourceModel, $objectManagerFactory);
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
