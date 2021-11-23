<?php

namespace ContainerHJcExDD;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder08fed = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc6441 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties643df = [
        
    ];

    public function getConnection()
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'getConnection', array(), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'getMetadataFactory', array(), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'getExpressionBuilder', array(), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'beginTransaction', array(), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'getCache', array(), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'transactional', array('func' => $func), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'commit', array(), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->commit();
    }

    public function rollback()
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'rollback', array(), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'getClassMetadata', array('className' => $className), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'createQuery', array('dql' => $dql), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'createNamedQuery', array('name' => $name), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'createQueryBuilder', array(), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'flush', array('entity' => $entity), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'clear', array('entityName' => $entityName), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->clear($entityName);
    }

    public function close()
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'close', array(), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->close();
    }

    public function persist($entity)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'persist', array('entity' => $entity), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'remove', array('entity' => $entity), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'refresh', array('entity' => $entity), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'detach', array('entity' => $entity), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'merge', array('entity' => $entity), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'contains', array('entity' => $entity), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'getEventManager', array(), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'getConfiguration', array(), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'isOpen', array(), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'getUnitOfWork', array(), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'getProxyFactory', array(), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'initializeObject', array('obj' => $obj), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'getFilters', array(), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'isFiltersStateClean', array(), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'hasFilters', array(), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return $this->valueHolder08fed->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerc6441 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder08fed) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder08fed = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder08fed->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, '__get', ['name' => $name], $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        if (isset(self::$publicProperties643df[$name])) {
            return $this->valueHolder08fed->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder08fed;

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

        $targetObject = $this->valueHolder08fed;
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
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder08fed;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder08fed;
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
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, '__isset', array('name' => $name), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder08fed;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder08fed;
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
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, '__unset', array('name' => $name), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder08fed;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder08fed;
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
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, '__clone', array(), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        $this->valueHolder08fed = clone $this->valueHolder08fed;
    }

    public function __sleep()
    {
        $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, '__sleep', array(), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;

        return array('valueHolder08fed');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc6441 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc6441;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc6441 && ($this->initializerc6441->__invoke($valueHolder08fed, $this, 'initializeProxy', array(), $this->initializerc6441) || 1) && $this->valueHolder08fed = $valueHolder08fed;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder08fed;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder08fed;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
