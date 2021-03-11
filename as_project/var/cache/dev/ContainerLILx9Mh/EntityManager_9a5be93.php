<?php

namespace ContainerLILx9Mh;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder10344 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer824a0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb65f9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'getConnection', array(), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'getMetadataFactory', array(), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'getExpressionBuilder', array(), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'beginTransaction', array(), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'getCache', array(), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->getCache();
    }

    public function transactional($func)
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'transactional', array('func' => $func), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->transactional($func);
    }

    public function commit()
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'commit', array(), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->commit();
    }

    public function rollback()
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'rollback', array(), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'getClassMetadata', array('className' => $className), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'createQuery', array('dql' => $dql), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'createNamedQuery', array('name' => $name), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'createQueryBuilder', array(), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'flush', array('entity' => $entity), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'clear', array('entityName' => $entityName), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->clear($entityName);
    }

    public function close()
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'close', array(), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->close();
    }

    public function persist($entity)
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'persist', array('entity' => $entity), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'remove', array('entity' => $entity), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'refresh', array('entity' => $entity), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'detach', array('entity' => $entity), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'merge', array('entity' => $entity), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'getRepository', array('entityName' => $entityName), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'contains', array('entity' => $entity), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'getEventManager', array(), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'getConfiguration', array(), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'isOpen', array(), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'getUnitOfWork', array(), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'getProxyFactory', array(), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'initializeObject', array('obj' => $obj), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'getFilters', array(), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'isFiltersStateClean', array(), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'hasFilters', array(), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return $this->valueHolder10344->hasFilters();
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

        $instance->initializer824a0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder10344) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder10344 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder10344->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, '__get', ['name' => $name], $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        if (isset(self::$publicPropertiesb65f9[$name])) {
            return $this->valueHolder10344->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10344;

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

        $targetObject = $this->valueHolder10344;
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
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10344;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder10344;
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
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, '__isset', array('name' => $name), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10344;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder10344;
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
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, '__unset', array('name' => $name), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10344;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder10344;
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
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, '__clone', array(), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        $this->valueHolder10344 = clone $this->valueHolder10344;
    }

    public function __sleep()
    {
        $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, '__sleep', array(), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;

        return array('valueHolder10344');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer824a0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer824a0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer824a0 && ($this->initializer824a0->__invoke($valueHolder10344, $this, 'initializeProxy', array(), $this->initializer824a0) || 1) && $this->valueHolder10344 = $valueHolder10344;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder10344;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder10344;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
