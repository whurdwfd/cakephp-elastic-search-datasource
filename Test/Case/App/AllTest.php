<?php
/**
 * AppTest will run all tests our app is ready for - add new tests as they come about
 *
 * @package default
 * @author David Kullmann
 */
class AllTest extends PHPUnit_Framework_TestSuite {

/**
 * suite method, defines tests for this suite.
 *
 * @return void
 */
	public static function suite() {

		$suite = new PHPUnit_Framework_TestSuite('All Recon App related class tests');
		
		$pluginTestPath = array('Plugin', 'Elastic', 'Test', 'Case');

		/* Datasource */
		$suite->addTestFile(APP . implode(DS, array_merge($pluginTestPath, array('Model', 'DataSource', 'ElasticSourceTest.php'))));

		/* Behaviors */
		$suite->addTestFile(APP . implode(DS, array_merge($pluginTestPath, array('Model', 'Behavior', 'IndexableBehaviorTest.php'))));
		
		return $suite;
	}
}