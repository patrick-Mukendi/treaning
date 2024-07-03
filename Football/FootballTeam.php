<?php

class FootballTeam
{
    private string $name;
    private int $players;
    private string $managerName;
    private string $coachName;
    private string $createdAt;

    public function __construct(string $name, int $players, string $managerName, string $coachName, string $createdAt)
    {
        $this->name = $name;
        $this->players = $players;
        $this->managerName = $managerName;
        $this->coachName = $coachName;
        $this->createdAt = $createdAt;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPlayers(): int
    {
        return $this->players;
    }

    public function setPlayers(int $players): self
    {
        $this->players = $players;

        return $this;
    }

    public function getManagerName(): string
    {
        return $this->managerName;
    }

    public function setManagerName(string $managerName): self
    {
        $this->managerName = $managerName;

        return $this;
    }

    public function getCoachName(): string
    {
        return $this->coachName;
    }

    public function setCoachName(string $coachName): self
    {
        $this->coachName = $coachName;

        return $this;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function setCreatedAt(string $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
