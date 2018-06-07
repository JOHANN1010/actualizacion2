<?php

	use PHPUnit\Framework\TestCase;
	use calculadora;

	final class resultado extends TestCase
	{

		public function testSuma()
		{

			$cal = new calculadora();
			$this->assertEquals(
				7,
				$cal->suma(3,4)
			);
		}

		public function testResta()
		{

			$cal = new calculadora();
			$this->assertEquals(
				2,
				$cal->resta(5,3)
			);
		}

        public function testMultiplicacion()
		{

			$cal = new calculadora();
			$this->assertEquals(
				8,
				$cal->multiplicacion(2,4)
			);
		}

		public function testDivision()
		{

			$cal = new calculadora();
			$this->assertEquals(
				5,
				$cal->divicion(10,2)
			);
		}

	}


  ?>