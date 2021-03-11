<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use BudgetData\ApiClient\BudgetDataApiClient;
use Webmozart\Assert\Assert;

class FeatureContext implements Context
{
    /** @var BudgetDataApiClient */
    private $client;

    public function __construct()
    {
        $this->client = new BudgetDataApiClient('http://localhost');
    }

    /**
     * @Given no accounts exist
     */
    public function noAccountsExist()
    {
        $existingAccounts = $this->client->accountsGet();
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
