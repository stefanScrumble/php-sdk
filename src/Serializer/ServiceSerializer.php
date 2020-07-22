<?php

declare(strict_types=1);

namespace Boekuwzending\Serializer;

use Boekuwzending\Resource\Service;
use LogicException;

/**
 * Class ServiceSerializer.
 */
class ServiceSerializer implements SerializerInterface
{
    /**
     * @inheritDoc
     */
    public function serialize($data): array
    {
        throw new LogicException('Not yet implemented: ServiceSerializer::serialize');
    }

    /**
     * @inheritDoc
     */
    public function deserialize(array $data, string $dataType): Service
    {
        $service = new Service();
        $service->setId($data['id']);
        $service->setKey($data['key']);
        $service->setName($data['name']);

        return $service;
    }
}
