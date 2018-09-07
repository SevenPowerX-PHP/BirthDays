<?php
	/**
	 * Created by PhpStorm.
	 * User: splaa
	 * Date: 07.09.18
	 * Time: 10:57
	 */
	
	namespace Splx\Dates;
	
	
	/**
	 * @property  birthDate
	 */
	class BirthDays
	{
		private $birthDate;
		private $todayDate;
		
		/**
		 * BirthDays constructor.
		 * @param $birthDate
		 */
		public function __construct($birthDate)
		{
			$this->birthDate = $birthDate;
			$this->todayDate = date("Y-m-d");
		}
		
		public function findTotalDays()
		{
			$birthTime = strtotime($this->birthDate);
			$todayTime = strtoTime($this->todayDate);
			
			$totalSecs = $todayTime - $birthTime;
			$totalDays = floor($totalSecs / 3600 / 24);
			
			return $totalDays;
		}
	}