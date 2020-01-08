<?php declare(strict_types=1);

namespace Swag\CustomEntity\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1578519187Cacheentity extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1578519187;
    }

    public function update(Connection $connection): void
    {
        $sql = <<<SQL
CREATE TABLE IF NOT EXISTS `bunnycdn_cache_entity` (
    `id` BINARY(16) NOT NULL,
    `path` VARCHAR(255) COLLATE utf8mb4_unicode_ci,
    `hash` VARCHAR(255) COLLATE utf8mb4_unicode_ci,
    `encoder` VARCHAR(255) COLLATE utf8mb4_unicode_ci,
    `created_at` DATETIME(3) NOT NULL,
    `updated_at` DATETIME(3),
    PRIMARY KEY (`id`)
)
    ENGINE = InnoDB
    DEFAULT CHARSET = utf8mb4
    COLLATE = utf8mb4_unicode_ci;
SQL;
        $connection->executeQuery($sql);
    }

    public function updateDestructive(Connection $connection): void
    {
    }
}
