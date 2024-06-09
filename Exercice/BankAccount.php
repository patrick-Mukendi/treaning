<?php
final class BankAccount
{
    private float $balance = 0;
    private readonly string $accountNumber;

    private function __construct(string $accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

    public static function create(string $accountNumber): self
    {
        if (empty($accountNumber)) 
        {
            throw new \Exception("le numéro du compte ne doit pas être vide");
        }
        return new self($accountNumber);
    }

    public function deposite(float $amount): void
    {
        if ($amount <= 0) 
        {
            throw new \Exception("Votre depot doit être >= 0");
        }
        $this->balance = $amount;
    }

    public function withdraw(float $amount): void
    {
        if ($amount > $this->balance) 
        {
            throw new \Exception("vous ne pouvez retire plus que votre balance");
        }
        $this->balance -= $amount;
    }

    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}
