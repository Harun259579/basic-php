<?php
class Bankaccount
{
	private $balence;
	public function getbalence()
	{
		return $this->balence ;

	}
	public function deposit($amount)
	{
		if($amount>0)
		{
			return $this->balence+=$amount;
		}
		return $this;
		
	}

	public function checkoneYear()
	{
		$datetime = new DateTime($this->date);
		$currentdatetime = new DateTime();

		$intervel = $currentdatetime->diff($datetime);// one year hoisa kina ta check
		if($intervel->y>1 ||($intervel->y==1 && $intervel->m>0) || ($intervel->y==1 && $intervel->m==0 && $intervel->d>0) )
		{
			return true;


		}
		else
		{
			return false;

		}
	}
}


class Savingaccount extends Bankaccount
{

	private $interestrate;
	public $date="2024-6-12";

	public function addcharge()
	{
		if($this->checkoneYear())
		{
			if($this->getbalence()>200)
			{
				
				$newbalence=($this->getbalence()-200);
				echo " Your Annual Amount is BDT.200 Has Been adjusted from your account"."Your Current Balence ".$newbalence."<br>";
			}
			else
			{

			}

		}

	}

	public function setInterest($interestrate)
	{
		$this->interestrate =$interestrate;

	}
	function addinterest()
	{
		$ineterest= $this->interestrate * $this->getbalence();
		$this->deposit($ineterest);
	}
}



?>