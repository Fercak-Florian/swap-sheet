<?php

namespace App\Entity;

use DateTimeInterface;

class SwapSheet
{
    private ?string $newComputerTattoo = null;
    private ?string $tspName = null;
    private ?string $userName = null;
    private ?string $cuid = null;

    private ?string $incidentNumber = null;
//    private \DateTimeImmutable $allocationDate;
    private ?string $comment = null;
    private ?string $oldComputerTattoo = null;

    private ?string $oldComputerModel = null;

    private ?string $symptom = null;

    public function getNewComputerTattoo(): ?string
    {
        return $this->newComputerTattoo;
    }

    public function setNewComputerTattoo(?string $newComputerTattoo): void
    {
        $this->newComputerTattoo = $newComputerTattoo;
    }

    public function getTspName(): ?string
    {
        return $this->tspName;
    }

    public function setTspName(?string $tspName): void
    {
        $this->tspName = $tspName;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(?string $userName): void
    {
        $this->userName = $userName;
    }

    public function getCuid(): ?string
    {
        return $this->cuid;
    }

    public function setCuid(?string $cuid): void
    {
        $this->cuid = $cuid;
    }

    public function getIncidentNumber(): ?string
    {
        return $this->incidentNumber;
    }

    public function setIncidentNumber(?string $incidentNumber): void
    {
        $this->incidentNumber = $incidentNumber;
    }

    public function getAllocationDate(): DateTimeInterface
    {
        return $this->allocationDate;
    }

    public function setAllocationDate(DateTimeInterface $allocationDate): void
    {
        $this->allocationDate = $allocationDate;
    }

    public function getOldComputerModel(): ?string
    {
        return $this->oldComputerModel;
    }

    public function setOldComputerModel(?string $oldModel): void
    {
        $this->oldComputerModel = $oldModel;
    }

    public function getSymptom(): ?string
    {
        return $this->symptom;
    }

    public function setSymptom(?string $symptom): void
    {
        $this->symptom = $symptom;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }


    public function getOldComputerTattoo(): ?string
    {
        return $this->oldComputerTattoo;
    }
    public function setOldComputerTattoo(string $oldComputerTattoo): static
    {
        $this->oldComputerTattoo = $oldComputerTattoo;

        return $this;
    }
}
