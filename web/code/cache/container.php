<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class CompiledContainer extends Container
{
    private $parameters = [];

    public function __construct()
    {
        $this->services = $this->privates = [];
        $this->methodMap = [
            'Example\\Controller\\ExampleController' => 'getExampleControllerService',
            'Example\\Controller\\HomeController' => 'getHomeControllerService',
            'Example\\Model\\ExampleModel' => 'getExampleModelService',
            'Example\\Tests\\BaseCase' => 'getBaseCaseService',
            'Example\\Tests\\Integration\\Controller\\ExampleControllerTest' => 'getExampleControllerTestService',
            'Example\\Tests\\Integration\\View\\ExampleViewTest' => 'getExampleViewTestService',
            'Example\\View\\ExampleView' => 'getExampleViewService',
            'Mini\\Controller\\Controller' => 'getControllerService',
            'Mini\\Controller\\Exception\\BadInputException' => 'getBadInputExceptionService',
            'Mini\\Database\\Database' => 'getDatabaseService',
            'Mini\\Exception\\ExceptionBootstrap' => 'getExceptionBootstrapService',
            'Mini\\Exception\\ExceptionHandler' => 'getExceptionHandlerService',
            'Mini\\Exception\\WhoopsHandler' => 'getWhoopsHandlerService',
            'Mini\\File\\File' => 'getFileService',
            'Mini\\Http\\JsonResponse' => 'getJsonResponseService',
            'Mini\\Http\\Request' => 'getRequestService',
            'Mini\\Http\\Response' => 'getResponseService',
            'Mini\\Http\\ResponseFactory' => 'getResponseFactoryService',
            'Mini\\Http\\Router' => 'getRouterService',
            'Mini\\Log\\Logger' => 'getLoggerService',
            'Mini\\Model\\Model' => 'getModelService',
            'Mini\\Util\\Arr' => 'getArrService',
            'Mini\\Util\\Curl' => 'getCurlService',
            'Mini\\Util\\DateTime' => 'getDateTimeService',
            'Mini\\Util\\DateTimeImmutable' => 'getDateTimeImmutableService',
            'Mini\\Util\\Json' => 'getJsonService',
            'Mini\\View\\Renderer' => 'getRendererService',
            'Mini\\View\\TwigRenderer' => 'getTwigRendererService',
        ];

        $this->aliases = [];
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
        return [
            'Mini\\App' => true,
            'Mini\\View\\TwigEnvironmentFactory' => true,
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'Twig\\Environment' => true,
        ];
    }

    /**
     * Gets the public 'Example\Controller\ExampleController' autowired service.
     *
     * @return \Example\Controller\ExampleController
     */
    protected function getExampleControllerService()
    {
        return new \Example\Controller\ExampleController(new \Example\Model\ExampleModel(), new \Example\View\ExampleView(new \Example\Model\ExampleModel()));
    }

    /**
     * Gets the public 'Example\Controller\HomeController' autowired service.
     *
     * @return \Example\Controller\HomeController
     */
    protected function getHomeControllerService()
    {
        return new \Example\Controller\HomeController();
    }

    /**
     * Gets the public 'Example\Model\ExampleModel' autowired service.
     *
     * @return \Example\Model\ExampleModel
     */
    protected function getExampleModelService()
    {
        return new \Example\Model\ExampleModel();
    }

    /**
     * Gets the public 'Example\Tests\BaseCase' autowired service.
     *
     * @return \Example\Tests\BaseCase
     */
    protected function getBaseCaseService()
    {
        return new \Example\Tests\BaseCase();
    }

    /**
     * Gets the public 'Example\Tests\Integration\Controller\ExampleControllerTest' autowired service.
     *
     * @return \Example\Tests\Integration\Controller\ExampleControllerTest
     */
    protected function getExampleControllerTestService()
    {
        return new \Example\Tests\Integration\Controller\ExampleControllerTest();
    }

    /**
     * Gets the public 'Example\Tests\Integration\View\ExampleViewTest' autowired service.
     *
     * @return \Example\Tests\Integration\View\ExampleViewTest
     */
    protected function getExampleViewTestService()
    {
        return new \Example\Tests\Integration\View\ExampleViewTest();
    }

    /**
     * Gets the public 'Example\View\ExampleView' autowired service.
     *
     * @return \Example\View\ExampleView
     */
    protected function getExampleViewService()
    {
        return new \Example\View\ExampleView(new \Example\Model\ExampleModel());
    }

    /**
     * Gets the public 'Mini\Controller\Controller' shared autowired service.
     *
     * @return \Mini\Controller\Controller
     */
    protected function getControllerService()
    {
        return $this->services['Mini\\Controller\\Controller'] = new \Mini\Controller\Controller();
    }

    /**
     * Gets the public 'Mini\Controller\Exception\BadInputException' shared autowired service.
     *
     * @return \Mini\Controller\Exception\BadInputException
     */
    protected function getBadInputExceptionService()
    {
        return $this->services['Mini\\Controller\\Exception\\BadInputException'] = new \Mini\Controller\Exception\BadInputException();
    }

    /**
     * Gets the public 'Mini\Database\Database' shared service.
     *
     * @return \Mini\Database\MySqlManager
     */
    protected function getDatabaseService()
    {
        return $this->services['Mini\\Database\\Database'] = new \Mini\Database\MySqlManager(['host' => 'mysql', 'port' => '3306', 'user' => 'example_user', 'pass' => 'azRh4BbjUEBCrvtz0vE9hxw1Fs7yjmIp', 'schema' => 'example', 'charset' => 'utf8', 'sockets' => ['rw' => NULL, 'ro' => NULL]]);
    }

    /**
     * Gets the public 'Mini\Exception\ExceptionBootstrap' shared autowired service.
     *
     * @return \Mini\Exception\ExceptionBootstrap
     */
    protected function getExceptionBootstrapService()
    {
        return $this->services['Mini\\Exception\\ExceptionBootstrap'] = new \Mini\Exception\ExceptionBootstrap();
    }

    /**
     * Gets the public 'Mini\Exception\ExceptionHandler' shared autowired service.
     *
     * @return \Mini\Exception\ExceptionHandler
     */
    protected function getExceptionHandlerService()
    {
        return $this->services['Mini\\Exception\\ExceptionHandler'] = new \Mini\Exception\ExceptionHandler();
    }

    /**
     * Gets the public 'Mini\Exception\WhoopsHandler' shared autowired service.
     *
     * @return \Mini\Exception\WhoopsHandler
     */
    protected function getWhoopsHandlerService()
    {
        return $this->services['Mini\\Exception\\WhoopsHandler'] = new \Mini\Exception\WhoopsHandler();
    }

    /**
     * Gets the public 'Mini\File\File' shared autowired service.
     *
     * @return \Mini\File\File
     */
    protected function getFileService()
    {
        return $this->services['Mini\\File\\File'] = new \Mini\File\File();
    }

    /**
     * Gets the public 'Mini\Http\JsonResponse' shared autowired service.
     *
     * @return \Mini\Http\JsonResponse
     */
    protected function getJsonResponseService()
    {
        return $this->services['Mini\\Http\\JsonResponse'] = new \Mini\Http\JsonResponse();
    }

    /**
     * Gets the public 'Mini\Http\Request' shared autowired service.
     *
     * @return \Mini\Http\Request
     */
    protected function getRequestService()
    {
        return $this->services['Mini\\Http\\Request'] = new \Mini\Http\Request();
    }

    /**
     * Gets the public 'Mini\Http\Response' shared autowired service.
     *
     * @return \Mini\Http\Response
     */
    protected function getResponseService()
    {
        return $this->services['Mini\\Http\\Response'] = new \Mini\Http\Response();
    }

    /**
     * Gets the public 'Mini\Http\ResponseFactory' shared autowired service.
     *
     * @return \Mini\Http\ResponseFactory
     */
    protected function getResponseFactoryService()
    {
        return $this->services['Mini\\Http\\ResponseFactory'] = new \Mini\Http\ResponseFactory(($this->services['Mini\\View\\Renderer'] ?? $this->getRendererService()));
    }

    /**
     * Gets the public 'Mini\Http\Router' shared autowired service.
     *
     * @return \Mini\Http\Router
     */
    protected function getRouterService()
    {
        return $this->services['Mini\\Http\\Router'] = new \Mini\Http\Router();
    }

    /**
     * Gets the public 'Mini\Log\Logger' shared autowired service.
     *
     * @return \Mini\Log\Logger
     */
    protected function getLoggerService()
    {
        return $this->services['Mini\\Log\\Logger'] = new \Mini\Log\Logger();
    }

    /**
     * Gets the public 'Mini\Model\Model' shared autowired service.
     *
     * @return \Mini\Model\Model
     */
    protected function getModelService()
    {
        return $this->services['Mini\\Model\\Model'] = new \Mini\Model\Model();
    }

    /**
     * Gets the public 'Mini\Util\Arr' shared autowired service.
     *
     * @return \Mini\Util\Arr
     */
    protected function getArrService()
    {
        return $this->services['Mini\\Util\\Arr'] = new \Mini\Util\Arr();
    }

    /**
     * Gets the public 'Mini\Util\Curl' shared autowired service.
     *
     * @return \Mini\Util\Curl
     */
    protected function getCurlService()
    {
        return $this->services['Mini\\Util\\Curl'] = new \Mini\Util\Curl();
    }

    /**
     * Gets the public 'Mini\Util\DateTime' shared autowired service.
     *
     * @return \Mini\Util\DateTime
     */
    protected function getDateTimeService()
    {
        return $this->services['Mini\\Util\\DateTime'] = new \Mini\Util\DateTime();
    }

    /**
     * Gets the public 'Mini\Util\DateTimeImmutable' shared autowired service.
     *
     * @return \Mini\Util\DateTimeImmutable
     */
    protected function getDateTimeImmutableService()
    {
        return $this->services['Mini\\Util\\DateTimeImmutable'] = new \Mini\Util\DateTimeImmutable();
    }

    /**
     * Gets the public 'Mini\Util\Json' shared autowired service.
     *
     * @return \Mini\Util\Json
     */
    protected function getJsonService()
    {
        return $this->services['Mini\\Util\\Json'] = new \Mini\Util\Json();
    }

    /**
     * Gets the public 'Mini\View\Renderer' shared autowired service.
     *
     * @return \Mini\View\TwigRenderer
     */
    protected function getRendererService()
    {
        return $this->services['Mini\\View\\Renderer'] = new \Mini\View\TwigRenderer(($this->privates['Twig\\Environment'] ?? $this->getEnvironmentService()));
    }

    /**
     * Gets the public 'Mini\View\TwigRenderer' shared autowired service.
     *
     * @return \Mini\View\TwigRenderer
     */
    protected function getTwigRendererService()
    {
        return $this->services['Mini\\View\\TwigRenderer'] = new \Mini\View\TwigRenderer(($this->privates['Twig\\Environment'] ?? $this->getEnvironmentService()));
    }

    /**
     * Gets the private 'Twig\Environment' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getEnvironmentService()
    {
        return $this->privates['Twig\\Environment'] = (new \Mini\View\TwigEnvironmentFactory())->__invoke();
    }
}
