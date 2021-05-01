Feature: Monthly-budget-related API endpoints

  Scenario: Adding a monthly budget for a category
    Given a category exists
      But it has no monthly budget yet
    When I set that category's monthly budget to:
      | budgeted | remaining | refilled |
      |     9000 |      9000 | 2021-05  |
    Then that category will have a monthly budget of $90
      And it will have $90 remaining
      And it will have been refilled in "2021-05"

  Scenario: Changing the monthly budget for a category
    Given a category exists
      And it has a monthly budget of $90
    When I change that category's monthly budget to $100
    Then that category will have a monthly budget of $100

  Scenario: Updating (such as when refilling) a category's budget
    Given a category exists
      And it has a monthly budget of $90
      And it has $50 remaining
      And it was refilled in "2021-04"
    When I update that category's monthly budget to:
      | budgeted | remaining | refilled |
      |     9000 |     14000 | 2021-05  |
    Then that category will have a monthly budget of $90
      And it will have $140 remaining
      And it will have been refilled in "2021-05"

  Scenario: Get a list of all the category budgets
    Given several category budgets exist
    When I get the list of category budgets
    Then the result should contain that same list of category budgets

  Scenario: Deleting a category's monthly budget
    Given several category budgets exist
    When I delete one of those category budgets
    Then the result should contain the remaining category budgets
      And the result should NOT contain the deleted category budget
