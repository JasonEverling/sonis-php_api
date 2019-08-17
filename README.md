# Sonis API in PHP
Translated Sonis SOAP API from Coldfuaion to PHP.

We needed an easy way to integrate and develop new plugins for our website (wordpress) and our lms (moodle) so this was created as a framework to build those on top of.

Classes were created from /CFIDE/componentutils/cfcexplorer.cfc in order to obtain un-documented functions, required params, and additional api endpoints.

Many more methods exist in the Sonis API, those are being added as needed.

Documentation wil be added to the github wiki soon, mostly generated from phpdoc.

## Requirements
PHP: 7.x, it should work with 5.6+, code inspection passes but have not tested.

PHP Extensions: php_soap and php_curl

## Configure
Change the settings in section 1. in sonis-sample.php and then rename to sonis.php

## Usage
Using this framework inside your package you just need to include the loader, sonis.php,
````
require __DIR__ . '/sonis/sonis.php';
````

Now you can make requests, a simple example to get all the details of a person, each component::method(has documented arguments).

````
$soc_sec = 'the persons id';
$args = biographic::namesearch($soc_sec);
$request = $api->run($args);
````
## Notes 

##### _To-do_:
Create namspaces to avoid collisions

##### _Values_:
Many of the methods might require almost every field to be sent even if null, searches on the other hand can usually take just one value. If you send an update to a record and do not specify all the current fields then it will erase the fields in Sonis. For an update request, it is best to run a get or search request on the object you are updating first to prefill all the current variables then however you are updating the content replace those values and then run the update method.

For example, if you want to update the address for a given person you would run,

````
address::addressSearch($soc_sec, $preferred);
````

then for each returned value, store them as variables so you can then run,

````
address::update_address($soc_sec, $add_add2, $add_addr, $cell_phone, $city, $country, $county_cod, $e_mail, $fax, $phone, $st_addr, $state, $work_phone, $zip, $cell_provider, $text_me);
```` 

with all the values from your search and then you can replace the values that need to be updated.

##### _Errors_:
The SOAP API does not do a good job of reporting errors as an http error code and instead returns a bunch of html as a string. Although there is a function that will log the error and print an error message, the only way to figure the cause is to read your php and/or coldfusion exception logs.

##### _SQL_:
As always with SQL, be careful with your statements. Although Sonis has it documented as 'READ ONLY' it allows updates and drops. The calling function will remove ';' from any statements but you will need to put in your own sql protections within your client.

##### _Tests_:
The tests directory has a few tests you can run, each section documented. We use PHPUnit/Behat on our end for specific use cases and you could also create your own. Eventually I will create some public tests to run.
