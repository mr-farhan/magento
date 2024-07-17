<?php
namespace Magento\ReCaptchaWebapiGraphQl\Model\Resolver\ReCaptchaV3;

/**
 * Interceptor class for @see \Magento\ReCaptchaWebapiGraphQl\Model\Resolver\ReCaptchaV3
 */
class Interceptor extends \Magento\ReCaptchaWebapiGraphQl\Model\Resolver\ReCaptchaV3 implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\ReCaptchaVersion3Invisible\Model\Config $reCaptchaV3Config, \Magento\ReCaptchaFrontendUi\Model\CaptchaTypeResolver $captchaTypeResolver, \Magento\ReCaptchaFrontendUi\Model\ErrorMessageConfig $errorMessageConfig)
    {
        $this->___init();
        parent::__construct($reCaptchaV3Config, $captchaTypeResolver, $errorMessageConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
