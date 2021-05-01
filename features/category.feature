Feature: Category-related API endpoints

  Scenario: Adding a category
    Given no categories exist
    When I add a category
    Then one category will exist

  Scenario: Get a list of all the categories
    Given several categories exist
    When I get the list of categories
    Then the result should contain that same list of categories

  Scenario: Deleting a category
    Given several categories exist
    When I delete one of those categories
    Then the result should contain the remaining categories
      And the result should NOT contain the deleted category

  Scenario: Renaming a category
    Given a category exists named "Cars"
    When I rename that category to "Auto"
    Then that category's name should now be "Auto"
