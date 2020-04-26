# Your installation or use of this SugarCRM file is subject to the applicable
# terms available at
# http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
# If you do not agree to all of the applicable terms or do not have the
# authority to bind the entity as an authorized representative, then do not
# install or use this SugarCRM file.
#
# Copyright (C) SugarCRM Inc. All rights reserved.

@local @regression @userManagement @extended
Feature: User management - regression
  Regression testing - verify that existing functionality works as expected

  Scenario: Password tab on user profile
    Given I am on "/"
    When I wait until the loading is completed
    And I fill in "admin" for "username"
    And I fill in "admin" for "password"
    And I press "login_button"
    And I wait for the page to be loaded
    And I wait until the loading is completed
    And I skip login wizard
    Then I should not see "You must specify a valid username and password."
    Then I should see "Home Dashboard"
    When I click "#userList"
    And I click ".profileactions-profile"
    When I wait for the page to be loaded
    And I wait until the loading is completed
    And I switch to BWC
    And I click "#edit_button"
    And I wait for the page to be loaded
    And I wait for the element "#EditView_tabs"
    Then I should see "Password" in the "#EditView_tabs ul" element
    And I logout

  Scenario: User create link is available and the user creation page opens
    Given I am on "/"
    When I wait until the loading is completed
    And I fill in "admin" for "username"
    And I fill in "admin" for "password"
    And I press "login_button"
    And I wait for the page to be loaded
    And I wait until the loading is completed
    And I skip login wizard
    And I close alerts
    And I go to administration
    And I follow "User Management"
    When I switch to sidecar
    And I click "button[aria-label='Users - More']"
    And I wait for the element "a[data-navbar-menu-item=LNK_NEW_USER]"
    And I follow "Create New User"
    And I wait for the page to be loaded
    And I wait until the loading is completed
    When I switch to BWC
    And I wait for the element "input[name=user_name]"
    Then I should see "Create"
    And I logout

  Scenario: Employee create link is available and the employee creation page opens
    Given I am on "/"
    When I wait until the loading is completed
    And I fill in "admin" for "username"
    And I fill in "admin" for "password"
    And I press "login_button"
    And I wait for the page to be loaded
    And I wait until the loading is completed
    And I skip login wizard
    And I close alerts
    When I click "#userList"
    And I wait for the element ".profileactions-employees"
    And I click ".profileactions-employees"
    And I wait for the page to be loaded
    And I wait until the loading is completed
    And I switch to BWC
    And I switch to sidecar
    When I click "button[aria-label='Employees - More']"
    And I wait for the element "a[data-navbar-menu-item=LNK_NEW_EMPLOYEE]"
    And I follow "Create Employee"
    And I wait for the page to be loaded
    And I wait until the loading is completed
    When I switch to BWC
    And I wait for the element "select[name=employee_status]"
    Then I should see "Employee Status"
    And I logout

  Scenario: User copy link is available
    Given I am on "/"
    When I wait until the loading is completed
    And I fill in "admin" for "username"
    And I fill in "admin" for "password"
    And I press "login_button"
    And I wait for the page to be loaded
    And I wait until the loading is completed
    And I skip login wizard
    And I close alerts
    And I go to administration
    And I follow "User Management"
    And I switch to BWC
    And I follow "admin"
    And I switch to BWC
    When I click "span[class=ab]"
    Then I wait for the element "#duplicate_button"
    And I logout

  Scenario: Employee copy link is available
    Given I am on "/"
    When I wait until the loading is completed
    And I fill in "admin" for "username"
    And I fill in "admin" for "password"
    And I press "login_button"
    And I wait for the page to be loaded
    And I wait until the loading is completed
    And I skip login wizard
    And I close alerts
    When I click "#userList"
    And I wait for the element ".profileactions-employees"
    And I click ".profileactions-employees"
    And I switch to BWC
    And I follow "Administrator"
    And I switch to BWC
    When I click "span[class=ab]"
    Then I wait for the element "#duplicate_button"
    And I logout
