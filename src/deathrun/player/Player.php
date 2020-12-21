<?php

declare(strict_types=1);

namespace deathrun\player;

use deathrun\arena\Arena as CustomArena;
use gameapi\arena\Arena;
use gameapi\player\Player as mainPlayer;

class Player extends mainPlayer {

    /** @var bool */
    protected $runner = true;

    /**
     * @return CustomArena
     */
    public function getArena(): Arena {
        /** @var CustomArena $arena */
        $arena = parent::getArena();

        return $arena;
    }

    /**
     * @return int
     */
    public function getSlot(): int {
        return $this->isRunner() ? 1 : 2;
    }

    /**
     * @return bool
     */
    public function isRunner(): bool {
        return $this->runner;
    }

    /**
     * @param bool $running
     */
    public function setRunning(bool $running = false): void {
        $this->runner = $running;
    }

    /**
     * @param bool $teleport
     */
    public function setDefaultPlayerAttributes(bool $teleport = false): void {
        parent::setDefaultPlayerAttributes($teleport);
    }
}