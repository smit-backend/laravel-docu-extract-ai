<?php

declare(strict_types=1);

namespace SmitBackend\DocuMatrix;

use SmitBackend\DocuMatrix\Contracts\ExtractorDriverInterface;

/**
 * Class DocumentExtractor
 *
 * @package SmitBackend\DocuMatrix
 */
class DocumentExtractor implements ExtractorDriverInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Business logic execution
        return array_merge($this->config, $payload);
    }
}
