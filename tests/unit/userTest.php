<?php
	class userTest extends PHPUnit\Framework\TestCase {


		private static  $user;
	public static  function  setUpBeforeClass(){

		self::$user=new user("mohamed","mohamednabil@yahoo.com");
	}
                public  function test_name_default(){


                                $this->assertTrue(

                                               self:: $user->name()=="mohamed"


                                        );
		}
		 public  function test_name_valuse(){


                                $this->assertTrue(

                                               self:: $user->name("samy")=="samy"


                                        );

}
	 public  function test_email_default(){


                                $this->assertTrue(

                                               self:: $user->email()=="mohamednabil@yahoo.com"


                                        );
}
	 public  function test_email_value(){


                                $this->assertTrue(

                                               self:: $user->name("samy@gmail.com")=="samy@gmail.com"


                                        );
}



public static function  tearDownAfterClass(){
	echo "test is done \n";
}









}
