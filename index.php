<?php

// Require the correct variable type to be used (no auto-converting)
declare (strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Create new session
session_start();

// Load you classes
require_once 'config.php';
require_once 'classes/DatabaseManager.php';
require_once 'classes/RecordRepository.php';

$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect();

// This example is about a Pokémon card collection
// Update the naming if you'd like to work with another collection
$RecordRepository = new RecordRepository($databaseManager);
$records = $RecordRepository->get();
$_SESSION['records'] = $records;

// Get the current action to execute
// If nothing is specified, it will remain empty (home should be loaded)
$action = $_GET['action'] ?? null;

// Load the relevant action
// This system will help you to only execute the code you want, instead of all of it (or complex if statements)
switch ($action) {
	case 'create':
		require 'create.php';
		create($RecordRepository);
		break;
	default:
		overview();
		break;
}

function overview()
{
	// Load your view
	// Tip: you can load this dynamically and based on a variable, if you want to load another view
	require 'overview.php';
}

function create($RecordRepository)
{
	$RecordRepository->create();
}