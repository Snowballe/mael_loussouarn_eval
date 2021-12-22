<?php

namespace ContainerLBFKo2y;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder23fe2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc8467 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8c3b4 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'getConnection', array(), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'getMetadataFactory', array(), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'getExpressionBuilder', array(), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'beginTransaction', array(), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'getCache', array(), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'transactional', array('func' => $func), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'commit', array(), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->commit();
    }

    public function rollback()
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'rollback', array(), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'getClassMetadata', array('className' => $className), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'createQuery', array('dql' => $dql), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'createNamedQuery', array('name' => $name), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'createQueryBuilder', array(), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'flush', array('entity' => $entity), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'clear', array('entityName' => $entityName), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->clear($entityName);
    }

    public function close()
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'close', array(), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->close();
    }

    public function persist($entity)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'persist', array('entity' => $entity), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'remove', array('entity' => $entity), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'refresh', array('entity' => $entity), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'detach', array('entity' => $entity), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'merge', array('entity' => $entity), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'contains', array('entity' => $entity), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'getEventManager', array(), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'getConfiguration', array(), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'isOpen', array(), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'getUnitOfWork', array(), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'getProxyFactory', array(), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'initializeObject', array('obj' => $obj), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'getFilters', array(), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'isFiltersStateClean', array(), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'hasFilters', array(), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return $this->valueHolder23fe2->hasFilters();
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

        $instance->initializerc8467 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder23fe2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder23fe2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder23fe2->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, '__get', ['name' => $name], $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        if (isset(self::$publicProperties8c3b4[$name])) {
            return $this->valueHolder23fe2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23fe2;

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

        $targetObject = $this->valueHolder23fe2;
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
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23fe2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder23fe2;
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
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, '__isset', array('name' => $name), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23fe2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder23fe2;
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
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, '__unset', array('name' => $name), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23fe2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder23fe2;
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
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, '__clone', array(), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        $this->valueHolder23fe2 = clone $this->valueHolder23fe2;
    }

    public function __sleep()
    {
        $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, '__sleep', array(), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;

        return array('valueHolder23fe2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc8467 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc8467;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc8467 && ($this->initializerc8467->__invoke($valueHolder23fe2, $this, 'initializeProxy', array(), $this->initializerc8467) || 1) && $this->valueHolder23fe2 = $valueHolder23fe2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder23fe2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder23fe2;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
