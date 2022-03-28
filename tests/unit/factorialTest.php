<?php
     class factorialTest extends PHPUnit\Framework\TestCase {
		public	function test_factorial_of_0(){


				$this->assertTrue(

						factorial(0)===0


					);

}			



	     public  function test_factorial_of_1(){


                                $this->assertTrue(

                                                factorial(1)===1


                                        );

 }                       


     public  function test_factorial_of_5(){


                                $this->assertTrue(

                                                factorial(5)===120


                                        );

  }
	    public  function test_factorial_of_false(){


                                $this->assertTrue(

                                                factorial(false)===null


                                        );

  }
    public  function test_factorial_of_oneandhalf(){


                                $this->assertTrue(

                                                factorial(1.5)===null


                                        );

  }    public  function test_factorial_of_negative3(){


                                $this->assertTrue(

                                                factorial(-3)===null


                                        );

  }    public  function test_factorial_of_abc(){


                                $this->assertTrue(

                                                factorial("abc")===null


                                        );

  }
    public  function test_factorial_of_n(){
		$n=4;

                                $this->assertTrue(

                                                factorial($n)==factorial($n-1)*$n


                                        );

  }                      


     }
