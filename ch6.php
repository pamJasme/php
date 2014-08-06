<?php     

class calcu
{
	public $num1 = 10;
	public $num2 = 10;
	public $sum;
	public $prod;
	
	function add()
	{
		
		$sum=$this->num1 + $this->num2;
		return $sum;
	}

	function sub()
	{
		$diff=$this->num1 - $this->num2;
		return $diff;
	}

	function mul()
	{
		$prod=$this->num1 * $this->num2;
		return $prod;
	}

	function div()
	{
		$quo=$this->num1 / $this->num2;
		return $quo;
	}
}

class advCalcu extends calcu
{
	function mod($rsum, $rprod)
	{
		$mod=$rsum % $rprod;
		return $mod;	
	}
}

$val=new calcu();
$val2 = new advCalcu();
echo "The sum is: ".$val->add()."<br>";
$rsum =$val->add();
echo $rsum;
echo "The difference is: ".$val->sub()."<br>";
echo "The product is: ".$val->mul()."<br>";
$rprod=$val->mul();
echo "The quotient is: ".$val->div()."<br>";
echo "The modulus is: ".$val2->mod($rsum, $rprod)."<br>";
$var= 20%100;
echo "modulus is: $var";
?> 
