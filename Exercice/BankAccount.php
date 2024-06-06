<?php
final class BankAccount
{
	private float $balance=0.0;
    private readonly ?string $accountNumber;

    private function __construct 

	public function getBalance(): int 
    {
        return $this -> balance;
    }

    public function deposer(int $amount, string $accountNumber):int|string
    {
        $this -> accoutNumber = $accountNumber;
        
        if($amount>0)
        {
          return   $this -> balance=$amount;
        }
        return 'Valeur invalide';
    }

    public function retrait (int $accountNumber, $amount): int|string
    {
        $this -> accountNumber = $accountNumber;

        if($balance>$amount)
        {
            return $balance-$amount;
        }
        return 'Le Montant est trop Elevé ';
    }
}
