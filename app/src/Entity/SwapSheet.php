<?php

namespace App\Entity;

use DateTimeInterface;

class SwapSheet
{
    public function __construct()
    {
        $this->masterDate = new \DateTimeImmutable("now");
    }

    private ?string $diskSize = null;
    private ?string $newModel = null;
    private ?string $bios = null;
//    private \DateTimeImmutable $masterDate;
    private ?string $newSerialNumber = null;
    private ?string $newComputer = null;
    private ?string $tattooNumber = null;
    private ?string $tspName = null;
    private ?string $userName = null;
    private ?string $cuid = null;

    private ?string $incidentNumber = null;
//    private \DateTimeImmutable $allocationDate;
    private ?string $comment = null;
    private ?string $oldComputer = null;

    public function getDiskSize(): ?string
    {
        return $this->diskSize;
    }

    public function setDiskSize(?string $diskSize): void
    {
        $this->diskSize = $diskSize;
    }

    public function getNewModel(): ?string
    {
        return $this->newModel;
    }

    public function setNewModel(?string $newModel): void
    {
        $this->newModel = $newModel;
    }

    public function getBios(): ?string
    {
        return $this->bios;
    }

    public function setBios(?string $bios): void
    {
        $this->bios = $bios;
    }

    public function getMasterDate(): DateTimeInterface
    {
        return $this->masterDate;
    }

    public function setMasterDate(DateTimeInterface $masterDate): void
    {
        $this->masterDate = $masterDate;
    }

    public function getNewSerialNumber(): ?string
    {
        return $this->newSerialNumber;
    }

    public function setNewSerialNumber(?string $newSerialNumber): void
    {
        $this->newSerialNumber = $newSerialNumber;
    }

    public function getTattooNumber(): ?string
    {
        return $this->tattooNumber;
    }

    public function setTattooNumber(?string $tattooNumber): void
    {
        $this->tattooNumber = $tattooNumber;
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

    public function getOldModel(): ?string
    {
        return $this->oldModel;
    }

    public function setOldModel(?string $oldModel): void
    {
        $this->oldModel = $oldModel;
    }

    public function getOldSerialNumber(): ?string
    {
        return $this->oldSerialNumber;
    }

    public function setOldSerialNumber(?string $oldSerialNumber): void
    {
        $this->oldSerialNumber = $oldSerialNumber;
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
    private ?string $oldModel = null;

    private ?string $oldSerialNumber = null;
    private ?string $symptom = null;

    public function getOldComputer(): ?string
    {
        return $this->oldComputer;
    }

    public function setOldComputer(string $oldComputer): static
    {
        $this->oldComputer = $oldComputer;

        return $this;
    }

    public function getNewComputer(): ?string
    {
        return $this->newComputer;
    }

    public function setNewComputer(string $newComputer): static
    {
        $this->newComputer = $newComputer;

        return $this;
    }
}
