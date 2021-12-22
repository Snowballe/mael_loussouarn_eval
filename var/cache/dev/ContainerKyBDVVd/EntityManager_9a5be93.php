<?php

namespace ContainerKyBDVVd;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7facc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerae55e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdafc7 = [
        
    ];

    public function getConnection()
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'getConnection', array(), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'getMetadataFactory', array(), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'getExpressionBuilder', array(), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'beginTransaction', array(), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'getCache', array(), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->getCache();
    }

    public function transactional($func)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'transactional', array('func' => $func), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'wrapInTransaction', array('func' => $func), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'commit', array(), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->commit();
    }

    public function rollback()
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'rollback', array(), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'getClassMetadata', array('className' => $className), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'createQuery', array('dql' => $dql), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'createNamedQuery', array('name' => $name), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'createQueryBuilder', array(), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'flush', array('entity' => $entity), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'clear', array('entityName' => $entityName), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->clear($entityName);
    }

    public function close()
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'close', array(), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->close();
    }

    public function persist($entity)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'persist', array('entity' => $entity), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'remove', array('entity' => $entity), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'refresh', array('entity' => $entity), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'detach', array('entity' => $entity), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'merge', array('entity' => $entity), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'getRepository', array('entityName' => $entityName), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'contains', array('entity' => $entity), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'getEventManager', array(), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'getConfiguration', array(), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'isOpen', array(), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'getUnitOfWork', array(), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'getProxyFactory', array(), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'initializeObject', array('obj' => $obj), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'getFilters', array(), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'isFiltersStateClean', array(), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'hasFilters', array(), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return $this->valueHolder7facc->hasFilters();
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

        $instance->initializerae55e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7facc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7facc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7facc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, '__get', ['name' => $name], $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        if (isset(self::$publicPropertiesdafc7[$name])) {
            return $this->valueHolder7facc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7facc;

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

        $targetObject = $this->valueHolder7facc;
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
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7facc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7facc;
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
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, '__isset', array('name' => $name), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7facc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7facc;
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
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, '__unset', array('name' => $name), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7facc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7facc;
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
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, '__clone', array(), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        $this->valueHolder7facc = clone $this->valueHolder7facc;
    }

    public function __sleep()
    {
        $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, '__sleep', array(), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;

        return array('valueHolder7facc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerae55e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerae55e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerae55e && ($this->initializerae55e->__invoke($valueHolder7facc, $this, 'initializeProxy', array(), $this->initializerae55e) || 1) && $this->valueHolder7facc = $valueHolder7facc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7facc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7facc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
