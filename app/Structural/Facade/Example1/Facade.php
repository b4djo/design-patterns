<?php

namespace DesignPatterns\app\Structural\Facade\Example1;

/**
 * Class Facade
 * @package DesignPatterns\app\Structural\Facade
 */
class Facade
{
    /**
     * @var CpuInterface
     */
    private $cpu;

    /**
     * @var HardDriveInterface
     */
    private $hardDrive;

    /**
     * @var MemoryInterface
     */
    private $memory;

    /**
     * Facade constructor.
     *
     * @param CpuInterface $cpu
     * @param HardDriveInterface $hardDrive
     * @param MemoryInterface $memory
     */
    public function __construct(CpuInterface $cpu, HardDriveInterface $hardDrive, MemoryInterface $memory)
    {
        $this->cpu = $cpu;
        $this->hardDrive = $hardDrive;
        $this->memory = $memory;
    }

    public function startComputer()
    {
        $this->hardDrive->reading();
        $this->memory->charge();
        $this->cpu->performance();
    }
}
