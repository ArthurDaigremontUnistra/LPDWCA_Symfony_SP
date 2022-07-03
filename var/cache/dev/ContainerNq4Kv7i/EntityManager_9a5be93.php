<?php

namespace ContainerNq4Kv7i;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercb329 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf73e9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc01d6 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'getConnection', array(), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'getMetadataFactory', array(), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'getExpressionBuilder', array(), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'beginTransaction', array(), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'getCache', array(), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'transactional', array('func' => $func), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'commit', array(), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->commit();
    }

    public function rollback()
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'rollback', array(), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'getClassMetadata', array('className' => $className), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'createQuery', array('dql' => $dql), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'createNamedQuery', array('name' => $name), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'createQueryBuilder', array(), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'flush', array('entity' => $entity), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'clear', array('entityName' => $entityName), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->clear($entityName);
    }

    public function close()
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'close', array(), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->close();
    }

    public function persist($entity)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'persist', array('entity' => $entity), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'remove', array('entity' => $entity), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'refresh', array('entity' => $entity), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'detach', array('entity' => $entity), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'merge', array('entity' => $entity), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'contains', array('entity' => $entity), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'getEventManager', array(), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'getConfiguration', array(), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'isOpen', array(), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'getUnitOfWork', array(), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'getProxyFactory', array(), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'initializeObject', array('obj' => $obj), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'getFilters', array(), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'isFiltersStateClean', array(), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'hasFilters', array(), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return $this->valueHoldercb329->hasFilters();
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

        $instance->initializerf73e9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercb329) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercb329 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercb329->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, '__get', ['name' => $name], $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        if (isset(self::$publicPropertiesc01d6[$name])) {
            return $this->valueHoldercb329->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb329;

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

        $targetObject = $this->valueHoldercb329;
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
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb329;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercb329;
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
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, '__isset', array('name' => $name), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb329;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercb329;
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
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, '__unset', array('name' => $name), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb329;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercb329;
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
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, '__clone', array(), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        $this->valueHoldercb329 = clone $this->valueHoldercb329;
    }

    public function __sleep()
    {
        $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, '__sleep', array(), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;

        return array('valueHoldercb329');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf73e9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf73e9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf73e9 && ($this->initializerf73e9->__invoke($valueHoldercb329, $this, 'initializeProxy', array(), $this->initializerf73e9) || 1) && $this->valueHoldercb329 = $valueHoldercb329;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercb329;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercb329;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
