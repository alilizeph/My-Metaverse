<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'avatarFile' => [parent::class, 'avatarFile', null],
        "\0".parent::class."\0".'avatarFileSize' => [parent::class, 'avatarFileSize', null],
        "\0".parent::class."\0".'avatarNewFileName' => [parent::class, 'avatarNewFileName', null],
        "\0".parent::class."\0".'birthday' => [parent::class, 'birthday', null],
        "\0".parent::class."\0".'comments' => [parent::class, 'comments', null],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'firstName' => [parent::class, 'firstName', null],
        "\0".parent::class."\0".'gender' => [parent::class, 'gender', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'isAdmin' => [parent::class, 'isAdmin', null],
        "\0".parent::class."\0".'isRegestered' => [parent::class, 'isRegestered', null],
        "\0".parent::class."\0".'likes' => [parent::class, 'likes', null],
        "\0".parent::class."\0".'nbComments' => [parent::class, 'nbComments', null],
        "\0".parent::class."\0".'nbLikes' => [parent::class, 'nbLikes', null],
        "\0".parent::class."\0".'password' => [parent::class, 'password', null],
        "\0".parent::class."\0".'presentation' => [parent::class, 'presentation', null],
        "\0".parent::class."\0".'roles' => [parent::class, 'roles', null],
        "\0".parent::class."\0".'surname' => [parent::class, 'surname', null],
        "\0".parent::class."\0".'username' => [parent::class, 'username', null],
        'avatarFile' => [parent::class, 'avatarFile', null],
        'avatarFileSize' => [parent::class, 'avatarFileSize', null],
        'avatarNewFileName' => [parent::class, 'avatarNewFileName', null],
        'birthday' => [parent::class, 'birthday', null],
        'comments' => [parent::class, 'comments', null],
        'email' => [parent::class, 'email', null],
        'firstName' => [parent::class, 'firstName', null],
        'gender' => [parent::class, 'gender', null],
        'id' => [parent::class, 'id', null],
        'isAdmin' => [parent::class, 'isAdmin', null],
        'isRegestered' => [parent::class, 'isRegestered', null],
        'likes' => [parent::class, 'likes', null],
        'nbComments' => [parent::class, 'nbComments', null],
        'nbLikes' => [parent::class, 'nbLikes', null],
        'password' => [parent::class, 'password', null],
        'presentation' => [parent::class, 'presentation', null],
        'roles' => [parent::class, 'roles', null],
        'surname' => [parent::class, 'surname', null],
        'username' => [parent::class, 'username', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
