<?php 
$I = new FunctionalTester($scenario);
$I->am('A cms admin');
$I->wantTo('Create a new section');

//When

$I->amOnPage('admin/sections');

//And
$I->click('Add a new section');

//Then
$I->seeCurrentUrlEquals('/admin/sections/create');
$I->see('New Sections', 'h1');

//When
$I->fillField('Name', 'Our Company');
$I->fillField('Slug URL', 'Our Company');
$I->fillField('type', 'page');

//And

$I->click('Create Section');


//Then
$I->seeCurrentUrlEquals('/admin/sections/1');
$I->see('Our Company', 'h1');
$I->seeRecord('sections', ['name' => 'Our Company']);
