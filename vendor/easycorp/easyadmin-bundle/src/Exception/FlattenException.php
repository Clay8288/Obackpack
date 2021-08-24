<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Exception;

use EasyCorp\Bundle\EasyAdminBundle\Context\ExceptionContext;
use Symfony\Component\ErrorHandler\Exception\FlattenException as BaseFlattenException;

/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
final class FlattenException extends BaseFlattenException
{
    /** @var ExceptionContext */
    private $context;

    /**
     * @param int $statusCode
     *
     * @return FlattenException
     *
     * @throws \RuntimeException
     */
    public static function create(\Exception $exception, $statusCode = null, array $headers = []): BaseFlattenException
    {
        if (!$exception instanceof BaseException) {
            throw new \RuntimeException(sprintf('You should only try to create an instance of "%s" with a "EasyCorp\Bundle\EasyAdminBundle\Exception\BaseException" instance, or subclass. "%s" given.', __CLASS__, \get_class($exception)));
        }

        /** @var FlattenException $e */
        $e = parent::create($exception, $statusCode, $headers);
        $e->context = $exception->getContext();

        return $e;
    }

    public function getPublicMessage()
    {
        return $this->context->getPublicMessage();
    }

    public function getDebugMessage()
    {
        return $this->context->getDebugMessage();
    }

    public function getParameters()
    {
        return $this->context->getParameters();
    }

    public function getTranslationParameters()
    {
        return $this->context->getTranslationParameters();
    }

    public function getStatusCode(): int
    {
        return $this->context->getStatusCode();
    }
}
