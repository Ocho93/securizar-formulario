<?php

namespace ContainerVx1okIV;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_LexikJwtAuthentication_EnableEncryptionConfigCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.lexik_jwt_authentication.enable_encryption_config_command.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.lexik_jwt_authentication.enable_encryption_config_command.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('lexik:jwt:enable-encryption', [], 'Enable Web-Token encryption support.', false, #[\Closure(name: 'lexik_jwt_authentication.enable_encryption_config_command', class: 'Lexik\\Bundle\\JWTAuthenticationBundle\\Command\\EnableEncryptionConfigCommand')] fn (): \Lexik\Bundle\JWTAuthenticationBundle\Command\EnableEncryptionConfigCommand => ($container->privates['lexik_jwt_authentication.enable_encryption_config_command'] ?? $container->load('getLexikJwtAuthentication_EnableEncryptionConfigCommandService')));
    }
}
