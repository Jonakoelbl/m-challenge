<?php

namespace App\Enums;

/**
 * Roles that a User can have.
 */
enum Roles: string
{
    case MASLOW_ADMIN = 'maslow_admin';
    case COMPANY_ADMIN = 'company_admin';
    case COMPANY_EMPLOYEE = 'company_employee';
}
