<?php

declare(strict_types=1);

namespace SmitBackend\DocuMatrix\Contracts;

/**
 * Interface ExtractorDriverInterface
 *
 * @package SmitBackend\DocuMatrix
 */
interface ExtractorDriverInterface
{
    public function execute(array $payload = []): mixed;
}
