<?php

namespace ContainerQPTdlY7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class srcApp_KernelProdContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'App\\Controller\\Account\\AccountController' => 'getAccountControllerService',
            'App\\Controller\\Account\\AddressController' => 'getAddressControllerService',
            'App\\Controller\\Account\\RegistrationController' => 'getRegistrationControllerService',
            'App\\Controller\\Account\\ResetPasswordController' => 'getResetPasswordControllerService',
            'App\\Controller\\Account\\SecurityController' => 'getSecurityControllerService',
            'App\\Controller\\Admin\\CarrierCrudController' => 'getCarrierCrudControllerService',
            'App\\Controller\\Admin\\CartCrudController' => 'getCartCrudControllerService',
            'App\\Controller\\Admin\\CategoriesCrudController' => 'getCategoriesCrudControllerService',
            'App\\Controller\\Admin\\ContactCrudController' => 'getContactCrudControllerService',
            'App\\Controller\\Admin\\DashboardController' => 'getDashboardControllerService',
            'App\\Controller\\Admin\\HomeSliderCrudController' => 'getHomeSliderCrudControllerService',
            'App\\Controller\\Admin\\OrderCrudController' => 'getOrderCrudControllerService',
            'App\\Controller\\Admin\\ProductCrudController' => 'getProductCrudControllerService',
            'App\\Controller\\CGU\\CGUController' => 'getCGUControllerService',
            'App\\Controller\\Cart\\CartController' => 'getCartControllerService',
            'App\\Controller\\Cart\\CheckoutController' => 'getCheckoutControllerService',
            'App\\Controller\\ContactController' => 'getContactControllerService',
            'App\\Controller\\HomeController' => 'getHomeControllerService',
            'App\\Controller\\Stripe\\StripeCheckoutSessionController' => 'getStripeCheckoutSessionControllerService',
            'App\\Controller\\Stripe\\StripeStripeCancelPaymentController' => 'getStripeStripeCancelPaymentControllerService',
            'App\\Controller\\Stripe\\StripeStripeSuccessPaymentController' => 'getStripeStripeSuccessPaymentControllerService',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminDashboardCommand' => 'getMakeAdminDashboardCommandService',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminMigrationCommand' => 'getMakeAdminMigrationCommandService',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeCrudControllerCommand' => 'getMakeCrudControllerCommandService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService',
            'cache.app' => 'getCache_AppService',
            'cache.app_clearer' => 'getCache_AppClearerService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.system' => 'getCache_SystemService',
            'cache.system_clearer' => 'getCache_SystemClearerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'console.command_loader' => 'getConsole_CommandLoaderService',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'error_controller' => 'getErrorControllerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'filesystem' => 'getFilesystemService',
            'form.factory' => 'getForm_FactoryService',
            'form.type.file' => 'getForm_Type_FileService',
            'http_kernel' => 'getHttpKernelService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'serializer' => 'getSerializerService',
            'services_resetter' => 'getServicesResetterService',
            'session' => 'getSessionService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'validator' => 'getValidatorService',
        ];
        $this->aliases = [
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
        ];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function createProxy($class, \Closure $factory)
    {
        class_exists($class, false) || class_alias(__NAMESPACE__."\\$class", $class, false);

        return $factory();
    }

    /*
     * Gets the public 'App\Controller\Account\AccountController' shared autowired service.
     *
     * @return \App\Controller\Account\AccountController
     */
    protected function getAccountControllerService()
    {
        $this->services['App\\Controller\\Account\\AccountController'] = $instance = new \App\Controller\Account\AccountController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\Account\\AccountController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Account\AddressController' shared autowired service.
     *
     * @return \App\Controller\Account\AddressController
     */
    protected function getAddressControllerService()
    {
        $this->services['App\\Controller\\Account\\AddressController'] = $instance = new \App\Controller\Account\AddressController(($this->services['session'] ?? $this->getSessionService()));

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\Account\\AddressController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Account\RegistrationController' shared autowired service.
     *
     * @return \App\Controller\Account\RegistrationController
     */
    protected function getRegistrationControllerService()
    {
        $this->services['App\\Controller\\Account\\RegistrationController'] = $instance = new \App\Controller\Account\RegistrationController(new \App\Security\EmailVerifier(new \SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelper(($this->services['router'] ?? $this->getRouterService()), new \Symfony\Component\HttpKernel\UriSigner($this->getEnv('APP_SECRET'), 'signature'), new \SymfonyCasts\Bundle\VerifyEmail\Util\VerifyEmailQueryUtility(), new \SymfonyCasts\Bundle\VerifyEmail\Generator\VerifyEmailTokenGenerator($this->getEnv('APP_SECRET')), 3600), ($this->privates['mailer.mailer'] ?? $this->getMailer_MailerService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService())));

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\Account\\RegistrationController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Account\ResetPasswordController' shared autowired service.
     *
     * @return \App\Controller\Account\ResetPasswordController
     */
    protected function getResetPasswordControllerService()
    {
        $this->services['App\\Controller\\Account\\ResetPasswordController'] = $instance = new \App\Controller\Account\ResetPasswordController(new \SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelper(new \SymfonyCasts\Bundle\ResetPassword\Generator\ResetPasswordTokenGenerator($this->getEnv('APP_SECRET'), new \SymfonyCasts\Bundle\ResetPassword\Generator\ResetPasswordRandomGenerator()), ($this->privates['symfonycasts.reset_password.cleaner'] ?? $this->getSymfonycasts_ResetPassword_CleanerService()), ($this->privates['App\\Repository\\ResetPasswordRequestRepository'] ?? $this->getResetPasswordRequestRepositoryService()), 3600, 3600));

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\Account\\ResetPasswordController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Account\SecurityController' shared autowired service.
     *
     * @return \App\Controller\Account\SecurityController
     */
    protected function getSecurityControllerService()
    {
        $this->services['App\\Controller\\Account\\SecurityController'] = $instance = new \App\Controller\Account\SecurityController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\Account\\SecurityController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Admin\CarrierCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\CarrierCrudController
     */
    protected function getCarrierCrudControllerService()
    {
        $this->services['App\\Controller\\Admin\\CarrierCrudController'] = $instance = new \App\Controller\Admin\CarrierCrudController();

        $instance->setContainer(($this->privates['.service_locator.ky4eP1x'] ?? $this->get_ServiceLocator_Ky4eP1xService())->withContext('App\\Controller\\Admin\\CarrierCrudController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Admin\CartCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\CartCrudController
     */
    protected function getCartCrudControllerService()
    {
        $this->services['App\\Controller\\Admin\\CartCrudController'] = $instance = new \App\Controller\Admin\CartCrudController();

        $instance->setContainer(($this->privates['.service_locator.ky4eP1x'] ?? $this->get_ServiceLocator_Ky4eP1xService())->withContext('App\\Controller\\Admin\\CartCrudController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Admin\CategoriesCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\CategoriesCrudController
     */
    protected function getCategoriesCrudControllerService()
    {
        $this->services['App\\Controller\\Admin\\CategoriesCrudController'] = $instance = new \App\Controller\Admin\CategoriesCrudController();

        $instance->setContainer(($this->privates['.service_locator.ky4eP1x'] ?? $this->get_ServiceLocator_Ky4eP1xService())->withContext('App\\Controller\\Admin\\CategoriesCrudController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Admin\ContactCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\ContactCrudController
     */
    protected function getContactCrudControllerService()
    {
        $this->services['App\\Controller\\Admin\\ContactCrudController'] = $instance = new \App\Controller\Admin\ContactCrudController();

        $instance->setContainer(($this->privates['.service_locator.ky4eP1x'] ?? $this->get_ServiceLocator_Ky4eP1xService())->withContext('App\\Controller\\Admin\\ContactCrudController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Admin\DashboardController' shared autowired service.
     *
     * @return \App\Controller\Admin\DashboardController
     */
    protected function getDashboardControllerService()
    {
        $this->services['App\\Controller\\Admin\\DashboardController'] = $instance = new \App\Controller\Admin\DashboardController();

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator' => [false, 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator', 'getAdminUrlGeneratorService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator', 'getCrudUrlGeneratorService', false],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'form.factory' => ['services', 'form.factory', 'getForm_FactoryService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator',
            'doctrine' => '?',
            'form.factory' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'serializer' => '?',
            'session' => '?',
            'twig' => '?',
        ]))->withContext('App\\Controller\\Admin\\DashboardController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Admin\HomeSliderCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\HomeSliderCrudController
     */
    protected function getHomeSliderCrudControllerService()
    {
        $this->services['App\\Controller\\Admin\\HomeSliderCrudController'] = $instance = new \App\Controller\Admin\HomeSliderCrudController();

        $instance->setContainer(($this->privates['.service_locator.ky4eP1x'] ?? $this->get_ServiceLocator_Ky4eP1xService())->withContext('App\\Controller\\Admin\\HomeSliderCrudController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Admin\OrderCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\OrderCrudController
     */
    protected function getOrderCrudControllerService()
    {
        $this->services['App\\Controller\\Admin\\OrderCrudController'] = $instance = new \App\Controller\Admin\OrderCrudController();

        $instance->setContainer(($this->privates['.service_locator.ky4eP1x'] ?? $this->get_ServiceLocator_Ky4eP1xService())->withContext('App\\Controller\\Admin\\OrderCrudController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Admin\ProductCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\ProductCrudController
     */
    protected function getProductCrudControllerService()
    {
        $this->services['App\\Controller\\Admin\\ProductCrudController'] = $instance = new \App\Controller\Admin\ProductCrudController();

        $instance->setContainer(($this->privates['.service_locator.ky4eP1x'] ?? $this->get_ServiceLocator_Ky4eP1xService())->withContext('App\\Controller\\Admin\\ProductCrudController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\CGU\CGUController' shared autowired service.
     *
     * @return \App\Controller\CGU\CGUController
     */
    protected function getCGUControllerService()
    {
        $this->services['App\\Controller\\CGU\\CGUController'] = $instance = new \App\Controller\CGU\CGUController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\CGU\\CGUController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Cart\CartController' shared autowired service.
     *
     * @return \App\Controller\Cart\CartController
     */
    protected function getCartControllerService()
    {
        $this->services['App\\Controller\\Cart\\CartController'] = $instance = new \App\Controller\Cart\CartController(($this->privates['App\\Services\\CartServices'] ?? $this->getCartServicesService()));

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\Cart\\CartController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Cart\CheckoutController' shared autowired service.
     *
     * @return \App\Controller\Cart\CheckoutController
     */
    protected function getCheckoutControllerService()
    {
        $this->services['App\\Controller\\Cart\\CheckoutController'] = $instance = new \App\Controller\Cart\CheckoutController(($this->privates['App\\Services\\CartServices'] ?? $this->getCartServicesService()), ($this->services['session'] ?? $this->getSessionService()));

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\Cart\\CheckoutController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\ContactController' shared autowired service.
     *
     * @return \App\Controller\ContactController
     */
    protected function getContactControllerService()
    {
        $this->services['App\\Controller\\ContactController'] = $instance = new \App\Controller\ContactController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\ContactController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\HomeController' shared autowired service.
     *
     * @return \App\Controller\HomeController
     */
    protected function getHomeControllerService()
    {
        $this->services['App\\Controller\\HomeController'] = $instance = new \App\Controller\HomeController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\HomeController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Stripe\StripeCheckoutSessionController' shared autowired service.
     *
     * @return \App\Controller\Stripe\StripeCheckoutSessionController
     */
    protected function getStripeCheckoutSessionControllerService()
    {
        $this->services['App\\Controller\\Stripe\\StripeCheckoutSessionController'] = $instance = new \App\Controller\Stripe\StripeCheckoutSessionController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\Stripe\\StripeCheckoutSessionController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Stripe\StripeStripeCancelPaymentController' shared autowired service.
     *
     * @return \App\Controller\Stripe\StripeStripeCancelPaymentController
     */
    protected function getStripeStripeCancelPaymentControllerService()
    {
        $this->services['App\\Controller\\Stripe\\StripeStripeCancelPaymentController'] = $instance = new \App\Controller\Stripe\StripeStripeCancelPaymentController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\Stripe\\StripeStripeCancelPaymentController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Stripe\StripeStripeSuccessPaymentController' shared autowired service.
     *
     * @return \App\Controller\Stripe\StripeStripeSuccessPaymentController
     */
    protected function getStripeStripeSuccessPaymentControllerService()
    {
        $this->services['App\\Controller\\Stripe\\StripeStripeSuccessPaymentController'] = $instance = new \App\Controller\Stripe\StripeStripeSuccessPaymentController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\Stripe\\StripeStripeSuccessPaymentController', $this));

        return $instance;
    }

    /*
     * Gets the public 'EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminDashboardCommand' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminDashboardCommand
     */
    protected function getMakeAdminDashboardCommandService()
    {
        $this->services['EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminDashboardCommand'] = $instance = new \EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminDashboardCommand(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Maker\\ClassMaker'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Maker\\ClassMaker'] = new \EasyCorp\Bundle\EasyAdminBundle\Maker\ClassMaker(($this->services['kernel'] ?? $this->get('kernel', 1)), \dirname(__DIR__, 4)))), \dirname(__DIR__, 4));

        $instance->setName('make:admin:dashboard');

        return $instance;
    }

    /*
     * Gets the public 'EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminMigrationCommand' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminMigrationCommand
     */
    protected function getMakeAdminMigrationCommandService()
    {
        $this->services['EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminMigrationCommand'] = $instance = new \EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminMigrationCommand(new \EasyCorp\Bundle\EasyAdminBundle\Maker\Migrator(), \dirname(__DIR__, 4));

        $instance->setName('make:admin:migration');

        return $instance;
    }

    /*
     * Gets the public 'EasyCorp\Bundle\EasyAdminBundle\Command\MakeCrudControllerCommand' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Command\MakeCrudControllerCommand
     */
    protected function getMakeCrudControllerCommandService()
    {
        $this->services['EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeCrudControllerCommand'] = $instance = new \EasyCorp\Bundle\EasyAdminBundle\Command\MakeCrudControllerCommand(\dirname(__DIR__, 4), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Maker\\ClassMaker'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Maker\\ClassMaker'] = new \EasyCorp\Bundle\EasyAdminBundle\Maker\ClassMaker(($this->services['kernel'] ?? $this->get('kernel', 1)), \dirname(__DIR__, 4)))), ($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('make:admin:crud');

        return $instance;
    }

    /*
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\RedirectController
     */
    protected function getRedirectControllerService()
    {
        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'] = new \Symfony\Bundle\FrameworkBundle\Controller\RedirectController(($this->services['router'] ?? $this->getRouterService()), 80, 443);
    }

    /*
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\TemplateController
     */
    protected function getTemplateControllerService()
    {
        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'] = new \Symfony\Bundle\FrameworkBundle\Controller\TemplateController(($this->services['twig'] ?? $this->getTwigService()), NULL);
    }

    /*
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_AppService()
    {
        $this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('TA315K5qEX', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $instance;
    }

    /*
     * Gets the public 'cache.app_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_AppClearerService()
    {
        return $this->services['cache.app_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService())]);
    }

    /*
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()), 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService()), 'doctrine.system_cache_pool' => ($this->privates['doctrine.system_cache_pool'] ?? $this->getDoctrine_SystemCachePoolService()), 'cache.property_access' => ($this->privates['cache.property_access'] ?? $this->getCache_PropertyAccessService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService())]);
    }

    /*
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('6OJgx3INXy', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the public 'cache.system_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_SystemClearerService()
    {
        return $this->services['cache.system_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()), 'doctrine.system_cache_pool' => ($this->privates['doctrine.system_cache_pool'] ?? $this->getDoctrine_SystemCachePoolService()), 'cache.property_access' => ($this->privates['cache.property_access'] ?? $this->getCache_PropertyAccessService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService())]);
    }

    /*
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () {
            yield 0 => ($this->services['cache.system_clearer'] ?? $this->getCache_SystemClearerService());
        }, 1));
    }

    /*
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
            yield 0 => ($this->privates['validator.mapping.cache_warmer'] ?? $this->getValidator_Mapping_CacheWarmerService());
            yield 1 => ($this->privates['translation.warmer'] ?? $this->getTranslation_WarmerService());
            yield 2 => ($this->privates['router.cache_warmer'] ?? $this->getRouter_CacheWarmerService());
            yield 3 => ($this->privates['annotations.cache_warmer'] ?? $this->getAnnotations_CacheWarmerService());
            yield 4 => ($this->privates['serializer.mapping.cache_warmer'] ?? $this->getSerializer_Mapping_CacheWarmerService());
            yield 5 => ($this->privates['twig.template_cache_warmer'] ?? $this->getTwig_TemplateCacheWarmerService());
            yield 6 => ($this->privates['doctrine.orm.proxy_cache_warmer'] ?? $this->getDoctrine_Orm_ProxyCacheWarmerService());
            yield 7 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Cache\\CacheWarmer'] ?? $this->getCacheWarmer2Service());
        }, 8), false, ($this->targetDir.''.'/srcApp_KernelProdContainerDeprecations.log'));
    }

    /*
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    protected function getConsole_CommandLoaderService()
    {
        return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => ['privates', 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand', 'getRunSqlCommandService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminDashboardCommand' => ['services', 'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminDashboardCommand', 'getMakeAdminDashboardCommandService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminMigrationCommand' => ['services', 'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminMigrationCommand', 'getMakeAdminMigrationCommandService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeCrudControllerCommand' => ['services', 'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeCrudControllerCommand', 'getMakeCrudControllerCommandService', false],
            'SymfonyCasts\\Bundle\\ResetPassword\\Command\\ResetPasswordRemoveExpiredCommand' => ['privates', 'SymfonyCasts\\Bundle\\ResetPassword\\Command\\ResetPasswordRemoveExpiredCommand', 'getResetPasswordRemoveExpiredCommandService', false],
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.form_debug' => ['privates', 'console.command.form_debug', 'getConsole_Command_FormDebugService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.translation_debug' => ['privates', 'console.command.translation_debug', 'getConsole_Command_TranslationDebugService', false],
            'console.command.translation_update' => ['privates', 'console.command.translation_update', 'getConsole_Command_TranslationUpdateService', false],
            'console.command.xliff_lint' => ['privates', 'console.command.xliff_lint', 'getConsole_Command_XliffLintService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
            'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService', false],
            'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService', false],
            'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService', false],
            'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService', false],
            'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService', false],
            'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService', false],
            'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService', false],
            'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService', false],
            'doctrine.database_import_command' => ['privates', 'doctrine.database_import_command', 'getDoctrine_DatabaseImportCommandService', false],
            'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService', false],
            'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService', false],
            'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService', false],
            'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService', false],
            'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService', false],
            'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService', false],
            'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService', false],
            'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService', false],
            'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService', false],
            'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService', false],
            'doctrine_migrations.current_command' => ['privates', 'doctrine_migrations.current_command', 'getDoctrineMigrations_CurrentCommandService', false],
            'doctrine_migrations.diff_command' => ['privates', 'doctrine_migrations.diff_command', 'getDoctrineMigrations_DiffCommandService', false],
            'doctrine_migrations.dump_schema_command' => ['privates', 'doctrine_migrations.dump_schema_command', 'getDoctrineMigrations_DumpSchemaCommandService', false],
            'doctrine_migrations.execute_command' => ['privates', 'doctrine_migrations.execute_command', 'getDoctrineMigrations_ExecuteCommandService', false],
            'doctrine_migrations.generate_command' => ['privates', 'doctrine_migrations.generate_command', 'getDoctrineMigrations_GenerateCommandService', false],
            'doctrine_migrations.latest_command' => ['privates', 'doctrine_migrations.latest_command', 'getDoctrineMigrations_LatestCommandService', false],
            'doctrine_migrations.migrate_command' => ['privates', 'doctrine_migrations.migrate_command', 'getDoctrineMigrations_MigrateCommandService', false],
            'doctrine_migrations.rollup_command' => ['privates', 'doctrine_migrations.rollup_command', 'getDoctrineMigrations_RollupCommandService', false],
            'doctrine_migrations.status_command' => ['privates', 'doctrine_migrations.status_command', 'getDoctrineMigrations_StatusCommandService', false],
            'doctrine_migrations.sync_metadata_command' => ['privates', 'doctrine_migrations.sync_metadata_command', 'getDoctrineMigrations_SyncMetadataCommandService', false],
            'doctrine_migrations.up_to_date_command' => ['privates', 'doctrine_migrations.up_to_date_command', 'getDoctrineMigrations_UpToDateCommandService', false],
            'doctrine_migrations.version_command' => ['privates', 'doctrine_migrations.version_command', 'getDoctrineMigrations_VersionCommandService', false],
            'doctrine_migrations.versions_command' => ['privates', 'doctrine_migrations.versions_command', 'getDoctrineMigrations_VersionsCommandService', false],
            'security.command.user_password_encoder' => ['privates', 'security.command.user_password_encoder', 'getSecurity_Command_UserPasswordEncoderService', false],
            'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService', false],
            'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService', false],
        ], [
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminDashboardCommand' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminDashboardCommand',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminMigrationCommand' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminMigrationCommand',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeCrudControllerCommand' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeCrudControllerCommand',
            'SymfonyCasts\\Bundle\\ResetPassword\\Command\\ResetPasswordRemoveExpiredCommand' => 'SymfonyCasts\\Bundle\\ResetPassword\\Command\\ResetPasswordRemoveExpiredCommand',
            'console.command.about' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand',
            'console.command.assets_install' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand',
            'console.command.cache_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand',
            'console.command.cache_pool_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand',
            'console.command.cache_pool_delete' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand',
            'console.command.cache_pool_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand',
            'console.command.cache_pool_prune' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand',
            'console.command.cache_warmup' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand',
            'console.command.config_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand',
            'console.command.config_dump_reference' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand',
            'console.command.container_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand',
            'console.command.container_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand',
            'console.command.debug_autowiring' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand',
            'console.command.event_dispatcher_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand',
            'console.command.form_debug' => 'Symfony\\Component\\Form\\Command\\DebugCommand',
            'console.command.router_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand',
            'console.command.router_match' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand',
            'console.command.secrets_decrypt_to_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand',
            'console.command.secrets_encrypt_from_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand',
            'console.command.secrets_generate_key' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand',
            'console.command.secrets_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand',
            'console.command.secrets_remove' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand',
            'console.command.secrets_set' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand',
            'console.command.translation_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand',
            'console.command.translation_update' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand',
            'console.command.xliff_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\XliffLintCommand',
            'console.command.yaml_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand',
            'doctrine.cache_clear_metadata_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand',
            'doctrine.cache_clear_query_cache_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand',
            'doctrine.cache_clear_result_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand',
            'doctrine.cache_collection_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand',
            'doctrine.clear_entity_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand',
            'doctrine.clear_query_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand',
            'doctrine.database_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand',
            'doctrine.database_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand',
            'doctrine.database_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand',
            'doctrine.ensure_production_settings_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand',
            'doctrine.mapping_convert_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand',
            'doctrine.mapping_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand',
            'doctrine.mapping_info_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand',
            'doctrine.query_dql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand',
            'doctrine.query_sql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand',
            'doctrine.schema_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand',
            'doctrine.schema_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand',
            'doctrine.schema_update_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand',
            'doctrine.schema_validate_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand',
            'doctrine_migrations.current_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\CurrentCommand',
            'doctrine_migrations.diff_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\DiffCommand',
            'doctrine_migrations.dump_schema_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\DumpSchemaCommand',
            'doctrine_migrations.execute_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\ExecuteCommand',
            'doctrine_migrations.generate_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\GenerateCommand',
            'doctrine_migrations.latest_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\LatestCommand',
            'doctrine_migrations.migrate_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\MigrateCommand',
            'doctrine_migrations.rollup_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\RollupCommand',
            'doctrine_migrations.status_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\StatusCommand',
            'doctrine_migrations.sync_metadata_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\SyncMetadataCommand',
            'doctrine_migrations.up_to_date_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\UpToDateCommand',
            'doctrine_migrations.version_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\VersionCommand',
            'doctrine_migrations.versions_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\ListCommand',
            'security.command.user_password_encoder' => 'Symfony\\Bundle\\SecurityBundle\\Command\\UserPasswordEncoderCommand',
            'twig.command.debug' => 'Symfony\\Bridge\\Twig\\Command\\DebugCommand',
            'twig.command.lint' => 'Symfony\\Bundle\\TwigBundle\\Command\\LintCommand',
        ]), ['about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:translation' => 'console.command.translation_debug', 'translation:update' => 'console.command.translation_update', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'debug:form' => 'console.command.form_debug', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'dbal:run-sql' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand', 'doctrine:database:import' => 'doctrine.database_import_command', 'doctrine:cache:clear-metadata' => 'doctrine.cache_clear_metadata_command', 'doctrine:cache:clear-query' => 'doctrine.cache_clear_query_cache_command', 'doctrine:cache:clear-result' => 'doctrine.cache_clear_result_command', 'doctrine:cache:clear-collection-region' => 'doctrine.cache_collection_region_command', 'doctrine:mapping:convert' => 'doctrine.mapping_convert_command', 'doctrine:schema:create' => 'doctrine.schema_create_command', 'doctrine:schema:drop' => 'doctrine.schema_drop_command', 'doctrine:ensure-production-settings' => 'doctrine.ensure_production_settings_command', 'doctrine:cache:clear-entity-region' => 'doctrine.clear_entity_region_command', 'doctrine:mapping:info' => 'doctrine.mapping_info_command', 'doctrine:cache:clear-query-region' => 'doctrine.clear_query_region_command', 'doctrine:query:dql' => 'doctrine.query_dql_command', 'doctrine:schema:update' => 'doctrine.schema_update_command', 'doctrine:schema:validate' => 'doctrine.schema_validate_command', 'doctrine:mapping:import' => 'doctrine.mapping_import_command', 'doctrine:migrations:diff' => 'doctrine_migrations.diff_command', 'doctrine:migrations:sync-metadata-storage' => 'doctrine_migrations.sync_metadata_command', 'doctrine:migrations:list' => 'doctrine_migrations.versions_command', 'doctrine:migrations:current' => 'doctrine_migrations.current_command', 'doctrine:migrations:dump-schema' => 'doctrine_migrations.dump_schema_command', 'doctrine:migrations:execute' => 'doctrine_migrations.execute_command', 'doctrine:migrations:generate' => 'doctrine_migrations.generate_command', 'doctrine:migrations:latest' => 'doctrine_migrations.latest_command', 'doctrine:migrations:migrate' => 'doctrine_migrations.migrate_command', 'doctrine:migrations:rollup' => 'doctrine_migrations.rollup_command', 'doctrine:migrations:status' => 'doctrine_migrations.status_command', 'doctrine:migrations:up-to-date' => 'doctrine_migrations.up_to_date_command', 'doctrine:migrations:version' => 'doctrine_migrations.version_command', 'security:encode-password' => 'security.command.user_password_encoder', 'reset-password:remove-expired' => 'SymfonyCasts\\Bundle\\ResetPassword\\Command\\ResetPasswordRemoveExpiredCommand', 'make:admin:migration' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminMigrationCommand', 'make:admin:dashboard' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminDashboardCommand', 'make:admin:crud' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeCrudControllerCommand']);
    }

    /*
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'base64' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'bool' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'const' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'csv' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'default' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'file' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'float' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'int' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'json' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'key' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'query_string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'require' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'resolve' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'trim' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'url' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
        ], [
            'base64' => '?',
            'bool' => '?',
            'const' => '?',
            'csv' => '?',
            'default' => '?',
            'file' => '?',
            'float' => '?',
            'int' => '?',
            'json' => '?',
            'key' => '?',
            'query_string' => '?',
            'require' => '?',
            'resolve' => '?',
            'string' => '?',
            'trim' => '?',
            'url' => '?',
        ]);
    }

    /*
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /*
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', false],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
        ]));
        $a->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['url' => $this->getEnv('resolve:DATABASE_URL'), 'driver' => 'pdo_mysql', 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'defaultTableOptions' => []], new \Doctrine\DBAL\Configuration(), $a, []);
    }

    /*
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['doctrine.orm.default_entity_manager'] = $this->createProxy('EntityManager_9a5be93', function () {
                return \EntityManager_9a5be93::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getDoctrine_Orm_DefaultEntityManagerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        $a = new \Doctrine\ORM\Configuration();

        $b = ($this->privates['doctrine.system_cache_pool'] ?? $this->getDoctrine_SystemCachePoolService());
        $c = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();
        $c->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => (\dirname(__DIR__, 4).'/src/Entity')]), 'App\\Entity');

        $a->setEntityNamespaces(['App' => 'App\\Entity']);
        $a->setMetadataCache($b);
        $a->setQueryCacheImpl(\Doctrine\Common\Cache\Psr6\DoctrineProvider::wrap($b));
        $a->setResultCacheImpl(\Doctrine\Common\Cache\Psr6\DoctrineProvider::wrap(($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService())));
        $a->setMetadataDriverImpl($c);
        $a->setProxyDir(($this->targetDir.''.'/doctrine/orm/Proxies'));
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(false);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true));
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Repository\\AddressRepository' => ['privates', 'App\\Repository\\AddressRepository', 'getAddressRepositoryService', false],
            'App\\Repository\\CarrierRepository' => ['privates', 'App\\Repository\\CarrierRepository', 'getCarrierRepositoryService', false],
            'App\\Repository\\CartDetailsRepository' => ['privates', 'App\\Repository\\CartDetailsRepository', 'getCartDetailsRepositoryService', false],
            'App\\Repository\\CartRepository' => ['privates', 'App\\Repository\\CartRepository', 'getCartRepositoryService', false],
            'App\\Repository\\CategoriesRepository' => ['privates', 'App\\Repository\\CategoriesRepository', 'getCategoriesRepositoryService', false],
            'App\\Repository\\ContactRepository' => ['privates', 'App\\Repository\\ContactRepository', 'getContactRepositoryService', false],
            'App\\Repository\\HomeSliderRepository' => ['privates', 'App\\Repository\\HomeSliderRepository', 'getHomeSliderRepositoryService', false],
            'App\\Repository\\OrderDetailsRepository' => ['privates', 'App\\Repository\\OrderDetailsRepository', 'getOrderDetailsRepositoryService', false],
            'App\\Repository\\OrderRepository' => ['privates', 'App\\Repository\\OrderRepository', 'getOrderRepositoryService', false],
            'App\\Repository\\ProductRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', false],
            'App\\Repository\\RelatedProductRepository' => ['privates', 'App\\Repository\\RelatedProductRepository', 'getRelatedProductRepositoryService', false],
            'App\\Repository\\ResetPasswordRequestRepository' => ['privates', 'App\\Repository\\ResetPasswordRequestRepository', 'getResetPasswordRequestRepositoryService', false],
            'App\\Repository\\ReviewsProductRepository' => ['privates', 'App\\Repository\\ReviewsProductRepository', 'getReviewsProductRepositoryService', false],
            'App\\Repository\\UserRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', false],
        ], [
            'App\\Repository\\AddressRepository' => '?',
            'App\\Repository\\CarrierRepository' => '?',
            'App\\Repository\\CartDetailsRepository' => '?',
            'App\\Repository\\CartRepository' => '?',
            'App\\Repository\\CategoriesRepository' => '?',
            'App\\Repository\\ContactRepository' => '?',
            'App\\Repository\\HomeSliderRepository' => '?',
            'App\\Repository\\OrderDetailsRepository' => '?',
            'App\\Repository\\OrderRepository' => '?',
            'App\\Repository\\ProductRepository' => '?',
            'App\\Repository\\RelatedProductRepository' => '?',
            'App\\Repository\\ResetPasswordRequestRepository' => '?',
            'App\\Repository\\ReviewsProductRepository' => '?',
            'App\\Repository\\UserRepository' => '?',
        ])));

        $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'error_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ErrorController
     */
    protected function getErrorControllerService()
    {
        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->services['error_controller'] = new \Symfony\Component\HttpKernel\Controller\ErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), 'error_controller', new \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer(($this->services['serializer'] ?? $this->getSerializerService()), \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer::getPreferredFormat($a), new \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer(($this->services['twig'] ?? $this->getTwigService()), new \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer(\Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, false), 'UTF-8', ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::getAndCleanOutputBuffer($a), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService())), \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer::isDebug($a, false)), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, false)));
    }

    /*
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\EventListener\\ExceptionListener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\EventListener\\CrudResponseListener'] ?? $this->getCrudResponseListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['.legacy_resolve_controller_name_subscriber'] ?? $this->get_LegacyResolveControllerNameSubscriberService());
        }, 1 => 'resolveControllerName'], 24);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListener2Service());
        }, 1 => 'onControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListener2Service());
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListener2Service());
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelRequest'], 15);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelFinishRequest'], -15);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['mailer.envelope_listener'] ?? ($this->privates['mailer.envelope_listener'] = new \Symfony\Component\Mailer\EventListener\EnvelopeListener(NULL, NULL)));
        }, 1 => 'onMessage'], -255);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['mailer.logger_message_listener'] ?? ($this->privates['mailer.logger_message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageLoggerListener()));
        }, 1 => 'onMessage'], -255);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_link.add_link_header_listener'] ?? ($this->privates['web_link.add_link_header_listener'] = new \Symfony\Component\WebLink\EventListener\AddLinkHeaderListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['twig.mailer.message_listener'] ?? $this->getTwig_Mailer_MessageListenerService());
        }, 1 => 'onMessage'], 0);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'configureLogoutUrlGenerator'], 8);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\EventListener\\AdminRouterSubscriber'] ?? $this->getAdminRouterSubscriberService());
        }, 1 => 'handleLegacyEaContext'], 10);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\EventListener\\AdminRouterSubscriber'] ?? $this->getAdminRouterSubscriberService());
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\EventListener\\AdminRouterSubscriber'] ?? $this->getAdminRouterSubscriberService());
        }, 1 => 'onKernelController'], 128);

        return $instance;
    }

    /*
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /*
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(($this->privates['form.registry'] ?? $this->getForm_RegistryService()));
    }

    /*
     * Gets the public 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /*
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['controller_resolver'] ?? $this->getControllerResolverService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['argument_resolver.request_attribute'] ?? ($this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()));
            yield 1 => ($this->privates['argument_resolver.request'] ?? ($this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()));
            yield 2 => ($this->privates['argument_resolver.session'] ?? ($this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()));
            yield 3 => ($this->privates['security.user_value_resolver'] ?? $this->getSecurity_UserValueResolverService());
            yield 4 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\ArgumentResolver\\AdminContextResolver'] ?? $this->getAdminContextResolverService());
            yield 5 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\ArgumentResolver\\BatchActionDtoResolver'] ?? $this->getBatchActionDtoResolverService());
            yield 6 => ($this->privates['argument_resolver.service'] ?? $this->getArgumentResolver_ServiceService());
            yield 7 => ($this->privates['argument_resolver.default'] ?? ($this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()));
            yield 8 => ($this->privates['argument_resolver.variadic'] ?? ($this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()));
        }, 9)));
    }

    /*
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('router');
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService', false],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => NULL, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), $a, 'en');

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? ($this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())));

        return $instance;
    }

    /*
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        $a = new \Symfony\Component\Config\Loader\LoaderResolver();

        $b = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), (\dirname(__DIR__, 4).'/src/Resources'), [0 => (\dirname(__DIR__, 4).'/src')], false);
        $c = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));

        $a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Bundle\FrameworkBundle\Routing\LegacyRouteLoaderContainer($this, new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'kernel' => 'App\\Kernel',
        ]))));
        $a->addLoader($c);
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $c));
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $c));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, [], ['utf8' => true]);
    }

    /*
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.access.decision_manager'] ?? $this->getSecurity_Access_DecisionManagerService()), false);
    }

    /*
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), ($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /*
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]));
    }

    /*
     * Gets the public 'serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    protected function getSerializerService()
    {
        $a = ($this->privates['serializer.mapping.cache_class_metadata_factory'] ?? $this->getSerializer_Mapping_CacheClassMetadataFactoryService());

        $b = new \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter($a);

        return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer([0 => new \Symfony\Component\Serializer\Normalizer\ProblemNormalizer(false), 1 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(), 2 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 3 => new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer([], $b), 4 => new \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer(), 5 => new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer(), 6 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(($this->privates['mime_types'] ?? $this->getMimeTypesService())), 7 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 8 => new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($a, $b, ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()), ($this->privates['property_info.cache'] ?? $this->getPropertyInfo_CacheService()), new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata($a), NULL, [])], [0 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\JsonEncoder(), 2 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(), 3 => new \Symfony\Component\Serializer\Encoder\CsvEncoder()]);
    }

    /*
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    protected function getServicesResetterService()
    {
        return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
            if (isset($this->services['cache.app'])) {
                yield 'cache.app' => ($this->services['cache.app'] ?? null);
            }
            if (isset($this->services['cache.system'])) {
                yield 'cache.system' => ($this->services['cache.system'] ?? null);
            }
            if (isset($this->privates['cache.validator'])) {
                yield 'cache.validator' => ($this->privates['cache.validator'] ?? null);
            }
            if (isset($this->privates['cache.serializer'])) {
                yield 'cache.serializer' => ($this->privates['cache.serializer'] ?? null);
            }
            if (isset($this->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? null);
            }
            if (isset($this->privates['cache.property_info'])) {
                yield 'cache.property_info' => ($this->privates['cache.property_info'] ?? null);
            }
            if (isset($this->privates['doctrine.result_cache_pool'])) {
                yield 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? null);
            }
            if (isset($this->privates['doctrine.system_cache_pool'])) {
                yield 'doctrine.system_cache_pool' => ($this->privates['doctrine.system_cache_pool'] ?? null);
            }
            if (isset($this->privates['form.choice_list_factory.cached'])) {
                yield 'form.choice_list_factory.cached' => ($this->privates['form.choice_list_factory.cached'] ?? null);
            }
            if (isset($this->privates['mailer.logger_message_listener'])) {
                yield 'mailer.logger_message_listener' => ($this->privates['mailer.logger_message_listener'] ?? null);
            }
            if (isset($this->privates['debug.stopwatch'])) {
                yield 'debug.stopwatch' => ($this->privates['debug.stopwatch'] ?? null);
            }
            if (isset($this->privates['monolog.handler.main'])) {
                yield 'monolog.handler.main' => ($this->privates['monolog.handler.main'] ?? null);
            }
            if (isset($this->privates['monolog.handler.console'])) {
                yield 'monolog.handler.console' => ($this->privates['monolog.handler.console'] ?? null);
            }
            if (isset($this->services['doctrine'])) {
                yield 'doctrine' => ($this->services['doctrine'] ?? null);
            }
            if (isset($this->privates['form.type.entity'])) {
                yield 'form.type.entity' => ($this->privates['form.type.entity'] ?? null);
            }
            if (isset($this->services['security.token_storage'])) {
                yield 'security.token_storage' => ($this->services['security.token_storage'] ?? null);
            }
            if (isset($this->privates['cache.security_expression_language'])) {
                yield 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? null);
            }
        }, function () {
            return 0 + (int) (isset($this->services['cache.app'])) + (int) (isset($this->services['cache.system'])) + (int) (isset($this->privates['cache.validator'])) + (int) (isset($this->privates['cache.serializer'])) + (int) (isset($this->privates['cache.annotations'])) + (int) (isset($this->privates['cache.property_info'])) + (int) (isset($this->privates['doctrine.result_cache_pool'])) + (int) (isset($this->privates['doctrine.system_cache_pool'])) + (int) (isset($this->privates['form.choice_list_factory.cached'])) + (int) (isset($this->privates['mailer.logger_message_listener'])) + (int) (isset($this->privates['debug.stopwatch'])) + (int) (isset($this->privates['monolog.handler.main'])) + (int) (isset($this->privates['monolog.handler.console'])) + (int) (isset($this->services['doctrine'])) + (int) (isset($this->privates['form.type.entity'])) + (int) (isset($this->services['security.token_storage'])) + (int) (isset($this->privates['cache.security_expression_language']));
        }), ['cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset'], 'doctrine.result_cache_pool' => [0 => 'reset'], 'doctrine.system_cache_pool' => [0 => 'reset'], 'form.choice_list_factory.cached' => [0 => 'reset'], 'mailer.logger_message_listener' => [0 => 'reset'], 'debug.stopwatch' => [0 => 'reset'], 'monolog.handler.main' => [0 => 'reset'], 'monolog.handler.console' => [0 => 'reset'], 'doctrine' => [0 => 'reset'], 'form.type.entity' => [0 => 'reset'], 'security.token_storage' => [0 => 'disableUsageTracking', 1 => 'setToken'], 'cache.security_expression_language' => [0 => 'reset']]);
    }

    /*
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(($this->privates['session.storage.native'] ?? $this->getSession_Storage_NativeService()));
    }

    /*
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslatorService()
    {
        $this->services['translator'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService', false],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService', false],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService', false],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService', false],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService', false],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService', false],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService', false],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService', false],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService', false],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService', false],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService', false],
        ], [
            'translation.loader.csv' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.php' => '?',
            'translation.loader.po' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.res' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.yml' => '?',
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'en', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDir.''.'/translations'), 'debug' => false, 'resource_files' => ['af' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.af.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.af.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.af.xlf')], 'ar' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ar.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ar.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ar.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Resources/translations/VerifyEmailBundle.ar.xlf'), 4 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.ar.xlf'), 5 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.ar.php')], 'az' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.az.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.az.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.az.xlf')], 'be' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.be.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.be.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.be.xlf')], 'bg' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.bg.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.bg.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.bg.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.bg.php')], 'bs' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.bs.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.bs.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.bs.xlf')], 'ca' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ca.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ca.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ca.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.ca.php')], 'cs' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cs.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.cs.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.cs.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.cs.php')], 'cy' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cy.xlf')], 'da' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.da.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.da.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.da.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.da.php')], 'de' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.de.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.de.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.de.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Resources/translations/VerifyEmailBundle.de.xlf'), 4 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.de.xlf'), 5 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.de.php')], 'el' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.el.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.el.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.el.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.el.php')], 'en' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.en.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.en.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.en.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Resources/translations/VerifyEmailBundle.en.xlf'), 4 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.en.xlf'), 5 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.en.php')], 'es' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.es.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.es.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.es.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Resources/translations/VerifyEmailBundle.es.xlf'), 4 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.es.xlf'), 5 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.es.php')], 'et' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.et.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.et.xlf')], 'eu' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.eu.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.eu.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.eu.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.eu.php')], 'fa' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fa.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fa.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fa.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.fa.php')], 'fi' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fi.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fi.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fi.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.fi.xlf'), 4 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.fi.php')], 'fr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Resources/translations/VerifyEmailBundle.fr.xlf'), 4 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.fr.xlf'), 5 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.fr.php')], 'gl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.gl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.gl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.gl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.gl.php')], 'he' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.he.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.he.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.he.xlf')], 'hr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.hr.php')], 'hu' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hu.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hu.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hu.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.hu.php')], 'hy' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hy.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hy.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hy.xlf')], 'id' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.id.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.id.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.id.xlf')], 'it' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.it.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.it.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.it.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Resources/translations/VerifyEmailBundle.it.xlf'), 4 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.it.xlf'), 5 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.it.php')], 'ja' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ja.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ja.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ja.xlf')], 'lb' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lb.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lb.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lb.xlf')], 'lt' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lt.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lt.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lt.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.lt.php')], 'lv' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lv.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lv.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lv.xlf')], 'mn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.mn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.mn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.mn.xlf')], 'nb' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nb.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nb.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nb.xlf')], 'nl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Resources/translations/VerifyEmailBundle+intl-icu.nl.xlf'), 4 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.nl.php')], 'nn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nn.xlf')], 'no' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.no.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.no.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.no.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.no.php')], 'pl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Resources/translations/VerifyEmailBundle.pl.xlf'), 4 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.pl.xlf'), 5 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.pl.php')], 'pt' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pt.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Resources/translations/VerifyEmailBundle.pt.xlf'), 4 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.pt.xlf'), 5 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.pt.php')], 'pt_BR' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pt_BR.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.pt_BR.php')], 'ro' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ro.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ro.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ro.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.ro.php')], 'ru' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ru.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ru.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ru.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Resources/translations/VerifyEmailBundle.ru.xlf'), 4 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.ru.xlf'), 5 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.ru.php')], 'sk' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sk.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sk.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sk.xlf')], 'sl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sl.php')], 'sq' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sq.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sq.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sq.xlf')], 'sr_Cyrl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sr_Latn.xlf')], 'sv' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sv.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sv.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sv.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sv.php')], 'th' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.th.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.th.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.th.xlf')], 'tl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.tl.xlf')], 'tr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.tr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Resources/translations/VerifyEmailBundle.tr.xlf'), 4 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.tr.xlf'), 5 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.tr.php')], 'uk' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.uk.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.uk.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.uk.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Resources/translations/VerifyEmailBundle.uk.xlf'), 4 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.uk.xlf'), 5 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.uk.php')], 'uz' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.uz.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.uz.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.uz.xlf')], 'vi' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.vi.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.vi.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.vi.xlf')], 'zh_CN' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.zh_CN.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.zh_CN.php')], 'zh_TW' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.zh_TW.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.zh_TW.xlf')], 'sr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Resources/translations/VerifyEmailBundle.sr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.sr.xlf')], 'sr_RS' => [0 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sr_RS.php')]], 'scanned_directories' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations'), 3 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Resources/translations'), 4 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations'), 5 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations'), 6 => (\dirname(__DIR__, 4).'/translations'), 7 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/translations'), 8 => (\dirname(__DIR__, 4).'/src/Resources/FrameworkBundle/translations'), 9 => (\dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/translations'), 10 => (\dirname(__DIR__, 4).'/src/Resources/SensioFrameworkExtraBundle/translations'), 11 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/translations'), 12 => (\dirname(__DIR__, 4).'/src/Resources/TwigBundle/translations'), 13 => (\dirname(__DIR__, 4).'/vendor/symfony/monolog-bundle/translations'), 14 => (\dirname(__DIR__, 4).'/src/Resources/MonologBundle/translations'), 15 => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/translations'), 16 => (\dirname(__DIR__, 4).'/src/Resources/DoctrineBundle/translations'), 17 => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/translations'), 18 => (\dirname(__DIR__, 4).'/src/Resources/DoctrineMigrationsBundle/translations'), 19 => (\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/translations'), 20 => (\dirname(__DIR__, 4).'/src/Resources/SecurityBundle/translations'), 21 => (\dirname(__DIR__, 4).'/vendor/twig/extra-bundle/translations'), 22 => (\dirname(__DIR__, 4).'/src/Resources/TwigExtraBundle/translations'), 23 => (\dirname(__DIR__, 4).'/src/Resources/SymfonyCastsVerifyEmailBundle/translations'), 24 => (\dirname(__DIR__, 4).'/src/Resources/SymfonyCastsResetPasswordBundle/translations'), 25 => (\dirname(__DIR__, 4).'/src/Resources/EasyAdminBundle/translations'), 26 => (\dirname(__DIR__, 4).'/src/Resources/translations')], 'cache_vary' => ['scanned_directories' => [0 => 'vendor/symfony/validator/Resources/translations', 1 => 'vendor/symfony/form/Resources/translations', 2 => 'vendor/symfony/security-core/Resources/translations', 3 => 'vendor/symfonycasts/verify-email-bundle/src/Resources/translations', 4 => 'vendor/symfonycasts/reset-password-bundle/src/Resources/translations', 5 => 'vendor/easycorp/easyadmin-bundle/src/Resources/translations', 6 => 'translations', 7 => 'vendor/symfony/framework-bundle/translations', 8 => 'src/Resources/FrameworkBundle/translations', 9 => 'vendor/sensio/framework-extra-bundle/src/translations', 10 => 'src/Resources/SensioFrameworkExtraBundle/translations', 11 => 'vendor/symfony/twig-bundle/translations', 12 => 'src/Resources/TwigBundle/translations', 13 => 'vendor/symfony/monolog-bundle/translations', 14 => 'src/Resources/MonologBundle/translations', 15 => 'vendor/doctrine/doctrine-bundle/translations', 16 => 'src/Resources/DoctrineBundle/translations', 17 => 'vendor/doctrine/doctrine-migrations-bundle/translations', 18 => 'src/Resources/DoctrineMigrationsBundle/translations', 19 => 'vendor/symfony/security-bundle/translations', 20 => 'src/Resources/SecurityBundle/translations', 21 => 'vendor/twig/extra-bundle/translations', 22 => 'src/Resources/TwigExtraBundle/translations', 23 => 'src/Resources/SymfonyCastsVerifyEmailBundle/translations', 24 => 'src/Resources/SymfonyCastsResetPasswordBundle/translations', 25 => 'src/Resources/EasyAdminBundle/translations', 26 => 'src/Resources/translations']]]);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? ($this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())));
        $instance->setFallbackLocales([0 => 'en']);

        return $instance;
    }

    /*
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = new \Twig\Loader\FilesystemLoader([], \dirname(__DIR__, 4));
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Resources/views'), 'Framework');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Resources/views'), '!Framework');
        $a->addPath((\dirname(__DIR__, 4).'/templates/bundles/TwigBundle'), 'Twig');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/Resources/views'), 'Twig');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/Resources/views'), '!Twig');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Resources/views'), 'DoctrineMigrations');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Resources/views'), '!DoctrineMigrations');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/views'), 'EasyAdmin');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/views'), '!EasyAdmin');
        $a->addPath((\dirname(__DIR__, 4).'/templates'));
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 'email');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), '!email');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'));

        $this->services['twig'] = $instance = new \Twig\Environment($a, ['debug' => false, 'strict_variables' => false, 'autoescape' => 'name', 'cache' => ($this->targetDir.''.'/twig'), 'charset' => 'UTF-8']);

        $b = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $c = new \Symfony\Bridge\Twig\AppVariable();
        $c->setEnvironment('prod');
        $c->setDebug(false);
        if ($this->has('security.token_storage')) {
            $c->setTokenStorage(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
        }
        if ($this->has('request_stack')) {
            $c->setRequestStack($b);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(($this->privates['assets.packages'] ?? $this->getAssets_PackagesService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['router'] ?? $this->getRouterService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($b, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator' => [false, 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator', 'getAdminUrlGeneratorService', false],
        ], [
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator' => '?',
        ])));
        $instance->addGlobal('app', $c);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService', false],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', false],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService', false],
        ], [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
        ])));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'twig.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController
     *
     * @deprecated The "twig.controller.exception" service is deprecated since Symfony 4.4.
     */
    protected function getTwig_Controller_ExceptionService()
    {
        @trigger_error('The "twig.controller.exception" service is deprecated since Symfony 4.4.', E_USER_DEPRECATED);

        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController(($this->services['twig'] ?? $this->getTwigService()), false);
    }

    /*
     * Gets the public 'twig.controller.preview_error' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController
     *
     * @deprecated The "twig.controller.preview_error" service is deprecated since Symfony 4.4.
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        @trigger_error('The "twig.controller.preview_error" service is deprecated since Symfony 4.4.', E_USER_DEPRECATED);

        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), NULL);
    }

    /*
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = ($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator();
    }

    /*
     * Gets the private '.errored..service_locator.1ZmGw6X.EasyCorp\Bundle\EasyAdminBundle\Config\KeyValueStore' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Config\KeyValueStore
     */
    protected function getKeyValueStoreService()
    {
        $this->throw('Cannot autowire service ".service_locator.1ZmGw6X": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.1ZmGw6X.EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext
     */
    protected function getAdminContextService()
    {
        $this->throw('Cannot autowire service ".service_locator.1ZmGw6X": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.1ZmGw6X.EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto
     */
    protected function getEntityDtoService()
    {
        $this->throw('Cannot autowire service ".service_locator.1ZmGw6X": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.7I.FzBw.EasyCorp\Bundle\EasyAdminBundle\Config\Crud' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Config\Crud
     */
    protected function getCrudService()
    {
        $this->throw('Cannot autowire service ".service_locator.7I.FzBw": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.82KoR2v.EasyCorp\Bundle\EasyAdminBundle\Config\Filters' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Config\Filters
     */
    protected function getFiltersService()
    {
        $this->throw('Cannot autowire service ".service_locator.82KoR2v": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Filters" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.RLVVpop.Symfony\Component\Security\Core\User\UserInterface' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\UserInterface
     */
    protected function getUserInterfaceService()
    {
        $this->throw('Cannot autowire service ".service_locator.RLVVpop": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?');
    }

    /*
     * Gets the private '.errored..service_locator.T65nH8T.App\Entity\Address' shared service.
     *
     * @return \App\Entity\Address
     */
    protected function getAddressService()
    {
        $this->throw('Cannot autowire service ".service_locator.T65nH8T": it references class "App\\Entity\\Address" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator._L8Y8bZ.EasyCorp\Bundle\EasyAdminBundle\Config\KeyValueStore' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Config\KeyValueStore
     */
    protected function getKeyValueStore2Service()
    {
        $this->throw('Cannot autowire service ".service_locator._L8Y8bZ": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.eGAETcz.EasyCorp\Bundle\EasyAdminBundle\Config\Actions' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Config\Actions
     */
    protected function getActionsService()
    {
        $this->throw('Cannot autowire service ".service_locator.eGAETcz": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.h2tplhS.EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext
     */
    protected function getAdminContext2Service()
    {
        $this->throw('Cannot autowire service ".service_locator.h2tplhS": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.hVQViHK.EasyCorp\Bundle\EasyAdminBundle\Config\Assets' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Config\Assets
     */
    protected function getAssetsService()
    {
        $this->throw('Cannot autowire service ".service_locator.hVQViHK": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Assets" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.huuTAyO.EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext
     */
    protected function getAdminContext3Service()
    {
        $this->throw('Cannot autowire service ".service_locator.huuTAyO": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.huuTAyO.EasyCorp\Bundle\EasyAdminBundle\Dto\BatchActionDto' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Dto\BatchActionDto
     */
    protected function getBatchActionDtoService()
    {
        $this->throw('Cannot autowire service ".service_locator.huuTAyO": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\BatchActionDto" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.jrmEAfi.EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection
     */
    protected function getFieldCollectionService()
    {
        $this->throw('Cannot autowire service ".service_locator.jrmEAfi": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.jrmEAfi.EasyCorp\Bundle\EasyAdminBundle\Collection\FilterCollection' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Collection\FilterCollection
     */
    protected function getFilterCollectionService()
    {
        $this->throw('Cannot autowire service ".service_locator.jrmEAfi": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FilterCollection" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.jrmEAfi.EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto
     */
    protected function getEntityDto2Service()
    {
        $this->throw('Cannot autowire service ".service_locator.jrmEAfi": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.jrmEAfi.EasyCorp\Bundle\EasyAdminBundle\Dto\SearchDto' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Dto\SearchDto
     */
    protected function getSearchDtoService()
    {
        $this->throw('Cannot autowire service ".service_locator.jrmEAfi": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\SearchDto" but no such service exists.');
    }

    /*
     * Gets the private '.legacy_resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function get_LegacyResolveControllerNameSubscriberService()
    {
        return $this->privates['.legacy_resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))), false);
    }

    /*
     * Gets the private '.service_locator.1UuH9tO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_1UuH9tOService()
    {
        return $this->privates['.service_locator.1UuH9tO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', false],
        ], [
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.1ZmGw6X' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_1ZmGw6XService()
    {
        return $this->privates['.service_locator.1ZmGw6X'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'context' => ['privates', '.errored..service_locator.1ZmGw6X.EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext', NULL, 'Cannot autowire service ".service_locator.1ZmGw6X": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext" but no such service exists.'],
            'entityDto' => ['privates', '.errored..service_locator.1ZmGw6X.EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto', NULL, 'Cannot autowire service ".service_locator.1ZmGw6X": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto" but no such service exists.'],
            'formOptions' => ['privates', '.errored..service_locator.1ZmGw6X.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore', NULL, 'Cannot autowire service ".service_locator.1ZmGw6X": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore" but no such service exists.'],
        ], [
            'context' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext',
            'entityDto' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto',
            'formOptions' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore',
        ]);
    }

    /*
     * Gets the private '.service_locator.2dNBwtL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_2dNBwtLService()
    {
        return $this->privates['.service_locator.2dNBwtL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'repoHomeSlider' => ['privates', 'App\\Repository\\HomeSliderRepository', 'getHomeSliderRepositoryService', false],
            'repoProduct' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', false],
        ], [
            'repoHomeSlider' => 'App\\Repository\\HomeSliderRepository',
            'repoProduct' => 'App\\Repository\\ProductRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.7I.FzBw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_7I_FzBwService()
    {
        return $this->privates['.service_locator.7I.FzBw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'crud' => ['privates', '.errored..service_locator.7I.FzBw.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud', NULL, 'Cannot autowire service ".service_locator.7I.FzBw": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud" but no such service exists.'],
        ], [
            'crud' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud',
        ]);
    }

    /*
     * Gets the private '.service_locator.82KoR2v' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_82KoR2vService()
    {
        return $this->privates['.service_locator.82KoR2v'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'filters' => ['privates', '.errored..service_locator.82KoR2v.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Filters', NULL, 'Cannot autowire service ".service_locator.82KoR2v": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Filters" but no such service exists.'],
        ], [
            'filters' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Filters',
        ]);
    }

    /*
     * Gets the private '.service_locator.8IBLw83' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_8IBLw83Service()
    {
        return $this->privates['.service_locator.8IBLw83'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'cartServices' => ['privates', 'App\\Services\\CartServices', 'getCartServicesService', false],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'stockManager' => ['privates', 'App\\Services\\StockManagerServices', 'getStockManagerServicesService', false],
        ], [
            'cartServices' => 'App\\Services\\CartServices',
            'manager' => '?',
            'stockManager' => 'App\\Services\\StockManagerServices',
        ]);
    }

    /*
     * Gets the private '.service_locator.KbfX2Nv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_KbfX2NvService()
    {
        return $this->privates['.service_locator.KbfX2Nv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'cartServices' => ['privates', 'App\\Services\\CartServices', 'getCartServicesService', false],
        ], [
            'cartServices' => 'App\\Services\\CartServices',
        ]);
    }

    /*
     * Gets the private '.service_locator.LvLJjQi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_LvLJjQiService()
    {
        return $this->privates['.service_locator.LvLJjQi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'orderServices' => ['privates', 'App\\Services\\OrderServices', 'getOrderServicesService', false],
        ], [
            'orderServices' => 'App\\Services\\OrderServices',
        ]);
    }

    /*
     * Gets the private '.service_locator.QDge2Zf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_QDge2ZfService()
    {
        return $this->privates['.service_locator.QDge2Zf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'repoOrder' => ['privates', 'App\\Repository\\OrderRepository', 'getOrderRepositoryService', false],
        ], [
            'repoOrder' => 'App\\Repository\\OrderRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.RLVVpop' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_RLVVpopService()
    {
        return $this->privates['.service_locator.RLVVpop'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'user' => ['privates', '.errored..service_locator.RLVVpop.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.RLVVpop": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }

    /*
     * Gets the private '.service_locator.T65nH8T' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_T65nH8TService()
    {
        return $this->privates['.service_locator.T65nH8T'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'address' => ['privates', '.errored..service_locator.T65nH8T.App\\Entity\\Address', NULL, 'Cannot autowire service ".service_locator.T65nH8T": it references class "App\\Entity\\Address" but no such service exists.'],
        ], [
            'address' => 'App\\Entity\\Address',
        ]);
    }

    /*
     * Gets the private '.service_locator.ZnKYywd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_ZnKYywdService()
    {
        return $this->privates['.service_locator.ZnKYywd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'addressRepository' => ['privates', 'App\\Repository\\AddressRepository', 'getAddressRepositoryService', false],
        ], [
            'addressRepository' => 'App\\Repository\\AddressRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator._L8Y8bZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_L8Y8bZService()
    {
        return $this->privates['.service_locator._L8Y8bZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'responseParameters' => ['privates', '.errored..service_locator._L8Y8bZ.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore', NULL, 'Cannot autowire service ".service_locator._L8Y8bZ": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore" but no such service exists.'],
        ], [
            'responseParameters' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore',
        ]);
    }

    /*
     * Gets the private '.service_locator.ccM2MGC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_CcM2MGCService()
    {
        return $this->privates['.service_locator.ccM2MGC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
        ], [
            'passwordEncoder' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator.eGAETcz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_EGAETczService()
    {
        return $this->privates['.service_locator.eGAETcz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'actions' => ['privates', '.errored..service_locator.eGAETcz.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions', NULL, 'Cannot autowire service ".service_locator.eGAETcz": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions" but no such service exists.'],
        ], [
            'actions' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions',
        ]);
    }

    /*
     * Gets the private '.service_locator.g.xob4v' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_G_Xob4vService()
    {
        return $this->privates['.service_locator.g.xob4v'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'authenticationUtils' => ['services', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', false],
        ], [
            'authenticationUtils' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator.gDl3Pzq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_GDl3PzqService()
    {
        return $this->privates['.service_locator.gDl3Pzq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'emailSender' => ['privates', 'App\\Services\\EmailSender', 'getEmailSenderService', false],
        ], [
            'emailSender' => 'App\\Services\\EmailSender',
        ]);
    }

    /*
     * Gets the private '.service_locator.h2tplhS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_H2tplhSService()
    {
        return $this->privates['.service_locator.h2tplhS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'context' => ['privates', '.errored..service_locator.h2tplhS.EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext', NULL, 'Cannot autowire service ".service_locator.h2tplhS": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext" but no such service exists.'],
        ], [
            'context' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext',
        ]);
    }

    /*
     * Gets the private '.service_locator.hVQViHK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_HVQViHKService()
    {
        return $this->privates['.service_locator.hVQViHK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'assets' => ['privates', '.errored..service_locator.hVQViHK.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Assets', NULL, 'Cannot autowire service ".service_locator.hVQViHK": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Assets" but no such service exists.'],
        ], [
            'assets' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Assets',
        ]);
    }

    /*
     * Gets the private '.service_locator.haYF1Xh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_HaYF1XhService()
    {
        return $this->privates['.service_locator.haYF1Xh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'repoProduct' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', false],
        ], [
            'repoProduct' => 'App\\Repository\\ProductRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.huuTAyO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_HuuTAyOService()
    {
        return $this->privates['.service_locator.huuTAyO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'batchActionDto' => ['privates', '.errored..service_locator.huuTAyO.EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\BatchActionDto', NULL, 'Cannot autowire service ".service_locator.huuTAyO": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\BatchActionDto" but no such service exists.'],
            'context' => ['privates', '.errored..service_locator.huuTAyO.EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext', NULL, 'Cannot autowire service ".service_locator.huuTAyO": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext" but no such service exists.'],
        ], [
            'batchActionDto' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\BatchActionDto',
            'context' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext',
        ]);
    }

    /*
     * Gets the private '.service_locator.iP8eVIx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_IP8eVIxService()
    {
        return $this->privates['.service_locator.iP8eVIx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', false],
        ], [
            'mailer' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator.jrmEAfi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_JrmEAfiService()
    {
        return $this->privates['.service_locator.jrmEAfi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'entityDto' => ['privates', '.errored..service_locator.jrmEAfi.EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto', NULL, 'Cannot autowire service ".service_locator.jrmEAfi": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto" but no such service exists.'],
            'fields' => ['privates', '.errored..service_locator.jrmEAfi.EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection', NULL, 'Cannot autowire service ".service_locator.jrmEAfi": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection" but no such service exists.'],
            'filters' => ['privates', '.errored..service_locator.jrmEAfi.EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FilterCollection', NULL, 'Cannot autowire service ".service_locator.jrmEAfi": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FilterCollection" but no such service exists.'],
            'searchDto' => ['privates', '.errored..service_locator.jrmEAfi.EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\SearchDto', NULL, 'Cannot autowire service ".service_locator.jrmEAfi": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\SearchDto" but no such service exists.'],
        ], [
            'entityDto' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto',
            'fields' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection',
            'filters' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FilterCollection',
            'searchDto' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\SearchDto',
        ]);
    }

    /*
     * Gets the private '.service_locator.ky4eP1x' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Ky4eP1xService()
    {
        return $this->privates['.service_locator.ky4eP1x'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ActionFactory' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ActionFactory', 'getActionFactoryService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ControllerFactory' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ControllerFactory', 'getControllerFactoryService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory', 'getEntityFactoryService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FilterFactory' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FilterFactory', 'getFilterFactoryService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory', 'getFormFactoryService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\PaginatorFactory' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\PaginatorFactory', 'getPaginatorFactoryService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityRepository' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityRepository', 'getEntityRepositoryService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityUpdater' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityUpdater', 'getEntityUpdaterService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider', 'getAdminContextProviderService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\FieldProvider' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\FieldProvider', 'getFieldProviderService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator' => [false, 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator', 'getAdminUrlGeneratorService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator', 'getCrudUrlGeneratorService', false],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'form.factory' => ['services', 'form.factory', 'getForm_FactoryService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ActionFactory' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ActionFactory',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ControllerFactory' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ControllerFactory',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FilterFactory' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FilterFactory',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\PaginatorFactory' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\PaginatorFactory',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityRepository' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityRepository',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityUpdater' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityUpdater',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\FieldProvider' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\FieldProvider',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator',
            'doctrine' => '?',
            'event_dispatcher' => '?',
            'form.factory' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'serializer' => '?',
            'session' => '?',
            'twig' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator.sYRdHc0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_SYRdHc0Service()
    {
        return $this->privates['.service_locator.sYRdHc0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'orderServices' => ['privates', 'App\\Services\\OrderServices', 'getOrderServicesService', false],
        ], [
            'manager' => '?',
            'orderServices' => 'App\\Services\\OrderServices',
        ]);
    }

    /*
     * Gets the private '.service_locator.vdmMuyE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_VdmMuyEService()
    {
        return $this->privates['.service_locator.vdmMuyE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'form.factory' => ['services', 'form.factory', 'getForm_FactoryService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'doctrine' => '?',
            'form.factory' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'serializer' => '?',
            'session' => '?',
            'twig' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator.x8FmIZ0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_X8FmIZ0Service()
    {
        return $this->privates['.service_locator.x8FmIZ0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'entityManager' => '?',
        ]);
    }

    /*
     * Gets the private 'App\Form\AddressType' shared autowired service.
     *
     * @return \App\Form\AddressType
     */
    protected function getAddressTypeService()
    {
        return $this->privates['App\\Form\\AddressType'] = new \App\Form\AddressType();
    }

    /*
     * Gets the private 'App\Form\ChangePasswordFormType' shared autowired service.
     *
     * @return \App\Form\ChangePasswordFormType
     */
    protected function getChangePasswordFormTypeService()
    {
        return $this->privates['App\\Form\\ChangePasswordFormType'] = new \App\Form\ChangePasswordFormType();
    }

    /*
     * Gets the private 'App\Form\CheckoutType' shared autowired service.
     *
     * @return \App\Form\CheckoutType
     */
    protected function getCheckoutTypeService()
    {
        return $this->privates['App\\Form\\CheckoutType'] = new \App\Form\CheckoutType();
    }

    /*
     * Gets the private 'App\Form\ContactType' shared autowired service.
     *
     * @return \App\Form\ContactType
     */
    protected function getContactTypeService()
    {
        return $this->privates['App\\Form\\ContactType'] = new \App\Form\ContactType();
    }

    /*
     * Gets the private 'App\Form\RegistrationFormType' shared autowired service.
     *
     * @return \App\Form\RegistrationFormType
     */
    protected function getRegistrationFormTypeService()
    {
        return $this->privates['App\\Form\\RegistrationFormType'] = new \App\Form\RegistrationFormType();
    }

    /*
     * Gets the private 'App\Form\ResetPasswordRequestFormType' shared autowired service.
     *
     * @return \App\Form\ResetPasswordRequestFormType
     */
    protected function getResetPasswordRequestFormTypeService()
    {
        return $this->privates['App\\Form\\ResetPasswordRequestFormType'] = new \App\Form\ResetPasswordRequestFormType();
    }

    /*
     * Gets the private 'App\Form\SearchProductType' shared autowired service.
     *
     * @return \App\Form\SearchProductType
     */
    protected function getSearchProductTypeService()
    {
        return $this->privates['App\\Form\\SearchProductType'] = new \App\Form\SearchProductType();
    }

    /*
     * Gets the private 'App\Repository\AddressRepository' shared autowired service.
     *
     * @return \App\Repository\AddressRepository
     */
    protected function getAddressRepositoryService()
    {
        return $this->privates['App\\Repository\\AddressRepository'] = new \App\Repository\AddressRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\CarrierRepository' shared autowired service.
     *
     * @return \App\Repository\CarrierRepository
     */
    protected function getCarrierRepositoryService()
    {
        return $this->privates['App\\Repository\\CarrierRepository'] = new \App\Repository\CarrierRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\CartDetailsRepository' shared autowired service.
     *
     * @return \App\Repository\CartDetailsRepository
     */
    protected function getCartDetailsRepositoryService()
    {
        return $this->privates['App\\Repository\\CartDetailsRepository'] = new \App\Repository\CartDetailsRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\CartRepository' shared autowired service.
     *
     * @return \App\Repository\CartRepository
     */
    protected function getCartRepositoryService()
    {
        return $this->privates['App\\Repository\\CartRepository'] = new \App\Repository\CartRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\CategoriesRepository' shared autowired service.
     *
     * @return \App\Repository\CategoriesRepository
     */
    protected function getCategoriesRepositoryService()
    {
        return $this->privates['App\\Repository\\CategoriesRepository'] = new \App\Repository\CategoriesRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\ContactRepository' shared autowired service.
     *
     * @return \App\Repository\ContactRepository
     */
    protected function getContactRepositoryService()
    {
        return $this->privates['App\\Repository\\ContactRepository'] = new \App\Repository\ContactRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\HomeSliderRepository' shared autowired service.
     *
     * @return \App\Repository\HomeSliderRepository
     */
    protected function getHomeSliderRepositoryService()
    {
        return $this->privates['App\\Repository\\HomeSliderRepository'] = new \App\Repository\HomeSliderRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\OrderDetailsRepository' shared autowired service.
     *
     * @return \App\Repository\OrderDetailsRepository
     */
    protected function getOrderDetailsRepositoryService()
    {
        return $this->privates['App\\Repository\\OrderDetailsRepository'] = new \App\Repository\OrderDetailsRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\OrderRepository' shared autowired service.
     *
     * @return \App\Repository\OrderRepository
     */
    protected function getOrderRepositoryService()
    {
        return $this->privates['App\\Repository\\OrderRepository'] = new \App\Repository\OrderRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\ProductRepository' shared autowired service.
     *
     * @return \App\Repository\ProductRepository
     */
    protected function getProductRepositoryService()
    {
        return $this->privates['App\\Repository\\ProductRepository'] = new \App\Repository\ProductRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\RelatedProductRepository' shared autowired service.
     *
     * @return \App\Repository\RelatedProductRepository
     */
    protected function getRelatedProductRepositoryService()
    {
        return $this->privates['App\\Repository\\RelatedProductRepository'] = new \App\Repository\RelatedProductRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\ResetPasswordRequestRepository' shared autowired service.
     *
     * @return \App\Repository\ResetPasswordRequestRepository
     */
    protected function getResetPasswordRequestRepositoryService()
    {
        return $this->privates['App\\Repository\\ResetPasswordRequestRepository'] = new \App\Repository\ResetPasswordRequestRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\ReviewsProductRepository' shared autowired service.
     *
     * @return \App\Repository\ReviewsProductRepository
     */
    protected function getReviewsProductRepositoryService()
    {
        return $this->privates['App\\Repository\\ReviewsProductRepository'] = new \App\Repository\ReviewsProductRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\UserRepository' shared autowired service.
     *
     * @return \App\Repository\UserRepository
     */
    protected function getUserRepositoryService()
    {
        return $this->privates['App\\Repository\\UserRepository'] = new \App\Repository\UserRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Security\LoginAuthenticator' shared autowired service.
     *
     * @return \App\Security\LoginAuthenticator
     */
    protected function getLoginAuthenticatorService()
    {
        return $this->privates['App\\Security\\LoginAuthenticator'] = new \App\Security\LoginAuthenticator(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()), ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService()));
    }

    /*
     * Gets the private 'App\Services\CartServices' shared autowired service.
     *
     * @return \App\Services\CartServices
     */
    protected function getCartServicesService()
    {
        return $this->privates['App\\Services\\CartServices'] = new \App\Services\CartServices(($this->services['session'] ?? $this->getSessionService()), ($this->privates['App\\Repository\\ProductRepository'] ?? $this->getProductRepositoryService()));
    }

    /*
     * Gets the private 'App\Services\EmailSender' shared autowired service.
     *
     * @return \App\Services\EmailSender
     */
    protected function getEmailSenderService()
    {
        return $this->privates['App\\Services\\EmailSender'] = new \App\Services\EmailSender();
    }

    /*
     * Gets the private 'App\Services\OrderServices' shared autowired service.
     *
     * @return \App\Services\OrderServices
     */
    protected function getOrderServicesService()
    {
        return $this->privates['App\\Services\\OrderServices'] = new \App\Services\OrderServices(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['App\\Repository\\ProductRepository'] ?? $this->getProductRepositoryService()));
    }

    /*
     * Gets the private 'App\Services\StockManagerServices' shared autowired service.
     *
     * @return \App\Services\StockManagerServices
     */
    protected function getStockManagerServicesService()
    {
        return $this->privates['App\\Services\\StockManagerServices'] = new \App\Services\StockManagerServices(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['App\\Repository\\ProductRepository'] ?? $this->getProductRepositoryService()));
    }

    /*
     * Gets the private 'Doctrine\Bundle\DoctrineBundle\Dbal\ManagerRegistryAwareConnectionProvider' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Dbal\ManagerRegistryAwareConnectionProvider
     */
    protected function getManagerRegistryAwareConnectionProviderService()
    {
        return $this->privates['Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider'] = new \Doctrine\Bundle\DoctrineBundle\Dbal\ManagerRegistryAwareConnectionProvider(new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default'));
    }

    /*
     * Gets the private 'Doctrine\DBAL\Tools\Console\Command\RunSqlCommand' shared service.
     *
     * @return \Doctrine\DBAL\Tools\Console\Command\RunSqlCommand
     */
    protected function getRunSqlCommandService()
    {
        $this->privates['Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand'] = $instance = new \Doctrine\DBAL\Tools\Console\Command\RunSqlCommand(($this->privates['Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider'] ?? $this->getManagerRegistryAwareConnectionProviderService()));

        $instance->setName('dbal:run-sql');

        return $instance;
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\AdminContextResolver' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\AdminContextResolver
     */
    protected function getAdminContextResolverService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\ArgumentResolver\\AdminContextResolver'] = new \EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\AdminContextResolver(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\BatchActionDtoResolver' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\BatchActionDtoResolver
     */
    protected function getBatchActionDtoResolverService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\ArgumentResolver\\BatchActionDtoResolver'] = new \EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\BatchActionDtoResolver(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()), $this->getAdminUrlGeneratorService());
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Cache\CacheWarmer' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Cache\CacheWarmer
     */
    protected function getCacheWarmer2Service()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Cache\\CacheWarmer'] = new \EasyCorp\Bundle\EasyAdminBundle\Cache\CacheWarmer(($this->services['router'] ?? $this->getRouterService()));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\EventListener\AdminRouterSubscriber' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\EventListener\AdminRouterSubscriber
     */
    protected function getAdminRouterSubscriberService()
    {
        $a = ($this->services['translator'] ?? $this->getTranslatorService());
        $b = ($this->services['router'] ?? $this->getRouterService());
        $c = ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\CrudControllerRegistry'] ?? $this->getCrudControllerRegistryService());

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\EventListener\\AdminRouterSubscriber'] = new \EasyCorp\Bundle\EasyAdminBundle\EventListener\AdminRouterSubscriber(new \EasyCorp\Bundle\EasyAdminBundle\Factory\AdminContextFactory($this->targetDir.'', $a, ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), new \EasyCorp\Bundle\EasyAdminBundle\Factory\MenuFactory(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Security\\AuthorizationChecker'] ?? $this->getAuthorizationCheckerService()), $a, $b, ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()), $this->getAdminUrlGeneratorService()), $c, ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory'] ?? $this->getEntityFactoryService())), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\DashboardControllerRegistry'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\DashboardControllerRegistry'] = new \EasyCorp\Bundle\EasyAdminBundle\Registry\DashboardControllerRegistry($this->getEnv('APP_SECRET'), $this->targetDir.'', [0 => 'App\\Controller\\Admin\\DashboardController']))), $c, ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ControllerFactory'] ?? $this->getControllerFactoryService()), ($this->privates['controller_resolver'] ?? $this->getControllerResolverService()), $b, $b, ($this->services['twig'] ?? $this->getTwigService()), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\UrlSigner'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\UrlSigner'] = new \EasyCorp\Bundle\EasyAdminBundle\Router\UrlSigner($this->getEnv('APP_SECRET')))));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\EventListener\CrudResponseListener' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\EventListener\CrudResponseListener
     */
    protected function getCrudResponseListenerService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\EventListener\\CrudResponseListener'] = new \EasyCorp\Bundle\EasyAdminBundle\EventListener\CrudResponseListener(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\EventListener\ExceptionListener' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\EventListener\ExceptionListener
     */
    protected function getExceptionListenerService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\EventListener\\ExceptionListener'] = new \EasyCorp\Bundle\EasyAdminBundle\EventListener\ExceptionListener(false, ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Factory\ActionFactory' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Factory\ActionFactory
     */
    protected function getActionFactoryService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ActionFactory'] = new \EasyCorp\Bundle\EasyAdminBundle\Factory\ActionFactory(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Security\\AuthorizationChecker'] ?? $this->getAuthorizationCheckerService()), ($this->services['translator'] ?? $this->getTranslatorService()), $this->getAdminUrlGeneratorService(), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Factory\ControllerFactory' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Factory\ControllerFactory
     */
    protected function getControllerFactoryService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ControllerFactory'] = new \EasyCorp\Bundle\EasyAdminBundle\Factory\ControllerFactory(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\DashboardControllerRegistry'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\DashboardControllerRegistry'] = new \EasyCorp\Bundle\EasyAdminBundle\Registry\DashboardControllerRegistry($this->getEnv('APP_SECRET'), $this->targetDir.'', [0 => 'App\\Controller\\Admin\\DashboardController']))), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\CrudControllerRegistry'] ?? $this->getCrudControllerRegistryService()), ($this->privates['controller_resolver'] ?? $this->getControllerResolverService()));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Factory\EntityFactory' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Factory\EntityFactory
     */
    protected function getEntityFactoryService()
    {
        $a = ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Security\\AuthorizationChecker'] ?? $this->getAuthorizationCheckerService());

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory'] = new \EasyCorp\Bundle\EasyAdminBundle\Factory\EntityFactory(new \EasyCorp\Bundle\EasyAdminBundle\Factory\FieldFactory(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()), $a, new RewindableGenerator(function () {
            yield 0 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CommonPreConfigurator'] ?? $this->getCommonPreConfiguratorService());
            yield 1 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\ArrayConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\ArrayConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\ArrayConfigurator()));
            yield 2 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\AssociationConfigurator'] ?? $this->getAssociationConfiguratorService());
            yield 3 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\AvatarConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\AvatarConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\AvatarConfigurator()));
            yield 4 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\BooleanConfigurator'] ?? $this->getBooleanConfiguratorService());
            yield 5 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CodeEditorConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CodeEditorConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CodeEditorConfigurator()));
            yield 6 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CollectionConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CollectionConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CollectionConfigurator()));
            yield 7 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CountryConfigurator'] ?? $this->getCountryConfiguratorService());
            yield 8 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CurrencyConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CurrencyConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CurrencyConfigurator()));
            yield 9 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\DateTimeConfigurator'] ?? $this->getDateTimeConfiguratorService());
            yield 10 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\EmailConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\EmailConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\EmailConfigurator()));
            yield 11 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\FormConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\FormConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\FormConfigurator()));
            yield 12 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\IdConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\IdConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\IdConfigurator()));
            yield 13 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\ImageConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\ImageConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\ImageConfigurator(\dirname(__DIR__, 4))));
            yield 14 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\LanguageConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\LanguageConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\LanguageConfigurator()));
            yield 15 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\LocaleConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\LocaleConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\LocaleConfigurator()));
            yield 16 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\MoneyConfigurator'] ?? $this->getMoneyConfiguratorService());
            yield 17 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\NumberConfigurator'] ?? $this->getNumberConfiguratorService());
            yield 18 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\PercentConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\PercentConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\PercentConfigurator()));
            yield 19 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\ChoiceConfigurator'] ?? $this->getChoiceConfiguratorService());
            yield 20 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\SlugConfigurator'] ?? $this->getSlugConfiguratorService());
            yield 21 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\TelephoneConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\TelephoneConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\TelephoneConfigurator()));
            yield 22 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\TextConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\TextConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\TextConfigurator()));
            yield 23 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\TextEditorConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\TextEditorConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\TextEditorConfigurator()));
            yield 24 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\TimezoneConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\TimezoneConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\TimezoneConfigurator()));
            yield 25 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\UrlConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\UrlConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\UrlConfigurator()));
            yield 26 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CommonPostConfigurator'] ?? $this->getCommonPostConfiguratorService());
        }, 27)), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ActionFactory'] ?? $this->getActionFactoryService()), $a, ($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Factory\FilterFactory' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Factory\FilterFactory
     */
    protected function getFilterFactoryService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FilterFactory'] = new \EasyCorp\Bundle\EasyAdminBundle\Factory\FilterFactory(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()), new RewindableGenerator(function () {
            yield 0 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\CommonConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\CommonConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\CommonConfigurator()));
            yield 1 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\ChoiceConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\ChoiceConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\ChoiceConfigurator()));
            yield 2 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\ComparisonConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\ComparisonConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\ComparisonConfigurator()));
            yield 3 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\DateTimeConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\DateTimeConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\DateTimeConfigurator()));
            yield 4 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\EntityConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\EntityConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\EntityConfigurator()));
            yield 5 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\NullConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\NullConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\NullConfigurator()));
            yield 6 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\NumericConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\NumericConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\NumericConfigurator()));
            yield 7 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\TextConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\TextConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\TextConfigurator()));
        }, 8));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Factory\FormFactory' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Factory\FormFactory
     */
    protected function getFormFactoryService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory'] = new \EasyCorp\Bundle\EasyAdminBundle\Factory\FormFactory(($this->services['form.factory'] ?? $this->getForm_FactoryService()), $this->getAdminUrlGeneratorService());
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Factory\PaginatorFactory' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Factory\PaginatorFactory
     */
    protected function getPaginatorFactoryService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\PaginatorFactory'] = new \EasyCorp\Bundle\EasyAdminBundle\Factory\PaginatorFactory(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()), new \EasyCorp\Bundle\EasyAdminBundle\Orm\EntityPaginator($this->getAdminUrlGeneratorService(), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory'] ?? $this->getEntityFactoryService())));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\AssociationConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\AssociationConfigurator
     */
    protected function getAssociationConfiguratorService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\AssociationConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\AssociationConfigurator(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory'] ?? $this->getEntityFactoryService()), $this->getAdminUrlGeneratorService(), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\BooleanConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\BooleanConfigurator
     */
    protected function getBooleanConfiguratorService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\BooleanConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\BooleanConfigurator($this->getAdminUrlGeneratorService());
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\ChoiceConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\ChoiceConfigurator
     */
    protected function getChoiceConfiguratorService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\ChoiceConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\ChoiceConfigurator(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CommonPostConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CommonPostConfigurator
     */
    protected function getCommonPostConfiguratorService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CommonPostConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CommonPostConfigurator(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()), 'UTF-8');
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CommonPreConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CommonPreConfigurator
     */
    protected function getCommonPreConfiguratorService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CommonPreConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CommonPreConfigurator(($this->services['translator'] ?? $this->getTranslatorService()), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CountryConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CountryConfigurator
     */
    protected function getCountryConfiguratorService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CountryConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CountryConfigurator(($this->privates['assets.packages'] ?? $this->getAssets_PackagesService()));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\DateTimeConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\DateTimeConfigurator
     */
    protected function getDateTimeConfiguratorService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\DateTimeConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\DateTimeConfigurator(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Intl\\IntlFormatter'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Intl\\IntlFormatter'] = new \EasyCorp\Bundle\EasyAdminBundle\Intl\IntlFormatter())));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\MoneyConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\MoneyConfigurator
     */
    protected function getMoneyConfiguratorService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\MoneyConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\MoneyConfigurator(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Intl\\IntlFormatter'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Intl\\IntlFormatter'] = new \EasyCorp\Bundle\EasyAdminBundle\Intl\IntlFormatter())), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\NumberConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\NumberConfigurator
     */
    protected function getNumberConfiguratorService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\NumberConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\NumberConfigurator(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Intl\\IntlFormatter'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Intl\\IntlFormatter'] = new \EasyCorp\Bundle\EasyAdminBundle\Intl\IntlFormatter())));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\SlugConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\SlugConfigurator
     */
    protected function getSlugConfiguratorService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\SlugConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\SlugConfigurator(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Form\Extension\EaCrudFormTypeExtension' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Extension\EaCrudFormTypeExtension
     */
    protected function getEaCrudFormTypeExtensionService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\EaCrudFormTypeExtension'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Extension\EaCrudFormTypeExtension(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Form\Type\CrudFormType' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Type\CrudFormType
     */
    protected function getCrudFormTypeService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\CrudFormType(($this->privates['form.type_guesser.doctrine'] ?? $this->getForm_TypeGuesser_DoctrineService()));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType
     */
    protected function getFileUploadTypeService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType(\dirname(__DIR__, 4));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Form\Type\FiltersFormType' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Type\FiltersFormType
     */
    protected function getFiltersFormTypeService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\FiltersFormType();
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Orm\EntityRepository' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Orm\EntityRepository
     */
    protected function getEntityRepositoryService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityRepository'] = new \EasyCorp\Bundle\EasyAdminBundle\Orm\EntityRepository(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()), ($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory'] ?? $this->getEntityFactoryService()), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory'] ?? $this->getFormFactoryService()));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Orm\EntityUpdater' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Orm\EntityUpdater
     */
    protected function getEntityUpdaterService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityUpdater'] = new \EasyCorp\Bundle\EasyAdminBundle\Orm\EntityUpdater(($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Provider\AdminContextProvider' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Provider\AdminContextProvider
     */
    protected function getAdminContextProviderService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] = new \EasyCorp\Bundle\EasyAdminBundle\Provider\AdminContextProvider(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Provider\FieldProvider' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Provider\FieldProvider
     */
    protected function getFieldProviderService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\FieldProvider'] = new \EasyCorp\Bundle\EasyAdminBundle\Provider\FieldProvider(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Registry\CrudControllerRegistry' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Registry\CrudControllerRegistry
     */
    protected function getCrudControllerRegistryService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\CrudControllerRegistry'] = new \EasyCorp\Bundle\EasyAdminBundle\Registry\CrudControllerRegistry($this->getEnv('APP_SECRET'), [0 => 'App\\Controller\\Admin\\CarrierCrudController', 1 => 'App\\Controller\\Admin\\CartCrudController', 2 => 'App\\Controller\\Admin\\CategoriesCrudController', 3 => 'App\\Controller\\Admin\\ContactCrudController', 4 => 'App\\Controller\\Admin\\HomeSliderCrudController', 5 => 'App\\Controller\\Admin\\OrderCrudController', 6 => 'App\\Controller\\Admin\\ProductCrudController']);
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator' service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator
     */
    protected function getAdminUrlGeneratorService()
    {
        return new \EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()), ($this->services['router'] ?? $this->getRouterService()), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\DashboardControllerRegistry'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\DashboardControllerRegistry'] = new \EasyCorp\Bundle\EasyAdminBundle\Registry\DashboardControllerRegistry($this->getEnv('APP_SECRET'), $this->targetDir.'', [0 => 'App\\Controller\\Admin\\DashboardController']))), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\CrudControllerRegistry'] ?? $this->getCrudControllerRegistryService()), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\UrlSigner'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\UrlSigner'] = new \EasyCorp\Bundle\EasyAdminBundle\Router\UrlSigner($this->getEnv('APP_SECRET')))));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator
     *
     * @deprecated Since easycorp/easyadmin-bundle 3.2.0: The "EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator service is deprecated, use "EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator" instead.
     */
    protected function getCrudUrlGeneratorService()
    {
        @trigger_error('Since easycorp/easyadmin-bundle 3.2.0: The "EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator service is deprecated, use "EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator" instead.', E_USER_DEPRECATED);

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator'] = new \EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()), ($this->services['router'] ?? $this->getRouterService()), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\UrlSigner'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\UrlSigner'] = new \EasyCorp\Bundle\EasyAdminBundle\Router\UrlSigner($this->getEnv('APP_SECRET')))), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\DashboardControllerRegistry'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\DashboardControllerRegistry'] = new \EasyCorp\Bundle\EasyAdminBundle\Registry\DashboardControllerRegistry($this->getEnv('APP_SECRET'), $this->targetDir.'', [0 => 'App\\Controller\\Admin\\DashboardController']))), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\CrudControllerRegistry'] ?? $this->getCrudControllerRegistryService()));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Security\AuthorizationChecker' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Security\AuthorizationChecker
     */
    protected function getAuthorizationCheckerService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Security\\AuthorizationChecker'] = new \EasyCorp\Bundle\EasyAdminBundle\Security\AuthorizationChecker(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Security\SecurityVoter' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Security\SecurityVoter
     */
    protected function getSecurityVoterService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Security\\SecurityVoter'] = new \EasyCorp\Bundle\EasyAdminBundle\Security\SecurityVoter(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Security\\AuthorizationChecker'] ?? $this->getAuthorizationCheckerService()), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()));
    }

    /*
     * Gets the private 'SymfonyCasts\Bundle\ResetPassword\Command\ResetPasswordRemoveExpiredCommand' shared service.
     *
     * @return \SymfonyCasts\Bundle\ResetPassword\Command\ResetPasswordRemoveExpiredCommand
     */
    protected function getResetPasswordRemoveExpiredCommandService()
    {
        $this->privates['SymfonyCasts\\Bundle\\ResetPassword\\Command\\ResetPasswordRemoveExpiredCommand'] = $instance = new \SymfonyCasts\Bundle\ResetPassword\Command\ResetPasswordRemoveExpiredCommand(($this->privates['symfonycasts.reset_password.cleaner'] ?? $this->getSymfonycasts_ResetPassword_CleanerService()));

        $instance->setName('reset-password:remove-expired');

        return $instance;
    }

    /*
     * Gets the private 'annotations.cache_adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\PhpArrayAdapter
     */
    protected function getAnnotations_CacheAdapterService()
    {
        return \Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));
    }

    /*
     * Gets the private 'annotations.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer
     */
    protected function getAnnotations_CacheWarmerService()
    {
        return $this->privates['annotations.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->targetDir.''.'/annotations.php'), '#^Symfony\\\\(?:Component\\\\HttpKernel\\\\|Bundle\\\\FrameworkBundle\\\\Controller\\\\(?!.*Controller$))#', false);
    }

    /*
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\PsrCachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\PsrCachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->getAnnotations_CacheAdapterService(), false);
    }

    /*
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    protected function getArgumentResolver_ServiceService()
    {
        return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Controller\\Account\\AccountController::index' => ['privates', '.service_locator.QDge2Zf', 'get_ServiceLocator_QDge2ZfService', false],
            'App\\Controller\\Account\\AddressController::delete' => ['privates', '.service_locator.T65nH8T', 'get_ServiceLocator_T65nH8TService', false],
            'App\\Controller\\Account\\AddressController::edit' => ['privates', '.service_locator.T65nH8T', 'get_ServiceLocator_T65nH8TService', false],
            'App\\Controller\\Account\\AddressController::index' => ['privates', '.service_locator.ZnKYywd', 'get_ServiceLocator_ZnKYywdService', false],
            'App\\Controller\\Account\\AddressController::new' => ['privates', '.service_locator.KbfX2Nv', 'get_ServiceLocator_KbfX2NvService', false],
            'App\\Controller\\Account\\AddressController::show' => ['privates', '.service_locator.T65nH8T', 'get_ServiceLocator_T65nH8TService', false],
            'App\\Controller\\Account\\RegistrationController::register' => ['privates', '.service_locator.ccM2MGC', 'get_ServiceLocator_CcM2MGCService', false],
            'App\\Controller\\Account\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator.1UuH9tO', 'get_ServiceLocator_1UuH9tOService', false],
            'App\\Controller\\Account\\ResetPasswordController::request' => ['privates', '.service_locator.iP8eVIx', 'get_ServiceLocator_IP8eVIxService', false],
            'App\\Controller\\Account\\ResetPasswordController::reset' => ['privates', '.service_locator.ccM2MGC', 'get_ServiceLocator_CcM2MGCService', false],
            'App\\Controller\\Account\\SecurityController::login' => ['privates', '.service_locator.g.xob4v', 'get_ServiceLocator_G_Xob4vService', false],
            'App\\Controller\\Admin\\CarrierCrudController::autocomplete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CarrierCrudController::batchDelete' => ['privates', '.service_locator.huuTAyO', 'get_ServiceLocator_HuuTAyOService', false],
            'App\\Controller\\Admin\\CarrierCrudController::configureActions' => ['privates', '.service_locator.eGAETcz', 'get_ServiceLocator_EGAETczService', false],
            'App\\Controller\\Admin\\CarrierCrudController::configureAssets' => ['privates', '.service_locator.hVQViHK', 'get_ServiceLocator_HVQViHKService', false],
            'App\\Controller\\Admin\\CarrierCrudController::configureCrud' => ['privates', '.service_locator.7I.FzBw', 'get_ServiceLocator_7I_FzBwService', false],
            'App\\Controller\\Admin\\CarrierCrudController::configureFilters' => ['privates', '.service_locator.82KoR2v', 'get_ServiceLocator_82KoR2vService', false],
            'App\\Controller\\Admin\\CarrierCrudController::configureResponseParameters' => ['privates', '.service_locator._L8Y8bZ', 'get_ServiceLocator_L8Y8bZService', false],
            'App\\Controller\\Admin\\CarrierCrudController::createEditForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CarrierCrudController::createEditFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CarrierCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.jrmEAfi', 'get_ServiceLocator_JrmEAfiService', false],
            'App\\Controller\\Admin\\CarrierCrudController::createNewForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CarrierCrudController::createNewFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CarrierCrudController::delete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CarrierCrudController::deleteEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\CarrierCrudController::detail' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CarrierCrudController::edit' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CarrierCrudController::index' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CarrierCrudController::new' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CarrierCrudController::persistEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\CarrierCrudController::renderFilters' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CarrierCrudController::updateEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\CartCrudController::autocomplete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CartCrudController::batchDelete' => ['privates', '.service_locator.huuTAyO', 'get_ServiceLocator_HuuTAyOService', false],
            'App\\Controller\\Admin\\CartCrudController::configureActions' => ['privates', '.service_locator.eGAETcz', 'get_ServiceLocator_EGAETczService', false],
            'App\\Controller\\Admin\\CartCrudController::configureAssets' => ['privates', '.service_locator.hVQViHK', 'get_ServiceLocator_HVQViHKService', false],
            'App\\Controller\\Admin\\CartCrudController::configureCrud' => ['privates', '.service_locator.7I.FzBw', 'get_ServiceLocator_7I_FzBwService', false],
            'App\\Controller\\Admin\\CartCrudController::configureFilters' => ['privates', '.service_locator.82KoR2v', 'get_ServiceLocator_82KoR2vService', false],
            'App\\Controller\\Admin\\CartCrudController::configureResponseParameters' => ['privates', '.service_locator._L8Y8bZ', 'get_ServiceLocator_L8Y8bZService', false],
            'App\\Controller\\Admin\\CartCrudController::createEditForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CartCrudController::createEditFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CartCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.jrmEAfi', 'get_ServiceLocator_JrmEAfiService', false],
            'App\\Controller\\Admin\\CartCrudController::createNewForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CartCrudController::createNewFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CartCrudController::delete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CartCrudController::deleteEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\CartCrudController::detail' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CartCrudController::edit' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CartCrudController::index' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CartCrudController::new' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CartCrudController::persistEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\CartCrudController::renderFilters' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CartCrudController::updateEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\CategoriesCrudController::autocomplete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CategoriesCrudController::batchDelete' => ['privates', '.service_locator.huuTAyO', 'get_ServiceLocator_HuuTAyOService', false],
            'App\\Controller\\Admin\\CategoriesCrudController::configureActions' => ['privates', '.service_locator.eGAETcz', 'get_ServiceLocator_EGAETczService', false],
            'App\\Controller\\Admin\\CategoriesCrudController::configureAssets' => ['privates', '.service_locator.hVQViHK', 'get_ServiceLocator_HVQViHKService', false],
            'App\\Controller\\Admin\\CategoriesCrudController::configureCrud' => ['privates', '.service_locator.7I.FzBw', 'get_ServiceLocator_7I_FzBwService', false],
            'App\\Controller\\Admin\\CategoriesCrudController::configureFilters' => ['privates', '.service_locator.82KoR2v', 'get_ServiceLocator_82KoR2vService', false],
            'App\\Controller\\Admin\\CategoriesCrudController::configureResponseParameters' => ['privates', '.service_locator._L8Y8bZ', 'get_ServiceLocator_L8Y8bZService', false],
            'App\\Controller\\Admin\\CategoriesCrudController::createEditForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CategoriesCrudController::createEditFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CategoriesCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.jrmEAfi', 'get_ServiceLocator_JrmEAfiService', false],
            'App\\Controller\\Admin\\CategoriesCrudController::createNewForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CategoriesCrudController::createNewFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CategoriesCrudController::delete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CategoriesCrudController::deleteEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\CategoriesCrudController::detail' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CategoriesCrudController::edit' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CategoriesCrudController::index' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CategoriesCrudController::new' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CategoriesCrudController::persistEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\CategoriesCrudController::renderFilters' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CategoriesCrudController::updateEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\ContactCrudController::autocomplete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ContactCrudController::batchDelete' => ['privates', '.service_locator.huuTAyO', 'get_ServiceLocator_HuuTAyOService', false],
            'App\\Controller\\Admin\\ContactCrudController::configureActions' => ['privates', '.service_locator.eGAETcz', 'get_ServiceLocator_EGAETczService', false],
            'App\\Controller\\Admin\\ContactCrudController::configureAssets' => ['privates', '.service_locator.hVQViHK', 'get_ServiceLocator_HVQViHKService', false],
            'App\\Controller\\Admin\\ContactCrudController::configureCrud' => ['privates', '.service_locator.7I.FzBw', 'get_ServiceLocator_7I_FzBwService', false],
            'App\\Controller\\Admin\\ContactCrudController::configureFilters' => ['privates', '.service_locator.82KoR2v', 'get_ServiceLocator_82KoR2vService', false],
            'App\\Controller\\Admin\\ContactCrudController::configureResponseParameters' => ['privates', '.service_locator._L8Y8bZ', 'get_ServiceLocator_L8Y8bZService', false],
            'App\\Controller\\Admin\\ContactCrudController::createEditForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\ContactCrudController::createEditFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\ContactCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.jrmEAfi', 'get_ServiceLocator_JrmEAfiService', false],
            'App\\Controller\\Admin\\ContactCrudController::createNewForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\ContactCrudController::createNewFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\ContactCrudController::delete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ContactCrudController::deleteEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\ContactCrudController::detail' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ContactCrudController::edit' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ContactCrudController::index' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ContactCrudController::new' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ContactCrudController::persistEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\ContactCrudController::renderFilters' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ContactCrudController::updateEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.RLVVpop', 'get_ServiceLocator_RLVVpopService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController::autocomplete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController::batchDelete' => ['privates', '.service_locator.huuTAyO', 'get_ServiceLocator_HuuTAyOService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController::configureActions' => ['privates', '.service_locator.eGAETcz', 'get_ServiceLocator_EGAETczService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController::configureAssets' => ['privates', '.service_locator.hVQViHK', 'get_ServiceLocator_HVQViHKService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController::configureCrud' => ['privates', '.service_locator.7I.FzBw', 'get_ServiceLocator_7I_FzBwService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController::configureFilters' => ['privates', '.service_locator.82KoR2v', 'get_ServiceLocator_82KoR2vService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController::configureResponseParameters' => ['privates', '.service_locator._L8Y8bZ', 'get_ServiceLocator_L8Y8bZService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController::createEditForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController::createEditFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.jrmEAfi', 'get_ServiceLocator_JrmEAfiService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController::createNewForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController::createNewFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController::delete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController::deleteEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\HomeSliderCrudController::detail' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController::edit' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController::index' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController::new' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController::persistEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\HomeSliderCrudController::renderFilters' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController::updateEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\OrderCrudController::autocomplete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\OrderCrudController::batchDelete' => ['privates', '.service_locator.huuTAyO', 'get_ServiceLocator_HuuTAyOService', false],
            'App\\Controller\\Admin\\OrderCrudController::configureActions' => ['privates', '.service_locator.eGAETcz', 'get_ServiceLocator_EGAETczService', false],
            'App\\Controller\\Admin\\OrderCrudController::configureAssets' => ['privates', '.service_locator.hVQViHK', 'get_ServiceLocator_HVQViHKService', false],
            'App\\Controller\\Admin\\OrderCrudController::configureCrud' => ['privates', '.service_locator.7I.FzBw', 'get_ServiceLocator_7I_FzBwService', false],
            'App\\Controller\\Admin\\OrderCrudController::configureFilters' => ['privates', '.service_locator.82KoR2v', 'get_ServiceLocator_82KoR2vService', false],
            'App\\Controller\\Admin\\OrderCrudController::configureResponseParameters' => ['privates', '.service_locator._L8Y8bZ', 'get_ServiceLocator_L8Y8bZService', false],
            'App\\Controller\\Admin\\OrderCrudController::createEditForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\OrderCrudController::createEditFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\OrderCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.jrmEAfi', 'get_ServiceLocator_JrmEAfiService', false],
            'App\\Controller\\Admin\\OrderCrudController::createNewForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\OrderCrudController::createNewFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\OrderCrudController::delete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\OrderCrudController::deleteEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\OrderCrudController::detail' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\OrderCrudController::edit' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\OrderCrudController::index' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\OrderCrudController::new' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\OrderCrudController::persistEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\OrderCrudController::renderFilters' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\OrderCrudController::updateEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\ProductCrudController::autocomplete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ProductCrudController::batchDelete' => ['privates', '.service_locator.huuTAyO', 'get_ServiceLocator_HuuTAyOService', false],
            'App\\Controller\\Admin\\ProductCrudController::configureActions' => ['privates', '.service_locator.eGAETcz', 'get_ServiceLocator_EGAETczService', false],
            'App\\Controller\\Admin\\ProductCrudController::configureAssets' => ['privates', '.service_locator.hVQViHK', 'get_ServiceLocator_HVQViHKService', false],
            'App\\Controller\\Admin\\ProductCrudController::configureCrud' => ['privates', '.service_locator.7I.FzBw', 'get_ServiceLocator_7I_FzBwService', false],
            'App\\Controller\\Admin\\ProductCrudController::configureFilters' => ['privates', '.service_locator.82KoR2v', 'get_ServiceLocator_82KoR2vService', false],
            'App\\Controller\\Admin\\ProductCrudController::configureResponseParameters' => ['privates', '.service_locator._L8Y8bZ', 'get_ServiceLocator_L8Y8bZService', false],
            'App\\Controller\\Admin\\ProductCrudController::createEditForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\ProductCrudController::createEditFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\ProductCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.jrmEAfi', 'get_ServiceLocator_JrmEAfiService', false],
            'App\\Controller\\Admin\\ProductCrudController::createNewForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\ProductCrudController::createNewFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\ProductCrudController::delete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ProductCrudController::deleteEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\ProductCrudController::detail' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ProductCrudController::edit' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ProductCrudController::index' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ProductCrudController::new' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ProductCrudController::persistEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\ProductCrudController::renderFilters' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ProductCrudController::updateEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Cart\\CheckoutController::confirm' => ['privates', '.service_locator.LvLJjQi', 'get_ServiceLocator_LvLJjQiService', false],
            'App\\Controller\\ContactController::new' => ['privates', '.service_locator.gDl3Pzq', 'get_ServiceLocator_GDl3PzqService', false],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.2dNBwtL', 'get_ServiceLocator_2dNBwtLService', false],
            'App\\Controller\\HomeController::shop' => ['privates', '.service_locator.haYF1Xh', 'get_ServiceLocator_HaYF1XhService', false],
            'App\\Controller\\Stripe\\StripeCheckoutSessionController::index' => ['privates', '.service_locator.sYRdHc0', 'get_ServiceLocator_SYRdHc0Service', false],
            'App\\Controller\\Stripe\\StripeStripeSuccessPaymentController::index' => ['privates', '.service_locator.8IBLw83', 'get_ServiceLocator_8IBLw83Service', false],
            'App\\Controller\\Account\\AccountController:index' => ['privates', '.service_locator.QDge2Zf', 'get_ServiceLocator_QDge2ZfService', false],
            'App\\Controller\\Account\\AddressController:delete' => ['privates', '.service_locator.T65nH8T', 'get_ServiceLocator_T65nH8TService', false],
            'App\\Controller\\Account\\AddressController:edit' => ['privates', '.service_locator.T65nH8T', 'get_ServiceLocator_T65nH8TService', false],
            'App\\Controller\\Account\\AddressController:index' => ['privates', '.service_locator.ZnKYywd', 'get_ServiceLocator_ZnKYywdService', false],
            'App\\Controller\\Account\\AddressController:new' => ['privates', '.service_locator.KbfX2Nv', 'get_ServiceLocator_KbfX2NvService', false],
            'App\\Controller\\Account\\AddressController:show' => ['privates', '.service_locator.T65nH8T', 'get_ServiceLocator_T65nH8TService', false],
            'App\\Controller\\Account\\RegistrationController:register' => ['privates', '.service_locator.ccM2MGC', 'get_ServiceLocator_CcM2MGCService', false],
            'App\\Controller\\Account\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator.1UuH9tO', 'get_ServiceLocator_1UuH9tOService', false],
            'App\\Controller\\Account\\ResetPasswordController:request' => ['privates', '.service_locator.iP8eVIx', 'get_ServiceLocator_IP8eVIxService', false],
            'App\\Controller\\Account\\ResetPasswordController:reset' => ['privates', '.service_locator.ccM2MGC', 'get_ServiceLocator_CcM2MGCService', false],
            'App\\Controller\\Account\\SecurityController:login' => ['privates', '.service_locator.g.xob4v', 'get_ServiceLocator_G_Xob4vService', false],
            'App\\Controller\\Admin\\CarrierCrudController:autocomplete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CarrierCrudController:batchDelete' => ['privates', '.service_locator.huuTAyO', 'get_ServiceLocator_HuuTAyOService', false],
            'App\\Controller\\Admin\\CarrierCrudController:configureActions' => ['privates', '.service_locator.eGAETcz', 'get_ServiceLocator_EGAETczService', false],
            'App\\Controller\\Admin\\CarrierCrudController:configureAssets' => ['privates', '.service_locator.hVQViHK', 'get_ServiceLocator_HVQViHKService', false],
            'App\\Controller\\Admin\\CarrierCrudController:configureCrud' => ['privates', '.service_locator.7I.FzBw', 'get_ServiceLocator_7I_FzBwService', false],
            'App\\Controller\\Admin\\CarrierCrudController:configureFilters' => ['privates', '.service_locator.82KoR2v', 'get_ServiceLocator_82KoR2vService', false],
            'App\\Controller\\Admin\\CarrierCrudController:configureResponseParameters' => ['privates', '.service_locator._L8Y8bZ', 'get_ServiceLocator_L8Y8bZService', false],
            'App\\Controller\\Admin\\CarrierCrudController:createEditForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CarrierCrudController:createEditFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CarrierCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.jrmEAfi', 'get_ServiceLocator_JrmEAfiService', false],
            'App\\Controller\\Admin\\CarrierCrudController:createNewForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CarrierCrudController:createNewFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CarrierCrudController:delete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CarrierCrudController:deleteEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\CarrierCrudController:detail' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CarrierCrudController:edit' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CarrierCrudController:index' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CarrierCrudController:new' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CarrierCrudController:persistEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\CarrierCrudController:renderFilters' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CarrierCrudController:updateEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\CartCrudController:autocomplete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CartCrudController:batchDelete' => ['privates', '.service_locator.huuTAyO', 'get_ServiceLocator_HuuTAyOService', false],
            'App\\Controller\\Admin\\CartCrudController:configureActions' => ['privates', '.service_locator.eGAETcz', 'get_ServiceLocator_EGAETczService', false],
            'App\\Controller\\Admin\\CartCrudController:configureAssets' => ['privates', '.service_locator.hVQViHK', 'get_ServiceLocator_HVQViHKService', false],
            'App\\Controller\\Admin\\CartCrudController:configureCrud' => ['privates', '.service_locator.7I.FzBw', 'get_ServiceLocator_7I_FzBwService', false],
            'App\\Controller\\Admin\\CartCrudController:configureFilters' => ['privates', '.service_locator.82KoR2v', 'get_ServiceLocator_82KoR2vService', false],
            'App\\Controller\\Admin\\CartCrudController:configureResponseParameters' => ['privates', '.service_locator._L8Y8bZ', 'get_ServiceLocator_L8Y8bZService', false],
            'App\\Controller\\Admin\\CartCrudController:createEditForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CartCrudController:createEditFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CartCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.jrmEAfi', 'get_ServiceLocator_JrmEAfiService', false],
            'App\\Controller\\Admin\\CartCrudController:createNewForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CartCrudController:createNewFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CartCrudController:delete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CartCrudController:deleteEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\CartCrudController:detail' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CartCrudController:edit' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CartCrudController:index' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CartCrudController:new' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CartCrudController:persistEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\CartCrudController:renderFilters' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CartCrudController:updateEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\CategoriesCrudController:autocomplete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CategoriesCrudController:batchDelete' => ['privates', '.service_locator.huuTAyO', 'get_ServiceLocator_HuuTAyOService', false],
            'App\\Controller\\Admin\\CategoriesCrudController:configureActions' => ['privates', '.service_locator.eGAETcz', 'get_ServiceLocator_EGAETczService', false],
            'App\\Controller\\Admin\\CategoriesCrudController:configureAssets' => ['privates', '.service_locator.hVQViHK', 'get_ServiceLocator_HVQViHKService', false],
            'App\\Controller\\Admin\\CategoriesCrudController:configureCrud' => ['privates', '.service_locator.7I.FzBw', 'get_ServiceLocator_7I_FzBwService', false],
            'App\\Controller\\Admin\\CategoriesCrudController:configureFilters' => ['privates', '.service_locator.82KoR2v', 'get_ServiceLocator_82KoR2vService', false],
            'App\\Controller\\Admin\\CategoriesCrudController:configureResponseParameters' => ['privates', '.service_locator._L8Y8bZ', 'get_ServiceLocator_L8Y8bZService', false],
            'App\\Controller\\Admin\\CategoriesCrudController:createEditForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CategoriesCrudController:createEditFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CategoriesCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.jrmEAfi', 'get_ServiceLocator_JrmEAfiService', false],
            'App\\Controller\\Admin\\CategoriesCrudController:createNewForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CategoriesCrudController:createNewFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\CategoriesCrudController:delete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CategoriesCrudController:deleteEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\CategoriesCrudController:detail' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CategoriesCrudController:edit' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CategoriesCrudController:index' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CategoriesCrudController:new' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CategoriesCrudController:persistEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\CategoriesCrudController:renderFilters' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\CategoriesCrudController:updateEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\ContactCrudController:autocomplete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ContactCrudController:batchDelete' => ['privates', '.service_locator.huuTAyO', 'get_ServiceLocator_HuuTAyOService', false],
            'App\\Controller\\Admin\\ContactCrudController:configureActions' => ['privates', '.service_locator.eGAETcz', 'get_ServiceLocator_EGAETczService', false],
            'App\\Controller\\Admin\\ContactCrudController:configureAssets' => ['privates', '.service_locator.hVQViHK', 'get_ServiceLocator_HVQViHKService', false],
            'App\\Controller\\Admin\\ContactCrudController:configureCrud' => ['privates', '.service_locator.7I.FzBw', 'get_ServiceLocator_7I_FzBwService', false],
            'App\\Controller\\Admin\\ContactCrudController:configureFilters' => ['privates', '.service_locator.82KoR2v', 'get_ServiceLocator_82KoR2vService', false],
            'App\\Controller\\Admin\\ContactCrudController:configureResponseParameters' => ['privates', '.service_locator._L8Y8bZ', 'get_ServiceLocator_L8Y8bZService', false],
            'App\\Controller\\Admin\\ContactCrudController:createEditForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\ContactCrudController:createEditFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\ContactCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.jrmEAfi', 'get_ServiceLocator_JrmEAfiService', false],
            'App\\Controller\\Admin\\ContactCrudController:createNewForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\ContactCrudController:createNewFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\ContactCrudController:delete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ContactCrudController:deleteEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\ContactCrudController:detail' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ContactCrudController:edit' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ContactCrudController:index' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ContactCrudController:new' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ContactCrudController:persistEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\ContactCrudController:renderFilters' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ContactCrudController:updateEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.RLVVpop', 'get_ServiceLocator_RLVVpopService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController:autocomplete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController:batchDelete' => ['privates', '.service_locator.huuTAyO', 'get_ServiceLocator_HuuTAyOService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController:configureActions' => ['privates', '.service_locator.eGAETcz', 'get_ServiceLocator_EGAETczService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController:configureAssets' => ['privates', '.service_locator.hVQViHK', 'get_ServiceLocator_HVQViHKService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController:configureCrud' => ['privates', '.service_locator.7I.FzBw', 'get_ServiceLocator_7I_FzBwService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController:configureFilters' => ['privates', '.service_locator.82KoR2v', 'get_ServiceLocator_82KoR2vService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController:configureResponseParameters' => ['privates', '.service_locator._L8Y8bZ', 'get_ServiceLocator_L8Y8bZService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController:createEditForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController:createEditFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.jrmEAfi', 'get_ServiceLocator_JrmEAfiService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController:createNewForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController:createNewFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController:delete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController:deleteEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\HomeSliderCrudController:detail' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController:edit' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController:index' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController:new' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController:persistEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\HomeSliderCrudController:renderFilters' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\HomeSliderCrudController:updateEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\OrderCrudController:autocomplete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\OrderCrudController:batchDelete' => ['privates', '.service_locator.huuTAyO', 'get_ServiceLocator_HuuTAyOService', false],
            'App\\Controller\\Admin\\OrderCrudController:configureActions' => ['privates', '.service_locator.eGAETcz', 'get_ServiceLocator_EGAETczService', false],
            'App\\Controller\\Admin\\OrderCrudController:configureAssets' => ['privates', '.service_locator.hVQViHK', 'get_ServiceLocator_HVQViHKService', false],
            'App\\Controller\\Admin\\OrderCrudController:configureCrud' => ['privates', '.service_locator.7I.FzBw', 'get_ServiceLocator_7I_FzBwService', false],
            'App\\Controller\\Admin\\OrderCrudController:configureFilters' => ['privates', '.service_locator.82KoR2v', 'get_ServiceLocator_82KoR2vService', false],
            'App\\Controller\\Admin\\OrderCrudController:configureResponseParameters' => ['privates', '.service_locator._L8Y8bZ', 'get_ServiceLocator_L8Y8bZService', false],
            'App\\Controller\\Admin\\OrderCrudController:createEditForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\OrderCrudController:createEditFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\OrderCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.jrmEAfi', 'get_ServiceLocator_JrmEAfiService', false],
            'App\\Controller\\Admin\\OrderCrudController:createNewForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\OrderCrudController:createNewFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\OrderCrudController:delete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\OrderCrudController:deleteEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\OrderCrudController:detail' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\OrderCrudController:edit' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\OrderCrudController:index' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\OrderCrudController:new' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\OrderCrudController:persistEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\OrderCrudController:renderFilters' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\OrderCrudController:updateEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\ProductCrudController:autocomplete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ProductCrudController:batchDelete' => ['privates', '.service_locator.huuTAyO', 'get_ServiceLocator_HuuTAyOService', false],
            'App\\Controller\\Admin\\ProductCrudController:configureActions' => ['privates', '.service_locator.eGAETcz', 'get_ServiceLocator_EGAETczService', false],
            'App\\Controller\\Admin\\ProductCrudController:configureAssets' => ['privates', '.service_locator.hVQViHK', 'get_ServiceLocator_HVQViHKService', false],
            'App\\Controller\\Admin\\ProductCrudController:configureCrud' => ['privates', '.service_locator.7I.FzBw', 'get_ServiceLocator_7I_FzBwService', false],
            'App\\Controller\\Admin\\ProductCrudController:configureFilters' => ['privates', '.service_locator.82KoR2v', 'get_ServiceLocator_82KoR2vService', false],
            'App\\Controller\\Admin\\ProductCrudController:configureResponseParameters' => ['privates', '.service_locator._L8Y8bZ', 'get_ServiceLocator_L8Y8bZService', false],
            'App\\Controller\\Admin\\ProductCrudController:createEditForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\ProductCrudController:createEditFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\ProductCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.jrmEAfi', 'get_ServiceLocator_JrmEAfiService', false],
            'App\\Controller\\Admin\\ProductCrudController:createNewForm' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\ProductCrudController:createNewFormBuilder' => ['privates', '.service_locator.1ZmGw6X', 'get_ServiceLocator_1ZmGw6XService', false],
            'App\\Controller\\Admin\\ProductCrudController:delete' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ProductCrudController:deleteEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\ProductCrudController:detail' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ProductCrudController:edit' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ProductCrudController:index' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ProductCrudController:new' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ProductCrudController:persistEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Admin\\ProductCrudController:renderFilters' => ['privates', '.service_locator.h2tplhS', 'get_ServiceLocator_H2tplhSService', false],
            'App\\Controller\\Admin\\ProductCrudController:updateEntity' => ['privates', '.service_locator.x8FmIZ0', 'get_ServiceLocator_X8FmIZ0Service', false],
            'App\\Controller\\Cart\\CheckoutController:confirm' => ['privates', '.service_locator.LvLJjQi', 'get_ServiceLocator_LvLJjQiService', false],
            'App\\Controller\\ContactController:new' => ['privates', '.service_locator.gDl3Pzq', 'get_ServiceLocator_GDl3PzqService', false],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.2dNBwtL', 'get_ServiceLocator_2dNBwtLService', false],
            'App\\Controller\\HomeController:shop' => ['privates', '.service_locator.haYF1Xh', 'get_ServiceLocator_HaYF1XhService', false],
            'App\\Controller\\Stripe\\StripeCheckoutSessionController:index' => ['privates', '.service_locator.sYRdHc0', 'get_ServiceLocator_SYRdHc0Service', false],
            'App\\Controller\\Stripe\\StripeStripeSuccessPaymentController:index' => ['privates', '.service_locator.8IBLw83', 'get_ServiceLocator_8IBLw83Service', false],
        ], [
            'App\\Controller\\Account\\AccountController::index' => '?',
            'App\\Controller\\Account\\AddressController::delete' => '?',
            'App\\Controller\\Account\\AddressController::edit' => '?',
            'App\\Controller\\Account\\AddressController::index' => '?',
            'App\\Controller\\Account\\AddressController::new' => '?',
            'App\\Controller\\Account\\AddressController::show' => '?',
            'App\\Controller\\Account\\RegistrationController::register' => '?',
            'App\\Controller\\Account\\RegistrationController::verifyUserEmail' => '?',
            'App\\Controller\\Account\\ResetPasswordController::request' => '?',
            'App\\Controller\\Account\\ResetPasswordController::reset' => '?',
            'App\\Controller\\Account\\SecurityController::login' => '?',
            'App\\Controller\\Admin\\CarrierCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\CarrierCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\CarrierCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\CarrierCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\CarrierCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\CarrierCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\CarrierCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\CarrierCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\CarrierCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\CarrierCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\CarrierCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\CarrierCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\CarrierCrudController::delete' => '?',
            'App\\Controller\\Admin\\CarrierCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\CarrierCrudController::detail' => '?',
            'App\\Controller\\Admin\\CarrierCrudController::edit' => '?',
            'App\\Controller\\Admin\\CarrierCrudController::index' => '?',
            'App\\Controller\\Admin\\CarrierCrudController::new' => '?',
            'App\\Controller\\Admin\\CarrierCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\CarrierCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\CarrierCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\CartCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\CartCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\CartCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\CartCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\CartCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\CartCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\CartCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\CartCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\CartCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\CartCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\CartCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\CartCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\CartCrudController::delete' => '?',
            'App\\Controller\\Admin\\CartCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\CartCrudController::detail' => '?',
            'App\\Controller\\Admin\\CartCrudController::edit' => '?',
            'App\\Controller\\Admin\\CartCrudController::index' => '?',
            'App\\Controller\\Admin\\CartCrudController::new' => '?',
            'App\\Controller\\Admin\\CartCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\CartCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\CartCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController::delete' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController::detail' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController::edit' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController::index' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController::new' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\ContactCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\ContactCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\ContactCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\ContactCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\ContactCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\ContactCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\ContactCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ContactCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\ContactCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ContactCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ContactCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\ContactCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ContactCrudController::delete' => '?',
            'App\\Controller\\Admin\\ContactCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\ContactCrudController::detail' => '?',
            'App\\Controller\\Admin\\ContactCrudController::edit' => '?',
            'App\\Controller\\Admin\\ContactCrudController::index' => '?',
            'App\\Controller\\Admin\\ContactCrudController::new' => '?',
            'App\\Controller\\Admin\\ContactCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\ContactCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\ContactCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController::delete' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController::detail' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController::edit' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController::index' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController::new' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\OrderCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\OrderCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\OrderCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\OrderCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\OrderCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\OrderCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\OrderCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\OrderCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\OrderCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\OrderCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\OrderCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\OrderCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\OrderCrudController::delete' => '?',
            'App\\Controller\\Admin\\OrderCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\OrderCrudController::detail' => '?',
            'App\\Controller\\Admin\\OrderCrudController::edit' => '?',
            'App\\Controller\\Admin\\OrderCrudController::index' => '?',
            'App\\Controller\\Admin\\OrderCrudController::new' => '?',
            'App\\Controller\\Admin\\OrderCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\OrderCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\OrderCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\ProductCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\ProductCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\ProductCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\ProductCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\ProductCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\ProductCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\ProductCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ProductCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\ProductCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ProductCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ProductCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\ProductCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ProductCrudController::delete' => '?',
            'App\\Controller\\Admin\\ProductCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\ProductCrudController::detail' => '?',
            'App\\Controller\\Admin\\ProductCrudController::edit' => '?',
            'App\\Controller\\Admin\\ProductCrudController::index' => '?',
            'App\\Controller\\Admin\\ProductCrudController::new' => '?',
            'App\\Controller\\Admin\\ProductCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\ProductCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\ProductCrudController::updateEntity' => '?',
            'App\\Controller\\Cart\\CheckoutController::confirm' => '?',
            'App\\Controller\\ContactController::new' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\HomeController::shop' => '?',
            'App\\Controller\\Stripe\\StripeCheckoutSessionController::index' => '?',
            'App\\Controller\\Stripe\\StripeStripeSuccessPaymentController::index' => '?',
            'App\\Controller\\Account\\AccountController:index' => '?',
            'App\\Controller\\Account\\AddressController:delete' => '?',
            'App\\Controller\\Account\\AddressController:edit' => '?',
            'App\\Controller\\Account\\AddressController:index' => '?',
            'App\\Controller\\Account\\AddressController:new' => '?',
            'App\\Controller\\Account\\AddressController:show' => '?',
            'App\\Controller\\Account\\RegistrationController:register' => '?',
            'App\\Controller\\Account\\RegistrationController:verifyUserEmail' => '?',
            'App\\Controller\\Account\\ResetPasswordController:request' => '?',
            'App\\Controller\\Account\\ResetPasswordController:reset' => '?',
            'App\\Controller\\Account\\SecurityController:login' => '?',
            'App\\Controller\\Admin\\CarrierCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\CarrierCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\CarrierCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\CarrierCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\CarrierCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\CarrierCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\CarrierCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\CarrierCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\CarrierCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\CarrierCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\CarrierCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\CarrierCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\CarrierCrudController:delete' => '?',
            'App\\Controller\\Admin\\CarrierCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\CarrierCrudController:detail' => '?',
            'App\\Controller\\Admin\\CarrierCrudController:edit' => '?',
            'App\\Controller\\Admin\\CarrierCrudController:index' => '?',
            'App\\Controller\\Admin\\CarrierCrudController:new' => '?',
            'App\\Controller\\Admin\\CarrierCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\CarrierCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\CarrierCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\CartCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\CartCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\CartCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\CartCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\CartCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\CartCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\CartCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\CartCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\CartCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\CartCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\CartCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\CartCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\CartCrudController:delete' => '?',
            'App\\Controller\\Admin\\CartCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\CartCrudController:detail' => '?',
            'App\\Controller\\Admin\\CartCrudController:edit' => '?',
            'App\\Controller\\Admin\\CartCrudController:index' => '?',
            'App\\Controller\\Admin\\CartCrudController:new' => '?',
            'App\\Controller\\Admin\\CartCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\CartCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\CartCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController:delete' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController:detail' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController:edit' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController:index' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController:new' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\CategoriesCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\ContactCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\ContactCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\ContactCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\ContactCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\ContactCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\ContactCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\ContactCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ContactCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\ContactCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ContactCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ContactCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\ContactCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ContactCrudController:delete' => '?',
            'App\\Controller\\Admin\\ContactCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\ContactCrudController:detail' => '?',
            'App\\Controller\\Admin\\ContactCrudController:edit' => '?',
            'App\\Controller\\Admin\\ContactCrudController:index' => '?',
            'App\\Controller\\Admin\\ContactCrudController:new' => '?',
            'App\\Controller\\Admin\\ContactCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\ContactCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\ContactCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController:delete' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController:detail' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController:edit' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController:index' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController:new' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\HomeSliderCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\OrderCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\OrderCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\OrderCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\OrderCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\OrderCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\OrderCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\OrderCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\OrderCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\OrderCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\OrderCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\OrderCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\OrderCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\OrderCrudController:delete' => '?',
            'App\\Controller\\Admin\\OrderCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\OrderCrudController:detail' => '?',
            'App\\Controller\\Admin\\OrderCrudController:edit' => '?',
            'App\\Controller\\Admin\\OrderCrudController:index' => '?',
            'App\\Controller\\Admin\\OrderCrudController:new' => '?',
            'App\\Controller\\Admin\\OrderCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\OrderCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\OrderCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\ProductCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\ProductCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\ProductCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\ProductCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\ProductCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\ProductCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\ProductCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ProductCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\ProductCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ProductCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ProductCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\ProductCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ProductCrudController:delete' => '?',
            'App\\Controller\\Admin\\ProductCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\ProductCrudController:detail' => '?',
            'App\\Controller\\Admin\\ProductCrudController:edit' => '?',
            'App\\Controller\\Admin\\ProductCrudController:index' => '?',
            'App\\Controller\\Admin\\ProductCrudController:new' => '?',
            'App\\Controller\\Admin\\ProductCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\ProductCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\ProductCrudController:updateEntity' => '?',
            'App\\Controller\\Cart\\CheckoutController:confirm' => '?',
            'App\\Controller\\ContactController:new' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\HomeController:shop' => '?',
            'App\\Controller\\Stripe\\StripeCheckoutSessionController:index' => '?',
            'App\\Controller\\Stripe\\StripeStripeSuccessPaymentController:index' => '?',
        ]));
    }

    /*
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->privates['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), new \Symfony\Component\Asset\Context\RequestStackContext(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), '', false)), []);
    }

    /*
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('fnFBx2pnZP', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.property_access' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_PropertyAccessService()
    {
        return $this->privates['cache.property_access'] = \Symfony\Component\PropertyAccess\PropertyAccessor::createCache('t+srYpHc94', 0, $this->getParameter('container.build_id'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.property_info' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_PropertyInfoService()
    {
        return $this->privates['cache.property_info'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('yIiXDaK-tE', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.security_expression_language' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SecurityExpressionLanguageService()
    {
        return $this->privates['cache.security_expression_language'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('uAQ8CZGhcg', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SerializerService()
    {
        return $this->privates['cache.serializer'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('41yCDL+gSM', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('3fNvxVhw9C', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'console.command.about' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AboutCommand
     */
    protected function getConsole_Command_AboutService()
    {
        $this->privates['console.command.about'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AboutCommand();

        $instance->setName('about');

        return $instance;
    }

    /*
     * Gets the private 'console.command.assets_install' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand
     */
    protected function getConsole_Command_AssetsInstallService()
    {
        $this->privates['console.command.assets_install'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), \dirname(__DIR__, 4));

        $instance->setName('assets:install');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand
     */
    protected function getConsole_Command_CacheClearService()
    {
        $this->privates['console.command.cache_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand(($this->services['cache_clearer'] ?? $this->getCacheClearerService()), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));

        $instance->setName('cache:clear');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand
     */
    protected function getConsole_Command_CachePoolClearService()
    {
        $this->privates['console.command.cache_pool_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:clear');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_delete' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand
     */
    protected function getConsole_Command_CachePoolDeleteService()
    {
        $this->privates['console.command.cache_pool_delete'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:delete');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand
     */
    protected function getConsole_Command_CachePoolListService()
    {
        $this->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand([0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info', 6 => 'doctrine.result_cache_pool', 7 => 'doctrine.system_cache_pool', 8 => 'cache.property_access', 9 => 'cache.security_expression_language']);

        $instance->setName('cache:pool:list');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_prune' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand
     */
    protected function getConsole_Command_CachePoolPruneService()
    {
        $this->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
            yield 'cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService());
            yield 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService());
        }, 2));

        $instance->setName('cache:pool:prune');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_warmup' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand
     */
    protected function getConsole_Command_CacheWarmupService()
    {
        $this->privates['console.command.cache_warmup'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand(($this->services['cache_warmer'] ?? $this->getCacheWarmerService()));

        $instance->setName('cache:warmup');

        return $instance;
    }

    /*
     * Gets the private 'console.command.config_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand
     */
    protected function getConsole_Command_ConfigDebugService()
    {
        $this->privates['console.command.config_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand();

        $instance->setName('debug:config');

        return $instance;
    }

    /*
     * Gets the private 'console.command.config_dump_reference' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand
     */
    protected function getConsole_Command_ConfigDumpReferenceService()
    {
        $this->privates['console.command.config_dump_reference'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand();

        $instance->setName('config:dump-reference');

        return $instance;
    }

    /*
     * Gets the private 'console.command.container_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand
     */
    protected function getConsole_Command_ContainerDebugService()
    {
        $this->privates['console.command.container_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand();

        $instance->setName('debug:container');

        return $instance;
    }

    /*
     * Gets the private 'console.command.container_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand
     */
    protected function getConsole_Command_ContainerLintService()
    {
        $this->privates['console.command.container_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand();

        $instance->setName('lint:container');

        return $instance;
    }

    /*
     * Gets the private 'console.command.debug_autowiring' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand
     */
    protected function getConsole_Command_DebugAutowiringService()
    {
        $this->privates['console.command.debug_autowiring'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand(NULL, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:autowiring');

        return $instance;
    }

    /*
     * Gets the private 'console.command.event_dispatcher_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand
     */
    protected function getConsole_Command_EventDispatcherDebugService()
    {
        $this->privates['console.command.event_dispatcher_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setName('debug:event-dispatcher');

        return $instance;
    }

    /*
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    protected function getConsole_Command_FormDebugService()
    {
        $this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->getForm_RegistryService()), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type'], [0 => 'App\\Form\\AddressType', 1 => 'App\\Form\\ChangePasswordFormType', 2 => 'App\\Form\\CheckoutType', 3 => 'App\\Form\\ContactType', 4 => 'App\\Form\\RegistrationFormType', 5 => 'App\\Form\\ResetPasswordRequestFormType', 6 => 'App\\Form\\SearchProductType', 7 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 8 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 9 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 10 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 11 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType', 12 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType', 13 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\EaCrudFormTypeExtension', 8 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\CollectionTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:form');

        return $instance;
    }

    /*
     * Gets the private 'console.command.router_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand
     */
    protected function getConsole_Command_RouterDebugService()
    {
        $this->privates['console.command.router_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand(($this->services['router'] ?? $this->getRouterService()), ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:router');

        return $instance;
    }

    /*
     * Gets the private 'console.command.router_match' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand
     */
    protected function getConsole_Command_RouterMatchService()
    {
        $this->privates['console.command.router_match'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand(($this->services['router'] ?? $this->getRouterService()));

        $instance->setName('router:match');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_decrypt_to_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand
     */
    protected function getConsole_Command_SecretsDecryptToLocalService()
    {
        $this->privates['console.command.secrets_decrypt_to_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:decrypt-to-local');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_encrypt_from_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand
     */
    protected function getConsole_Command_SecretsEncryptFromLocalService()
    {
        $this->privates['console.command.secrets_encrypt_from_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:encrypt-from-local');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_generate_key' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand
     */
    protected function getConsole_Command_SecretsGenerateKeyService()
    {
        $this->privates['console.command.secrets_generate_key'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:generate-keys');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand
     */
    protected function getConsole_Command_SecretsListService()
    {
        $this->privates['console.command.secrets_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:list');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_remove' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand
     */
    protected function getConsole_Command_SecretsRemoveService()
    {
        $this->privates['console.command.secrets_remove'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:remove');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_set' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand
     */
    protected function getConsole_Command_SecretsSetService()
    {
        $this->privates['console.command.secrets_set'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:set');

        return $instance;
    }

    /*
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    protected function getConsole_Command_TranslationDebugService()
    {
        $this->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($this->services['translator'] ?? $this->getTranslatorService()), ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php'), 3 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 4 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ChoiceType.php'), 5 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 6 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 7 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 8 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 9 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php'), 10 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 11 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 12 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/AdminContextFactory.php'), 13 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/MenuFactory.php'), 14 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/ActionFactory.php'), 15 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/AssociationConfigurator.php'), 16 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/CommonPreConfigurator.php'), 17 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/ChoiceConfigurator.php'), 18 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/SlugConfigurator.php')]);

        $instance->setName('debug:translation');

        return $instance;
    }

    /*
     * Gets the private 'console.command.translation_update' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    protected function getConsole_Command_TranslationUpdateService()
    {
        $a = new \Symfony\Component\Translation\Writer\TranslationWriter();
        $a->addDumper('php', new \Symfony\Component\Translation\Dumper\PhpFileDumper());
        $a->addDumper('xlf', new \Symfony\Component\Translation\Dumper\XliffFileDumper());
        $a->addDumper('po', new \Symfony\Component\Translation\Dumper\PoFileDumper());
        $a->addDumper('mo', new \Symfony\Component\Translation\Dumper\MoFileDumper());
        $a->addDumper('yml', new \Symfony\Component\Translation\Dumper\YamlFileDumper());
        $a->addDumper('yaml', new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml'));
        $a->addDumper('ts', new \Symfony\Component\Translation\Dumper\QtFileDumper());
        $a->addDumper('csv', new \Symfony\Component\Translation\Dumper\CsvFileDumper());
        $a->addDumper('ini', new \Symfony\Component\Translation\Dumper\IniFileDumper());
        $a->addDumper('json', new \Symfony\Component\Translation\Dumper\JsonFileDumper());
        $a->addDumper('res', new \Symfony\Component\Translation\Dumper\IcuResFileDumper());

        $this->privates['console.command.translation_update'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand($a, ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), 'en', (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php'), 3 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 4 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ChoiceType.php'), 5 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 6 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 7 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 8 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 9 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php'), 10 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 11 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 12 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/AdminContextFactory.php'), 13 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/MenuFactory.php'), 14 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/ActionFactory.php'), 15 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/AssociationConfigurator.php'), 16 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/CommonPreConfigurator.php'), 17 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/ChoiceConfigurator.php'), 18 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/SlugConfigurator.php')]);

        $instance->setName('translation:update');

        return $instance;
    }

    /*
     * Gets the private 'console.command.xliff_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand
     */
    protected function getConsole_Command_XliffLintService()
    {
        $this->privates['console.command.xliff_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand();

        $instance->setName('lint:xliff');

        return $instance;
    }

    /*
     * Gets the private 'console.command.yaml_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand
     */
    protected function getConsole_Command_YamlLintService()
    {
        $this->privates['console.command.yaml_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand();

        $instance->setName('lint:yaml');

        return $instance;
    }

    /*
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('console');
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $this->privates['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener($a);
    }

    /*
     * Gets the private 'container.env_var_processor' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\EnvVarProcessor
     */
    protected function getContainer_EnvVarProcessorService()
    {
        return $this->privates['container.env_var_processor'] = new \Symfony\Component\DependencyInjection\EnvVarProcessor($this, new RewindableGenerator(function () {
            yield 0 => ($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'))));
        }, 1));
    }

    /*
     * Gets the private 'controller_resolver' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver
     */
    protected function getControllerResolverService()
    {
        return $this->privates['controller_resolver'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), ($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))));
    }

    /*
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('php');
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $a, NULL, 0, false, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), false);
    }

    /*
     * Gets the private 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearMetadataCommandService()
    {
        $this->privates['doctrine.cache_clear_metadata_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-metadata');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearQueryCacheCommandService()
    {
        $this->privates['doctrine.cache_clear_query_cache_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearResultCommandService()
    {
        $this->privates['doctrine.cache_clear_result_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-result');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    protected function getDoctrine_CacheCollectionRegionCommandService()
    {
        $this->privates['doctrine.cache_collection_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand();

        $instance->setName('doctrine:cache:clear-collection-region');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.clear_entity_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearEntityRegionCommandService()
    {
        $this->privates['doctrine.clear_entity_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-entity-region');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.clear_query_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearQueryRegionCommandService()
    {
        $this->privates['doctrine.clear_query_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query-region');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseCreateCommandService()
    {
        $this->privates['doctrine.database_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:create');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.database_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseDropCommandService()
    {
        $this->privates['doctrine.database_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:drop');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.database_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand
     */
    protected function getDoctrine_DatabaseImportCommandService()
    {
        $this->privates['doctrine.database_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand();

        $instance->setName('doctrine:database:import');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand
     */
    protected function getDoctrine_EnsureProductionSettingsCommandService()
    {
        $this->privates['doctrine.ensure_production_settings_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();

        $instance->setName('doctrine:ensure-production-settings');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand
     */
    protected function getDoctrine_MappingConvertCommandService()
    {
        $this->privates['doctrine.mapping_convert_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand();

        $instance->setName('doctrine:mapping:convert');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    protected function getDoctrine_MappingImportCommandService()
    {
        $this->privates['doctrine.mapping_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()), $this->parameters['kernel.bundles']);

        $instance->setName('doctrine:mapping:import');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand
     */
    protected function getDoctrine_MappingInfoCommandService()
    {
        $this->privates['doctrine.mapping_info_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();

        $instance->setName('doctrine:mapping:info');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.migrations.container_aware_migrations_factory' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\MigrationsFactory\ContainerAwareMigrationFactory
     */
    protected function getDoctrine_Migrations_ContainerAwareMigrationsFactoryService()
    {
        return $this->privates['doctrine.migrations.container_aware_migrations_factory'] = new \Doctrine\Bundle\MigrationsBundle\MigrationsFactory\ContainerAwareMigrationFactory(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService())->getMigrationFactory(), $this);
    }

    /*
     * Gets the private 'doctrine.migrations.dependency_factory' shared service.
     *
     * @return \Doctrine\Migrations\DependencyFactory
     */
    protected function getDoctrine_Migrations_DependencyFactoryService()
    {
        $a = new \Doctrine\Migrations\Configuration\Configuration();
        $a->addMigrationsDirectory('DoctrineMigrations', (\dirname(__DIR__, 4).'/migrations'));
        $a->setAllOrNothing(false);
        $a->setCheckDatabasePlatform(true);
        $a->setMetadataStorageConfiguration(new \Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration());

        $this->privates['doctrine.migrations.dependency_factory'] = $instance = \Doctrine\Migrations\DependencyFactory::fromEntityManager(new \Doctrine\Migrations\Configuration\Migration\ExistingConfiguration($a), \Doctrine\Migrations\Configuration\EntityManager\ManagerRegistryEntityManager::withSimpleDefault(($this->services['doctrine'] ?? $this->getDoctrineService())), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));

        $instance->setDefinition('Doctrine\\Migrations\\Version\\MigrationFactory', function () {
            return ($this->privates['doctrine.migrations.container_aware_migrations_factory'] ?? $this->getDoctrine_Migrations_ContainerAwareMigrationsFactoryService());
        });

        return $instance;
    }

    /*
     * Gets the private 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->privates['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /*
     * Gets the private 'doctrine.orm.proxy_cache_warmer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer
     */
    protected function getDoctrine_Orm_ProxyCacheWarmerService()
    {
        return $this->privates['doctrine.orm.proxy_cache_warmer'] = new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->privates['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'doctrine.query_dql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand
     */
    protected function getDoctrine_QueryDqlCommandService()
    {
        $this->privates['doctrine.query_dql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand();

        $instance->setName('doctrine:query:dql');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.query_sql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand
     */
    protected function getDoctrine_QuerySqlCommandService()
    {
        $this->privates['doctrine.query_sql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand(($this->privates['Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider'] ?? $this->getManagerRegistryAwareConnectionProviderService()));

        $instance->setName('doctrine:query:sql');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.result_cache_pool' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getDoctrine_ResultCachePoolService()
    {
        $this->privates['doctrine.result_cache_pool'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('vwrTy4Vjtb', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaCreateCommandService()
    {
        $this->privates['doctrine.schema_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:create');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaDropCommandService()
    {
        $this->privates['doctrine.schema_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:drop');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaUpdateCommandService()
    {
        $this->privates['doctrine.schema_update_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:update');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand
     */
    protected function getDoctrine_SchemaValidateCommandService()
    {
        $this->privates['doctrine.schema_validate_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand();

        $instance->setName('doctrine:schema:validate');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.system_cache_pool' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getDoctrine_SystemCachePoolService()
    {
        return $this->privates['doctrine.system_cache_pool'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('5EAYzEMBRT', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'doctrine_migrations.current_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\CurrentCommand
     */
    protected function getDoctrineMigrations_CurrentCommandService()
    {
        $this->privates['doctrine_migrations.current_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\CurrentCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:current');

        $instance->setName('doctrine:migrations:current');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.diff_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\DiffCommand
     */
    protected function getDoctrineMigrations_DiffCommandService()
    {
        $this->privates['doctrine_migrations.diff_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\DiffCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:diff');

        $instance->setName('doctrine:migrations:diff');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.dump_schema_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\DumpSchemaCommand
     */
    protected function getDoctrineMigrations_DumpSchemaCommandService()
    {
        $this->privates['doctrine_migrations.dump_schema_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\DumpSchemaCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:dump-schema');

        $instance->setName('doctrine:migrations:dump-schema');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.execute_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\ExecuteCommand
     */
    protected function getDoctrineMigrations_ExecuteCommandService()
    {
        $this->privates['doctrine_migrations.execute_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\ExecuteCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:execute');

        $instance->setName('doctrine:migrations:execute');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.generate_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\GenerateCommand
     */
    protected function getDoctrineMigrations_GenerateCommandService()
    {
        $this->privates['doctrine_migrations.generate_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\GenerateCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:generate');

        $instance->setName('doctrine:migrations:generate');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.latest_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\LatestCommand
     */
    protected function getDoctrineMigrations_LatestCommandService()
    {
        $this->privates['doctrine_migrations.latest_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\LatestCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:latest');

        $instance->setName('doctrine:migrations:latest');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.migrate_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\MigrateCommand
     */
    protected function getDoctrineMigrations_MigrateCommandService()
    {
        $this->privates['doctrine_migrations.migrate_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\MigrateCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:migrate');

        $instance->setName('doctrine:migrations:migrate');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.rollup_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\RollupCommand
     */
    protected function getDoctrineMigrations_RollupCommandService()
    {
        $this->privates['doctrine_migrations.rollup_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\RollupCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:rollup');

        $instance->setName('doctrine:migrations:rollup');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.status_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\StatusCommand
     */
    protected function getDoctrineMigrations_StatusCommandService()
    {
        $this->privates['doctrine_migrations.status_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\StatusCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:status');

        $instance->setName('doctrine:migrations:status');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.sync_metadata_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\SyncMetadataCommand
     */
    protected function getDoctrineMigrations_SyncMetadataCommandService()
    {
        $this->privates['doctrine_migrations.sync_metadata_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\SyncMetadataCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:sync-metadata-storage');

        $instance->setName('doctrine:migrations:sync-metadata-storage');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.up_to_date_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\UpToDateCommand
     */
    protected function getDoctrineMigrations_UpToDateCommandService()
    {
        $this->privates['doctrine_migrations.up_to_date_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\UpToDateCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:up-to-date');

        $instance->setName('doctrine:migrations:up-to-date');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.version_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\VersionCommand
     */
    protected function getDoctrineMigrations_VersionCommandService()
    {
        $this->privates['doctrine_migrations.version_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\VersionCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:version');

        $instance->setName('doctrine:migrations:version');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.versions_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\ListCommand
     */
    protected function getDoctrineMigrations_VersionsCommandService()
    {
        $this->privates['doctrine_migrations.versions_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\ListCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:versions');

        $instance->setName('doctrine:migrations:list');

        return $instance;
    }

    /*
     * Gets the private 'exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ErrorListener
     */
    protected function getExceptionListener2Service()
    {
        return $this->privates['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorListener('error_controller', ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), false);
    }

    /*
     * Gets the private 'form.choice_list_factory.cached' shared service.
     *
     * @return \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator
     */
    protected function getForm_ChoiceListFactory_CachedService()
    {
        return $this->privates['form.choice_list_factory.cached'] = new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService())));
    }

    /*
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Form\\AddressType' => ['privates', 'App\\Form\\AddressType', 'getAddressTypeService', false],
            'App\\Form\\ChangePasswordFormType' => ['privates', 'App\\Form\\ChangePasswordFormType', 'getChangePasswordFormTypeService', false],
            'App\\Form\\CheckoutType' => ['privates', 'App\\Form\\CheckoutType', 'getCheckoutTypeService', false],
            'App\\Form\\ContactType' => ['privates', 'App\\Form\\ContactType', 'getContactTypeService', false],
            'App\\Form\\RegistrationFormType' => ['privates', 'App\\Form\\RegistrationFormType', 'getRegistrationFormTypeService', false],
            'App\\Form\\ResetPasswordRequestFormType' => ['privates', 'App\\Form\\ResetPasswordRequestFormType', 'getResetPasswordRequestFormTypeService', false],
            'App\\Form\\SearchProductType' => ['privates', 'App\\Form\\SearchProductType', 'getSearchProductTypeService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType', 'getCrudFormTypeService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType', 'getFileUploadTypeService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType', 'getFiltersFormTypeService', false],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', 'form.type.file', 'getForm_Type_FileService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', false],
        ], [
            'App\\Form\\AddressType' => '?',
            'App\\Form\\ChangePasswordFormType' => '?',
            'App\\Form\\CheckoutType' => '?',
            'App\\Form\\ContactType' => '?',
            'App\\Form\\RegistrationFormType' => '?',
            'App\\Form\\ResetPasswordRequestFormType' => '?',
            'App\\Form\\SearchProductType' => '?',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType' => '?',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType' => '?',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.form.transformation_failure_handling'] ?? $this->getForm_TypeExtension_Form_TransformationFailureHandlingService());
            yield 1 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->getForm_TypeExtension_Form_HttpFoundationService());
            yield 2 => ($this->privates['form.type_extension.form.validator'] ?? $this->getForm_TypeExtension_Form_ValidatorService());
            yield 3 => ($this->privates['form.type_extension.upload.validator'] ?? $this->getForm_TypeExtension_Upload_ValidatorService());
            yield 4 => ($this->privates['form.type_extension.csrf'] ?? $this->getForm_TypeExtension_CsrfService());
            yield 5 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\EaCrudFormTypeExtension'] ?? $this->getEaCrudFormTypeExtensionService());
        }, 6), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? ($this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? ($this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\CollectionTypeExtension'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\CollectionTypeExtension'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Extension\CollectionTypeExtension()));
        }, 1)], new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->getForm_TypeGuesser_ValidatorService());
            yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->getForm_TypeGuesser_DoctrineService());
        }, 2))], new \Symfony\Component\Form\ResolvedFormTypeFactory());
    }

    /*
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    protected function getForm_ServerParamsService()
    {
        return $this->privates['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->privates['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(($this->privates['form.choice_list_factory.cached'] ?? $this->getForm_ChoiceListFactory_CachedService()), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /*
     * Gets the private 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        return $this->privates['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    protected function getForm_Type_FormService()
    {
        return $this->privates['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType(($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /*
     * Gets the private 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->privates['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()), true, '_token', ($this->services['translator'] ?? $this->getTranslatorService()), 'validators', ($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService()));
    }

    /*
     * Gets the private 'form.type_extension.form.http_foundation' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->privates['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService())));
    }

    /*
     * Gets the private 'form.type_extension.form.transformation_failure_handling' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension
     */
    protected function getForm_TypeExtension_Form_TransformationFailureHandlingService()
    {
        return $this->privates['form.type_extension.form.transformation_failure_handling'] = new \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /*
     * Gets the private 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->privates['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /*
     * Gets the private 'form.type_extension.upload.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->privates['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension(($this->services['translator'] ?? $this->getTranslatorService()), 'validators');
    }

    /*
     * Gets the private 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->privates['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->privates['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /*
     * Gets the private 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->privates['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(($this->services['http_kernel'] ?? $this->getHttpKernelService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())));
    }

    /*
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /*
     * Gets the private 'http_client' shared service.
     *
     * @return \Symfony\Contracts\HttpClient\HttpClientInterface
     */
    protected function getHttpClientService()
    {
        $this->privates['http_client'] = $instance = \Symfony\Component\HttpClient\HttpClient::create([], 6);

        $a = new \Symfony\Bridge\Monolog\Logger('http_client');
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        $instance->setLogger($a);

        return $instance;
    }

    /*
     * Gets the private 'locale_aware_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener
     */
    protected function getLocaleAwareListenerService()
    {
        return $this->privates['locale_aware_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener(new RewindableGenerator(function () {
            yield 0 => ($this->services['translator'] ?? $this->getTranslatorService());
        }, 1), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /*
     * Gets the private 'mailer.mailer' shared service.
     *
     * @return \Symfony\Component\Mailer\Mailer
     */
    protected function getMailer_MailerService()
    {
        return $this->privates['mailer.mailer'] = new \Symfony\Component\Mailer\Mailer((new \Symfony\Component\Mailer\Transport(new RewindableGenerator(function () {
            yield 0 => $this->getMailer_TransportFactory_GmailService();
            yield 1 => $this->getMailer_TransportFactory_NullService();
            yield 2 => $this->getMailer_TransportFactory_SendmailService();
            yield 3 => $this->getMailer_TransportFactory_SmtpService();
        }, 4)))->fromStrings(['main' => $this->getEnv('MAILER_DSN')]), NULL, ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /*
     * Gets the private 'mailer.transport_factory.gmail' shared service.
     *
     * @return \Symfony\Component\Mailer\Bridge\Google\Transport\GmailTransportFactory
     */
    protected function getMailer_TransportFactory_GmailService()
    {
        return new \Symfony\Component\Mailer\Bridge\Google\Transport\GmailTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['http_client'] ?? $this->getHttpClientService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the private 'mailer.transport_factory.null' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\NullTransportFactory
     */
    protected function getMailer_TransportFactory_NullService()
    {
        return new \Symfony\Component\Mailer\Transport\NullTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['http_client'] ?? $this->getHttpClientService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the private 'mailer.transport_factory.sendmail' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\SendmailTransportFactory
     */
    protected function getMailer_TransportFactory_SendmailService()
    {
        return new \Symfony\Component\Mailer\Transport\SendmailTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['http_client'] ?? $this->getHttpClientService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the private 'mailer.transport_factory.smtp' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory
     */
    protected function getMailer_TransportFactory_SmtpService()
    {
        return new \Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['http_client'] ?? $this->getHttpClientService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the private 'mime_types' shared service.
     *
     * @return \Symfony\Component\Mime\MimeTypes
     */
    protected function getMimeTypesService()
    {
        $this->privates['mime_types'] = $instance = new \Symfony\Component\Mime\MimeTypes();

        $instance->setDefault($instance);

        return $instance;
    }

    /*
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, [], []);
    }

    /*
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $a = new \Monolog\Handler\StreamHandler('php://stderr', 100, true, NULL, false);
        $a->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());
        $a->setFormatter(new \Monolog\Formatter\JsonFormatter());

        return $this->privates['monolog.handler.main'] = new \Monolog\Handler\FingersCrossedHandler($a, new \Symfony\Bridge\Monolog\Handler\FingersCrossed\HttpCodeActivationStrategy(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), [0 => ['code' => 404, 'urls' => []], 1 => ['code' => 405, 'urls' => []]], 400), 50, true, true, NULL);
    }

    /*
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.security' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->privates['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /*
     * Gets the private 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->privates['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, ($this->privates['cache.property_access'] ?? $this->getCache_PropertyAccessService()), true);
    }

    /*
     * Gets the private 'property_info.cache' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\PropertyInfoCacheExtractor
     */
    protected function getPropertyInfo_CacheService()
    {
        return $this->privates['property_info.cache'] = new \Symfony\Component\PropertyInfo\PropertyInfoCacheExtractor(new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.serializer_extractor'] ?? $this->getPropertyInfo_SerializerExtractorService());
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
            yield 2 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
            yield 1 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
            yield 2 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
        }, 1), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 2), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 1)), ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()));
    }

    /*
     * Gets the private 'property_info.serializer_extractor' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor
     */
    protected function getPropertyInfo_SerializerExtractorService()
    {
        return $this->privates['property_info.serializer_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor(($this->privates['serializer.mapping.cache_class_metadata_factory'] ?? $this->getSerializer_Mapping_CacheClassMetadataFactoryService()));
    }

    /*
     * Gets the private 'router.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer
     */
    protected function getRouter_CacheWarmerService()
    {
        return $this->privates['router.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'router' => ['services', 'router', 'getRouterService', false],
        ], [
            'router' => '?',
        ]))->withContext('router.cache_warmer', $this));
    }

    /*
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), \dirname(__DIR__, 4), false);
    }

    /*
     * Gets the private 'security.access.authenticated_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter
     */
    protected function getSecurity_Access_AuthenticatedVoterService()
    {
        return $this->privates['security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))));
    }

    /*
     * Gets the private 'security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->privates['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.access.authenticated_voter'] ?? $this->getSecurity_Access_AuthenticatedVoterService());
            yield 1 => ($this->privates['security.access.simple_role_voter'] ?? ($this->privates['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter()));
            yield 2 => ($this->privates['security.access.expression_voter'] ?? $this->getSecurity_Access_ExpressionVoterService());
            yield 3 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Security\\SecurityVoter'] ?? $this->getSecurityVoterService());
        }, 4), 'affirmative', false, true);
    }

    /*
     * Gets the private 'security.access.expression_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter
     */
    protected function getSecurity_Access_ExpressionVoterService()
    {
        return $this->privates['security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService())), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))));
    }

    /*
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    protected function getSecurity_AccessListenerService()
    {
        return $this->privates['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.access.decision_manager'] ?? $this->getSecurity_Access_DecisionManagerService()), ($this->privates['security.access_map'] ?? $this->getSecurity_AccessMapService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /*
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    protected function getSecurity_AccessMapService()
    {
        $this->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin'), [0 => 'ROLE_ADMIN'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/account'), [0 => 'ROLE_USER'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/address'), [0 => 'ROLE_USER'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/checkout'), [0 => 'ROLE_USER'], NULL);

        return $instance;
    }

    /*
     * Gets the private 'security.authentication.listener.anonymous.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Anonymous_MainService()
    {
        return $this->privates['security.authentication.listener.anonymous.main'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $this->getParameter('container.build_hash'), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /*
     * Gets the private 'security.authentication.listener.guard.main' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Guard_MainService()
    {
        $a = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), []);
        $a->setSessionAuthenticationStrategy(new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'));

        return $this->privates['security.authentication.listener.guard.main'] = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener($a, ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), 'main', new RewindableGenerator(function () {
            yield 0 => ($this->privates['App\\Security\\LoginAuthenticator'] ?? $this->getLoginAuthenticatorService());
        }, 1), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), true);
    }

    /*
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.guard.main'] ?? $this->getSecurity_Authentication_Provider_Guard_MainService());
            yield 1 => ($this->privates['security.authentication.provider.anonymous.main'] ?? ($this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 2), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /*
     * Gets the private 'security.authentication.provider.guard.main' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Guard_MainService()
    {
        return $this->privates['security.authentication.provider.guard.main'] = new \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['App\\Security\\LoginAuthenticator'] ?? $this->getLoginAuthenticatorService());
        }, 1), ($this->privates['security.user.provider.concrete.app_user_provider'] ?? $this->getSecurity_User_Provider_Concrete_AppUserProviderService()), 'main', new \Symfony\Component\Security\Core\User\UserChecker(), ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService()));
    }

    /*
     * Gets the private 'security.channel_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener
     */
    protected function getSecurity_ChannelListenerService()
    {
        return $this->privates['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener(($this->privates['security.access_map'] ?? $this->getSecurity_AccessMapService()), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()));
    }

    /*
     * Gets the private 'security.command.user_password_encoder' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand
     */
    protected function getSecurity_Command_UserPasswordEncoderService()
    {
        $this->privates['security.command.user_password_encoder'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()), [0 => 'App\\Entity\\User']);

        $instance->setName('security:encode-password');

        return $instance;
    }

    /*
     * Gets the private 'security.context_listener.0' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ContextListener
     */
    protected function getSecurity_ContextListener_0Service()
    {
        return $this->privates['security.context_listener.0'] = new \Symfony\Component\Security\Http\Firewall\ContextListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.user.provider.concrete.app_user_provider'] ?? $this->getSecurity_User_Provider_Concrete_AppUserProviderService());
        }, 1), 'main', ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), [0 => ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), 1 => 'enableUsageTracking']);
    }

    /*
     * Gets the private 'security.csrf.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage
     */
    protected function getSecurity_Csrf_TokenStorageService()
    {
        return $this->privates['security.csrf.token_storage'] = new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(($this->services['session'] ?? $this->getSessionService()));
    }

    /*
     * Gets the private 'security.encoder_factory.generic' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactory_GenericService()
    {
        return $this->privates['security.encoder_factory.generic'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(['App\\Entity\\User' => ['algorithm' => 'auto', 'migrate_from' => [], 'hash_algorithm' => 'sha512', 'key_length' => 40, 'ignore_case' => false, 'encode_as_base64' => true, 'iterations' => 5000, 'cost' => NULL, 'memory_cost' => NULL, 'time_cost' => NULL, 'threads' => NULL]]);
    }

    /*
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->privates['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService', false],
            'security.firewall.map.context.main' => ['privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService', false],
        ], [
            'security.firewall.map.context.dev' => '?',
            'security.firewall.map.context.main' => '?',
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Iy.T22O'] ?? ($this->privates['.security.request_matcher.Iy.T22O'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
            yield 'security.firewall.map.context.main' => NULL;
        }, 2)), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /*
     * Gets the private 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->privates['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), NULL, NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', '.security.request_matcher.Iy.T22O', false, false, '', '', '', '', '', [], NULL));
    }

    /*
     * Gets the private 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService());
        $b = ($this->services['router'] ?? $this->getRouterService());

        $c = new \Symfony\Component\Security\Http\HttpUtils($b, $b, '{^https?://%s$}i', '{^https://%s$}i');
        $d = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $c, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($c, '/'), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'app_logout']);
        $d->addHandler(new \Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler(($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService())));
        $d->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

        return $this->privates['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.channel_listener'] ?? $this->getSecurity_ChannelListenerService());
            yield 1 => ($this->privates['security.context_listener.0'] ?? $this->getSecurity_ContextListener_0Service());
            yield 2 => ($this->privates['security.authentication.listener.guard.main'] ?? $this->getSecurity_Authentication_Listener_Guard_MainService());
            yield 3 => ($this->privates['security.authentication.listener.anonymous.main'] ?? $this->getSecurity_Authentication_Listener_Anonymous_MainService());
            yield 4 => ($this->privates['security.access_listener'] ?? $this->getSecurity_AccessListenerService());
        }, 5), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), $c, 'main', ($this->privates['App\\Security\\LoginAuthenticator'] ?? $this->getLoginAuthenticatorService()), NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), false), $d, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', NULL, true, false, 'security.user.provider.concrete.app_user_provider', 'main', 'App\\Security\\LoginAuthenticator', NULL, NULL, [0 => 'guard', 1 => 'anonymous'], NULL), ($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));
    }

    /*
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));

        $instance->registerListener('main', 'app_logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /*
     * Gets the private 'security.user.provider.concrete.app_user_provider' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider
     */
    protected function getSecurity_User_Provider_Concrete_AppUserProviderService()
    {
        return $this->privates['security.user.provider.concrete.app_user_provider'] = new \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider(($this->services['doctrine'] ?? $this->getDoctrineService()), 'App\\Entity\\User', 'email', NULL);
    }

    /*
     * Gets the private 'security.user_value_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Http\Controller\UserValueResolver
     */
    protected function getSecurity_UserValueResolverService()
    {
        return $this->privates['security.user_value_resolver'] = new \Symfony\Component\Security\Http\Controller\UserValueResolver(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
    }

    /*
     * Gets the private 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->privates['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /*
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /*
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($a, true);
    }

    /*
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        $this->privates['sensio_framework_extra.view.listener'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))));

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('sensio_framework_extra.view.listener', $this));

        return $instance;
    }

    /*
     * Gets the private 'serializer.mapping.cache_class_metadata_factory' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory
     */
    protected function getSerializer_Mapping_CacheClassMetadataFactoryService()
    {
        return $this->privates['serializer.mapping.cache_class_metadata_factory'] = new \Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))])), \Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/serialization.php'), ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService())));
    }

    /*
     * Gets the private 'serializer.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer
     */
    protected function getSerializer_Mapping_CacheWarmerService()
    {
        return $this->privates['serializer.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))], ($this->targetDir.''.'/serialization.php'));
    }

    /*
     * Gets the private 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->privates['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0));
    }

    /*
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'session_storage' => ['privates', 'session.storage.native', 'getSession_Storage_NativeService', false],
        ], [
            'initialized_session' => '?',
            'request_stack' => '?',
            'session' => '?',
            'session_storage' => '?',
        ]));
    }

    /*
     * Gets the private 'symfonycasts.reset_password.cleaner' shared service.
     *
     * @return \SymfonyCasts\Bundle\ResetPassword\Util\ResetPasswordCleaner
     */
    protected function getSymfonycasts_ResetPassword_CleanerService()
    {
        return $this->privates['symfonycasts.reset_password.cleaner'] = new \SymfonyCasts\Bundle\ResetPassword\Util\ResetPasswordCleaner(($this->privates['App\\Repository\\ResetPasswordRequestRepository'] ?? $this->getResetPasswordRequestRepositoryService()), true);
    }

    /*
     * Gets the private 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    protected function getTranslation_ExtractorService()
    {
        $this->privates['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', new \Symfony\Component\Translation\Extractor\PhpExtractor());
        $instance->addExtractor('twig', new \Symfony\Bridge\Twig\Translation\TwigExtractor(($this->services['twig'] ?? $this->getTwigService())));

        return $instance;
    }

    /*
     * Gets the private 'translation.loader.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /*
     * Gets the private 'translation.loader.dat' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /*
     * Gets the private 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /*
     * Gets the private 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /*
     * Gets the private 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /*
     * Gets the private 'translation.loader.php' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /*
     * Gets the private 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /*
     * Gets the private 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /*
     * Gets the private 'translation.loader.res' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /*
     * Gets the private 'translation.loader.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /*
     * Gets the private 'translation.loader.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /*
     * Gets the private 'translation.reader' shared service.
     *
     * @return \Symfony\Component\Translation\Reader\TranslationReader
     */
    protected function getTranslation_ReaderService()
    {
        $this->privates['translation.reader'] = $instance = new \Symfony\Component\Translation\Reader\TranslationReader();

        $a = ($this->privates['translation.loader.yml'] ?? ($this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader()));
        $b = ($this->privates['translation.loader.xliff'] ?? ($this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader()));

        $instance->addLoader('php', ($this->privates['translation.loader.php'] ?? ($this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader())));
        $instance->addLoader('yaml', $a);
        $instance->addLoader('yml', $a);
        $instance->addLoader('xlf', $b);
        $instance->addLoader('xliff', $b);
        $instance->addLoader('po', ($this->privates['translation.loader.po'] ?? ($this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader())));
        $instance->addLoader('mo', ($this->privates['translation.loader.mo'] ?? ($this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader())));
        $instance->addLoader('ts', ($this->privates['translation.loader.qt'] ?? ($this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader())));
        $instance->addLoader('csv', ($this->privates['translation.loader.csv'] ?? ($this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader())));
        $instance->addLoader('res', ($this->privates['translation.loader.res'] ?? ($this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader())));
        $instance->addLoader('dat', ($this->privates['translation.loader.dat'] ?? ($this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader())));
        $instance->addLoader('ini', ($this->privates['translation.loader.ini'] ?? ($this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader())));
        $instance->addLoader('json', ($this->privates['translation.loader.json'] ?? ($this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader())));

        return $instance;
    }

    /*
     * Gets the private 'translation.warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer
     */
    protected function getTranslation_WarmerService()
    {
        return $this->privates['translation.warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'translator' => '?',
        ]))->withContext('translation.warmer', $this));
    }

    /*
     * Gets the private 'twig.command.debug' shared service.
     *
     * @return \Symfony\Bridge\Twig\Command\DebugCommand
     */
    protected function getTwig_Command_DebugService()
    {
        $this->privates['twig.command.debug'] = $instance = new \Symfony\Bridge\Twig\Command\DebugCommand(($this->services['twig'] ?? $this->getTwigService()), \dirname(__DIR__, 4), $this->parameters['kernel.bundles_metadata'], (\dirname(__DIR__, 4).'/templates'), ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), (\dirname(__DIR__, 4).'/src'));

        $instance->setName('debug:twig');

        return $instance;
    }

    /*
     * Gets the private 'twig.command.lint' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Command\LintCommand
     */
    protected function getTwig_Command_LintService()
    {
        $this->privates['twig.command.lint'] = $instance = new \Symfony\Bundle\TwigBundle\Command\LintCommand(($this->services['twig'] ?? $this->getTwigService()));

        $instance->setName('lint:twig');

        return $instance;
    }

    /*
     * Gets the private 'twig.form.renderer' shared service.
     *
     * @return \Symfony\Component\Form\FormRenderer
     */
    protected function getTwig_Form_RendererService()
    {
        return $this->privates['twig.form.renderer'] = new \Symfony\Component\Form\FormRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine($this->parameters['twig.form.resources'], ($this->services['twig'] ?? $this->getTwigService())), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /*
     * Gets the private 'twig.mailer.message_listener' shared service.
     *
     * @return \Symfony\Component\Mailer\EventListener\MessageListener
     */
    protected function getTwig_Mailer_MessageListenerService()
    {
        return $this->privates['twig.mailer.message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageListener(NULL, new \Symfony\Bridge\Twig\Mime\BodyRenderer(($this->services['twig'] ?? $this->getTwigService())));
    }

    /*
     * Gets the private 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        return $this->privates['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService', false],
        ], [
            'inline' => '?',
        ]), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), false));
    }

    /*
     * Gets the private 'twig.runtime.security_csrf' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\CsrfRuntime
     */
    protected function getTwig_Runtime_SecurityCsrfService()
    {
        return $this->privates['twig.runtime.security_csrf'] = new \Symfony\Bridge\Twig\Extension\CsrfRuntime(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /*
     * Gets the private 'twig.template_cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer
     */
    protected function getTwig_TemplateCacheWarmerService()
    {
        return $this->privates['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('twig.template_cache_warmer', $this), new \Symfony\Bundle\TwigBundle\TemplateIterator(($this->services['kernel'] ?? $this->get('kernel', 1)), (\dirname(__DIR__, 4).'/src'), [(\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email') => 'email', (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form') => NULL], (\dirname(__DIR__, 4).'/templates')));
    }

    /*
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilder
     */
    protected function getValidator_BuilderService()
    {
        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $a = ($this->privates['property_info.cache'] ?? $this->getPropertyInfo_CacheService());

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService', false],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService', false],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
        ], [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => '?',
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => '?',
            'doctrine.orm.validator.unique' => '?',
            'security.validator.user_password' => '?',
            'validator.expression' => '?',
        ])));
        $instance->setTranslator(new \Symfony\Component\Validator\Util\LegacyTranslatorProxy(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/config/validation.xml')]);
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->setMappingCache(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/validation.php'), ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService())));
        $instance->addObjectInitializers([0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService()))]);
        $instance->addLoader(new \Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader($a, $a, $a, NULL));
        $instance->addLoader(new \Symfony\Bridge\Doctrine\Validator\DoctrineLoader(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), NULL));

        return $instance;
    }

    /*
     * Gets the private 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        return $this->privates['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator('html5');
    }

    /*
     * Gets the private 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        return $this->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /*
     * Gets the private 'validator.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer
     */
    protected function getValidator_Mapping_CacheWarmerService()
    {
        return $this->privates['validator.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService()), ($this->targetDir.''.'/validation.php'));
    }

    /*
     * Gets the private 'validator.not_compromised_password' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator
     */
    protected function getValidator_NotCompromisedPasswordService()
    {
        return $this->privates['validator.not_compromised_password'] = new \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator(($this->privates['http_client'] ?? $this->getHttpClientService()), 'UTF-8', true, NULL);
    }

    /**
     * @return array|bool|float|int|string|null
     */
    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'serializer.mapping.cache.file' => false,
        'doctrine.orm.proxy_dir' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDir.''.'/validation.php'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDir.''.'/serialization.php'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDir.''.'/doctrine/orm/Proxies'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.root_dir' => (\dirname(__DIR__, 4).'/src'),
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'src',
            'kernel.logs_dir' => (\dirname(__DIR__, 3).'/log'),
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigExtraBundle' => 'Twig\\Extra\\TwigExtraBundle\\TwigExtraBundle',
                'SymfonyCastsVerifyEmailBundle' => 'SymfonyCasts\\Bundle\\VerifyEmail\\SymfonyCastsVerifyEmailBundle',
                'SymfonyCastsResetPasswordBundle' => 'SymfonyCasts\\Bundle\\ResetPassword\\SymfonyCastsResetPasswordBundle',
                'EasyAdminBundle' => 'EasyCorp\\Bundle\\EasyAdminBundle\\EasyAdminBundle',
            ],
            'kernel.bundles_metadata' => [
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'TwigBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'MonologBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'DoctrineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
                'SecurityBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'TwigExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/twig/extra-bundle'),
                    'namespace' => 'Twig\\Extra\\TwigExtraBundle',
                ],
                'SymfonyCastsVerifyEmailBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src'),
                    'namespace' => 'SymfonyCasts\\Bundle\\VerifyEmail',
                ],
                'SymfonyCastsResetPasswordBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src'),
                    'namespace' => 'SymfonyCasts\\Bundle\\ResetPassword',
                ],
                'EasyAdminBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src'),
                    'namespace' => 'EasyCorp\\Bundle\\EasyAdminBundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcApp_KernelProdContainer',
            'container.dumper.inline_class_loader' => false,
            'container.dumper.inline_factories' => true,
            'event_dispatcher.event_aliases' => [
                'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => 'console.command',
                'Symfony\\Component\\Console\\Event\\ConsoleErrorEvent' => 'console.error',
                'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => 'console.terminate',
                'Symfony\\Component\\Form\\Event\\PreSubmitEvent' => 'form.pre_submit',
                'Symfony\\Component\\Form\\Event\\SubmitEvent' => 'form.submit',
                'Symfony\\Component\\Form\\Event\\PostSubmitEvent' => 'form.post_submit',
                'Symfony\\Component\\Form\\Event\\PreSetDataEvent' => 'form.pre_set_data',
                'Symfony\\Component\\Form\\Event\\PostSetDataEvent' => 'form.post_set_data',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent' => 'kernel.controller_arguments',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent' => 'kernel.controller',
                'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent' => 'kernel.response',
                'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent' => 'kernel.finish_request',
                'Symfony\\Component\\HttpKernel\\Event\\RequestEvent' => 'kernel.request',
                'Symfony\\Component\\HttpKernel\\Event\\ViewEvent' => 'kernel.view',
                'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent' => 'kernel.exception',
                'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent' => 'kernel.terminate',
                'Symfony\\Component\\Workflow\\Event\\GuardEvent' => 'workflow.guard',
                'Symfony\\Component\\Workflow\\Event\\LeaveEvent' => 'workflow.leave',
                'Symfony\\Component\\Workflow\\Event\\TransitionEvent' => 'workflow.transition',
                'Symfony\\Component\\Workflow\\Event\\EnterEvent' => 'workflow.enter',
                'Symfony\\Component\\Workflow\\Event\\EnteredEvent' => 'workflow.entered',
                'Symfony\\Component\\Workflow\\Event\\CompletedEvent' => 'workflow.completed',
                'Symfony\\Component\\Workflow\\Event\\AnnounceEvent' => 'workflow.announce',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationSuccessEvent' => 'security.authentication.success',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationFailureEvent' => 'security.authentication.failure',
                'Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent' => 'security.interactive_login',
                'Symfony\\Component\\Security\\Http\\Event\\SwitchUserEvent' => 'security.switch_user',
            ],
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'kernel.error_controller' => 'error_controller',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_secure' => 'auto',
                'cookie_httponly' => true,
                'cookie_samesite' => 'lax',
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'translator.default_path' => (\dirname(__DIR__, 4).'/translations'),
            'data_collector.templates' => [

            ],
            'debug.error_handler.throw_at' => 0,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'router.cache_class_prefix' => 'srcApp_KernelProdContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'twig.exception_listener.controller' => NULL,
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
                1 => 'bootstrap_4_layout.html.twig',
            ],
            'twig.default_path' => (\dirname(__DIR__, 4).'/templates'),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.console' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                        1 => 'doctrine',
                    ],
                ],
                'monolog.handler.main' => NULL,
            ],
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.metadata.attribute.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AttributeDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine.migrations.preferred_em' => NULL,
            'doctrine.migrations.preferred_connection' => NULL,
            'security.authentication.trust_resolver.anonymous_class' => NULL,
            'security.authentication.trust_resolver.rememberme_class' => NULL,
            'security.role_hierarchy.roles' => [

            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'easyadmin.config' => [

            ],
            'console.command.ids' => [

            ],
        ];
    }

    protected function throw($message)
    {
        throw new RuntimeException($message);
    }
}

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera8821 = null;
    private $initializerd0132 = null;
    private static $publicProperties286ea = [
        
    ];
    public function getConnection()
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'getConnection', array(), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'getMetadataFactory', array(), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'getExpressionBuilder', array(), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'beginTransaction', array(), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'getCache', array(), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->getCache();
    }
    public function transactional($func)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'transactional', array('func' => $func), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->transactional($func);
    }
    public function commit()
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'commit', array(), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->commit();
    }
    public function rollback()
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'rollback', array(), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'getClassMetadata', array('className' => $className), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'createQuery', array('dql' => $dql), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'createNamedQuery', array('name' => $name), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'createQueryBuilder', array(), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'flush', array('entity' => $entity), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'clear', array('entityName' => $entityName), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->clear($entityName);
    }
    public function close()
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'close', array(), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->close();
    }
    public function persist($entity)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'persist', array('entity' => $entity), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'remove', array('entity' => $entity), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'refresh', array('entity' => $entity), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'detach', array('entity' => $entity), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'merge', array('entity' => $entity), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'contains', array('entity' => $entity), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'getEventManager', array(), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'getConfiguration', array(), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'isOpen', array(), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'getUnitOfWork', array(), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'getProxyFactory', array(), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'initializeObject', array('obj' => $obj), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'getFilters', array(), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'isFiltersStateClean', array(), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'hasFilters', array(), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return $this->valueHoldera8821->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerd0132 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldera8821) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera8821 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldera8821->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, '__get', ['name' => $name], $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        if (isset(self::$publicProperties286ea[$name])) {
            return $this->valueHoldera8821->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8821;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera8821;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8821;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera8821;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, '__isset', array('name' => $name), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8821;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldera8821;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, '__unset', array('name' => $name), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8821;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera8821;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, '__clone', array(), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        $this->valueHoldera8821 = clone $this->valueHoldera8821;
    }
    public function __sleep()
    {
        $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, '__sleep', array(), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
        return array('valueHoldera8821');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd0132 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd0132;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerd0132 && ($this->initializerd0132->__invoke($valueHoldera8821, $this, 'initializeProxy', array(), $this->initializerd0132) || 1) && $this->valueHoldera8821 = $valueHoldera8821;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera8821;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera8821;
    }
}
