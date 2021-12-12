<?php

namespace Container1SrYcje;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5c4fe = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc5f4e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc08e9 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'getConnection', array(), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'getMetadataFactory', array(), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'getExpressionBuilder', array(), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'beginTransaction', array(), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'getCache', array(), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'transactional', array('func' => $func), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'commit', array(), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->commit();
    }

    public function rollback()
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'rollback', array(), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'getClassMetadata', array('className' => $className), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'createQuery', array('dql' => $dql), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'createNamedQuery', array('name' => $name), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'createQueryBuilder', array(), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'flush', array('entity' => $entity), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'clear', array('entityName' => $entityName), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->clear($entityName);
    }

    public function close()
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'close', array(), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->close();
    }

    public function persist($entity)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'persist', array('entity' => $entity), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'remove', array('entity' => $entity), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'refresh', array('entity' => $entity), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'detach', array('entity' => $entity), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'merge', array('entity' => $entity), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'contains', array('entity' => $entity), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'getEventManager', array(), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'getConfiguration', array(), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'isOpen', array(), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'getUnitOfWork', array(), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'getProxyFactory', array(), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'initializeObject', array('obj' => $obj), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'getFilters', array(), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'isFiltersStateClean', array(), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'hasFilters', array(), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return $this->valueHolder5c4fe->hasFilters();
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

        $instance->initializerc5f4e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5c4fe) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5c4fe = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5c4fe->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, '__get', ['name' => $name], $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        if (isset(self::$publicPropertiesc08e9[$name])) {
            return $this->valueHolder5c4fe->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c4fe;

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

        $targetObject = $this->valueHolder5c4fe;
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
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c4fe;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5c4fe;
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
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, '__isset', array('name' => $name), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c4fe;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5c4fe;
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
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, '__unset', array('name' => $name), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c4fe;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5c4fe;
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
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, '__clone', array(), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        $this->valueHolder5c4fe = clone $this->valueHolder5c4fe;
    }

    public function __sleep()
    {
        $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, '__sleep', array(), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;

        return array('valueHolder5c4fe');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc5f4e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc5f4e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc5f4e && ($this->initializerc5f4e->__invoke($valueHolder5c4fe, $this, 'initializeProxy', array(), $this->initializerc5f4e) || 1) && $this->valueHolder5c4fe = $valueHolder5c4fe;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5c4fe;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5c4fe;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
