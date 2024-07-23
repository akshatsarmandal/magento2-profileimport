Import Customer with cron command in CSV or JSON format
 - Unzip the zip file in `app/code/Vml/CustomerImport`
 - Enable the module by running `php bin/magento module:enable Vml_CustomerImport`

### Type 2: Composer

 - Install the module composer by running `composer require vml/magento2-module-customerimport`
 - Enable the module by running `php bin/magento module:enable Vml_CustomerImport`
 - Run Magento commands by running

*    `php bin/magento customer:import --help`
    
*    Description:
      Customer Import via CSV & JSON

*    Usage:
      customer:import <profile> <source>

    bin/magento customer:import sample-csv sample.csv
    bin/magento customer:import sample-json sample.json
    
