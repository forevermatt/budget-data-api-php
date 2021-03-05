<?php

use app\features\helpers\BudgetDataApiClient;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Webmozart\Assert\Assert;

class FeatureContext implements Context
{
    private $budgetDataApiClient;

    public function __construct()
    {
        $this->budgetDataApiClient = new BudgetDataApiClient();
    }

    /**
     * @Given no accounts exist
     */
    public function noAccountsExist()
    {
        $existingAccounts = $this->budgetDataApiClient->listAccounts();
        Assert::isEmpty($existingAccounts);
    }

    /**
     * @When I add an account
     */
    public function iAddAnAccount()
    {
        throw new PendingException();
    }

    /**
     * @Then one account will exist
     */
    public function oneAccountWillExist()
    {
        throw new PendingException();
    }
}
