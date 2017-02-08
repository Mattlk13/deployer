<?php

namespace REBELinBLUE\Deployer\Tests\Unit\Repositories;

use Mockery as m;
use REBELinBLUE\Deployer\CheckUrl;
use REBELinBLUE\Deployer\Repositories\Contracts\CheckUrlRepositoryInterface;
use REBELinBLUE\Deployer\Repositories\EloquentCheckUrlRepository;
use REBELinBLUE\Deployer\Repositories\EloquentRepository;
use REBELinBLUE\Deployer\Tests\TestCase;

/**
 * @coversDefaultClass \REBELinBLUE\Deployer\Repositories\EloquentCheckUrlRepository
 */
class EloquentCheckUrlRepositoryTest extends EloquentRepositoryTestCase
{
    /**
     * @covers ::__construct
     */
    public function testExtendsEloquentRepository()
    {
        $this->assertExtendsEloquentRepository(CheckUrl::class, EloquentCheckUrlRepository::class);
    }

    /**
     * @covers ::__construct
     */
    public function testImplementsCheckUrlRepositoryInterface()
    {
        $this->assertImplementsRepositoryInterface(
            CheckUrl::class,
            EloquentCheckUrlRepository::class,
            CheckUrlRepositoryInterface::class
        );
    }
}
