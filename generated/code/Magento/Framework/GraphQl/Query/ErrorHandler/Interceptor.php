<?php
namespace Magento\Framework\GraphQl\Query\ErrorHandler;

/**
 * Interceptor class for @see \Magento\Framework\GraphQl\Query\ErrorHandler
 */
class Interceptor extends \Magento\Framework\GraphQl\Query\ErrorHandler implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Psr\Log\LoggerInterface $logger, \Magento\Framework\App\State $appState)
    {
        $this->___init();
        parent::__construct($logger, $appState);
    }

    /**
     * {@inheritdoc}
     */
    public function handle(array $errors, callable $formatter) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'handle');
        return $pluginInfo ? $this->___callPlugins('handle', func_get_args(), $pluginInfo) : parent::handle($errors, $formatter);
    }
}
