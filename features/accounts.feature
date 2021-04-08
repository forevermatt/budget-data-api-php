Feature: Account-related API endpoints

  Scenario: Adding an account
    Given no accounts exist
    When I add an account
    Then one account will exist

  Scenario: Get a list of all the accounts
    Given several accounts exist
    When I get the list of accounts
    Then the result should contain that same list of accounts

  Scenario: Deleting an account
    Given several accounts exist
    When I delete one of those accounts
    Then the result should contain the remaining accounts
      And the result should NOT contain the deleted account

  Scenario: Renaming an account
    Given an account exists named "Credit Card"
    When I rename that account to "Debit Card"
    Then that account's name should now be "Debit Card"
