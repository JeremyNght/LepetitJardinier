<?php

namespace ContainerFgxizBC;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder69ba8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer97895 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2e958 = [
        
    ];

    public function getConnection()
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'getConnection', array(), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'getMetadataFactory', array(), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'getExpressionBuilder', array(), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'beginTransaction', array(), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'getCache', array(), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->getCache();
    }

    public function transactional($func)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'transactional', array('func' => $func), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'wrapInTransaction', array('func' => $func), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'commit', array(), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->commit();
    }

    public function rollback()
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'rollback', array(), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'getClassMetadata', array('className' => $className), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'createQuery', array('dql' => $dql), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'createNamedQuery', array('name' => $name), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'createQueryBuilder', array(), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'flush', array('entity' => $entity), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'clear', array('entityName' => $entityName), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->clear($entityName);
    }

    public function close()
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'close', array(), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->close();
    }

    public function persist($entity)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'persist', array('entity' => $entity), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'remove', array('entity' => $entity), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'refresh', array('entity' => $entity), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'detach', array('entity' => $entity), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'merge', array('entity' => $entity), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'getRepository', array('entityName' => $entityName), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'contains', array('entity' => $entity), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'getEventManager', array(), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'getConfiguration', array(), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'isOpen', array(), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'getUnitOfWork', array(), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'getProxyFactory', array(), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'initializeObject', array('obj' => $obj), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'getFilters', array(), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'isFiltersStateClean', array(), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'hasFilters', array(), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return $this->valueHolder69ba8->hasFilters();
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

        $instance->initializer97895 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder69ba8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder69ba8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder69ba8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, '__get', ['name' => $name], $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        if (isset(self::$publicProperties2e958[$name])) {
            return $this->valueHolder69ba8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69ba8;

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

        $targetObject = $this->valueHolder69ba8;
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
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69ba8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder69ba8;
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
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, '__isset', array('name' => $name), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69ba8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder69ba8;
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
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, '__unset', array('name' => $name), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69ba8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder69ba8;
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
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, '__clone', array(), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        $this->valueHolder69ba8 = clone $this->valueHolder69ba8;
    }

    public function __sleep()
    {
        $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, '__sleep', array(), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;

        return array('valueHolder69ba8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer97895 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer97895;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer97895 && ($this->initializer97895->__invoke($valueHolder69ba8, $this, 'initializeProxy', array(), $this->initializer97895) || 1) && $this->valueHolder69ba8 = $valueHolder69ba8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder69ba8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder69ba8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
