<?php
/**
 * Copyright © VML All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Vml\CustomerImport\Api;

interface CustomerImportManagementInterface
{
    //success message
    public const SUCCESS_MESSAGE = "New Customer Added";
    
    //error messages
    public const ERROR_NO_RECORD_EXISTS = "No Record Found in profile. Please make sure the source has valid records.";

    public const ERROR_INVALID_PROFILE = "This profile is invalid. The profiles that are available is ";
   
    //column mapping
    public const COLUMN_FIRST_NAME = "fname";

    public const COLUMN_LAST_NAME = "lname";

    public const COLUMN_EMAIL_ADDRESS = "emailaddress";

    /**
     * Import customers from the source of profile
     *
     * @param string $profile
     * @param string $profile_source
     * @return string
    */

    public function importCustomers($profile, $profile_source);

     /**
      * Get Profile
      *
      * @param string $profile
      * @return Object
      */

    public function getProfile($profile);
}