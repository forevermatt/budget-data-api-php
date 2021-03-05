Feature: Account-related API endpoints

  Scenario: Adding an account
    Given no accounts exist
    When I add an account
    Then one account will exist
