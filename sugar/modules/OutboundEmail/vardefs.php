<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$dictionary['OutboundEmail'] = [
    'table' => 'outbound_email',
    'hidden_to_role_assignment' => true,
    'acls' => [
        'SugarACLOutboundEmail' => true,
    ],
    'fields' => [
        'id' => [
            'name' => 'id',
            'vname' => 'LBL_ID',
            'type' => 'id',
            'required' => true,
            'reportable' => false,
            'mandatory_fetch' => true,
        ],
        'name' => [
            'name' => 'name',
            'vname' => 'LBL_NAME',
            'type' => 'name',
            'dbType' => 'varchar',
            'len' => 255,
            'required' => true,
            'reportable' => false,
        ],
        'type' => [
            'name' => 'type',
            'vname' => 'LBL_TYPE',
            'type' => 'varchar',
            'len' => 15,
            'required' => true,
            'default' => 'user',
            'reportable' => false,
            'mandatory_fetch' => true,
            'readonly' => true,
        ],
        'user_id' => [
            'name' => 'user_id',
            'vname' => 'LBL_USER_ID',
            'type' => 'id',
            'required' => true,
            'reportable' => false,
            'mandatory_fetch' => true,
            'readonly' => true,
        ],
        'email_addresses' => [
            'name' => 'email_addresses',
            'relationship' => 'outbound_email_email_addresses',
            'source' => 'non-db',
            'type' => 'link',
            'vname' => 'LBL_EMAIL_ADDRESSES',
        ],
        'email_address_id' => [
            'name' => 'email_address_id',
            'duplicate_merge' => 'disabled',
            'id_name' => 'email_address_id',
            'link' => 'email_addresses',
            'massupdate' => false,
            'module' => 'EmailAddresses',
            'reportable' => false,
            'rname' => 'id',
            'table' => 'email_addresses',
            'type' => 'id',
            'vname' => 'LBL_EMAIL_ADDRESS_ID',
        ],
        'email_address' => [
            'name' => 'email_address',
            'id_name' => 'email_address_id',
            'link' => 'email_addresses',
            'module' => 'EmailAddresses',
            'required' => true,
            'rname' => 'email_address',
            'source' => 'non-db',
            'table' => 'email_addresses',
            'type' => 'relate',
            'vname' => 'LBL_EMAIL_ADDRESS',
        ],
        'reply_to_name' => [
            'name' => 'reply_to_name',
            'vname' => 'LBL_REPLY_TO_NAME',
            'type' => 'name',
            'dbType' => 'varchar',
            'len' => 255,
            'reportable' => false,
            'dependency'=> 'not(equal($type, "system"))',
        ],
        'reply_to_email_addresses' => [
            'name' => 'reply_to_email_addresses',
            'relationship' => 'outbound_email_reply_to_email_addresses',
            'source' => 'non-db',
            'type' => 'link',
            'vname' => 'LBL_REPLY_TO_EMAIL_ADDRESSES',
        ],
        'reply_to_email_address_id' => [
            'name' => 'reply_to_email_address_id',
            'duplicate_merge' => 'disabled',
            'id_name' => 'reply_to_email_address_id',
            'link' => 'reply_to_email_addresses',
            'massupdate' => false,
            'module' => 'EmailAddresses',
            'reportable' => false,
            'rname' => 'id',
            'table' => 'email_addresses',
            'type' => 'id',
            'vname' => 'LBL_REPLY_TO_EMAIL_ADDRESS_ID',
        ],
        'reply_to_email_address' => [
            'name' => 'reply_to_email_address',
            'id_name' => 'reply_to_email_address_id',
            'link' => 'reply_to_email_addresses',
            'module' => 'EmailAddresses',
            'rname' => 'email_address',
            'source' => 'non-db',
            'table' => 'email_addresses',
            'type' => 'relate',
            'vname' => 'LBL_REPLY_TO_EMAIL_ADDRESS',
            'dependency'=> 'not(equal($type, "system"))',
        ],
        'mail_sendtype' => [
            'name' => 'mail_sendtype',
            'vname' => 'LBL_MAIL_SENDTYPE',
            'type' => 'varchar',
            'len' => 8,
            'required' => true,
            'default' => 'SMTP',
            'reportable' => false,
        ],
        'mail_smtptype' => [
            'name' => 'mail_smtptype',
            'vname' => 'LBL_EMAIL_PROVIDER',
            'type' => 'enum',
            'options' => 'mail_smtptype_options',
            'len' => 20,
            'required' => true,
            'default' => 'other',
            'reportable' => false,
        ],
        'mail_smtpserver' => [
            'name' => 'mail_smtpserver',
            'vname' => 'LBL_MAIL_SMTPSERVER',
            'type' => 'varchar',
            'len' => 100,
            'required' => false,
            'reportable' => false,
            'mandatory_fetch' => true,
        ],
        'mail_smtpport' => [
            'name' => 'mail_smtpport',
            'vname' => 'LBL_MAIL_SMTPPORT',
            'type' => 'int',
            'len' => 5,
            'default' => 465,
            'reportable' => false,
            'disable_num_format' => true,
        ],
        'mail_smtpuser' => [
            'name' => 'mail_smtpuser',
            'vname' => 'LBL_MAIL_SMTPUSER',
            'type' => 'varchar',
            'len' => 100,
            'reportable' => false,
            'mandatory_fetch' => true,
        ],
        'mail_smtppass' => [
            'name' => 'mail_smtppass',
            'vname' => 'LBL_MAIL_SMTPPASS',
            'type' => 'encrypt',
            'len' => 100,
            'reportable' => false,
            'duplicate_on_record_copy' => 'no',
            'mandatory_fetch' => true,
        ],
        'mail_smtpauth_req' => [
            'name' => 'mail_smtpauth_req',
            'vname' => 'LBL_MAIL_SMTPAUTH_REQ',
            'type' => 'bool',
            'default' => 0,
            'reportable' => false,
            'mandatory_fetch' => true,
        ],
        'mail_smtpssl' => [
            'name' => 'mail_smtpssl',
            'vname' => 'LBL_MAIL_SMTPSSL',
            'type' => 'enum',
            'dbType' => 'int',
            'options' => 'email_settings_for_ssl',
            'len' => 1,
            'default' => 1,
            'reportable' => false,
        ],
        'deleted' => [
            'name' => 'deleted',
            'vname' => 'LBL_DELETED',
            'type' => 'bool',
            'default' => '0',
            'reportable' => false,
            'duplicate_on_record_copy' => 'no',
        ],
    ],
    'indices' => [
        [
            'name' => 'outbound_email_pk',
            'type' => 'primary',
            'fields' => ['id'],
        ],
        [
            'name' => 'oe_user_id_idx',
            'type' => 'index',
            'fields' => ['id', 'user_id'],
        ],
    ],
    'relationships' => [
        'outbound_email_email_addresses' => [
            'lhs_module' => 'EmailAddresses',
            'lhs_table' => 'email_addresses',
            'lhs_key' => 'id',
            'rhs_module' => 'OutboundEmail',
            'rhs_table' => 'outbound_email',
            'rhs_key' => 'email_address_id',
            'relationship_type' => 'one-to-many',
        ],
        'outbound_email_reply_to_email_addresses' => [
            'lhs_module' => 'EmailAddresses',
            'lhs_table' => 'email_addresses',
            'lhs_key' => 'id',
            'rhs_module' => 'OutboundEmail',
            'rhs_table' => 'outbound_email',
            'rhs_key' => 'reply_to_email_address_id',
            'relationship_type' => 'one-to-many',
        ],
    ],
    'uses' => [
        'team_security',
    ],
    'ignore_templates' => [
        'default',
    ],
];

VardefManager::createVardef('OutboundEmail', 'OutboundEmail');
