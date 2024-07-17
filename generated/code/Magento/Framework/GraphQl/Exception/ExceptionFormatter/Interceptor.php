<?php
namespace Magento\Framework\GraphQl\Exception\ExceptionFormatter;

/**
 * Interceptor class for @see \Magento\Framework\GraphQl\Exception\ExceptionFormatter
 */
class Interceptor extends \Magento\Framework\GraphQl\Exception\ExceptionFormatter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\State $appState, \Magento\Framework\Webapi\ErrorProcessor $errorProcessor, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($appState, $errorProcessor, $logger);
    }
}
