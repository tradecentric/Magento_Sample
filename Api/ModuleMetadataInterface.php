<?php
declare(strict_types=1);

namespace TradeCentric\Sample\Api;

/**
 * Interface ModuleMetadataInterface
 * @package TradeCentric\Sample\Api
 */
interface ModuleMetadataInterface
{
    /**
     * @return string
     */
    public function getModuleVersion(): string;

    /**
     * @return string
     */
    public function getModuleName(): string;

    /**
     * @return string
     */
    public function getMagentoVersion(): string;
}
