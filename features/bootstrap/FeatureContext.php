<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use BudgetData\ApiClient\BudgetDataApiClient;
use BudgetData\ApiClient\Model\Account;
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
        $account = new Account([
            'uuid' => '886b2197-660c-40d3-95b7-ab52681d5233',
            'name' => 'Credit Card'
        ]);
        $this->client->accountsPost($account);
    }

    /**
     * @Then one account will exist
     */
    public function oneAccountWillExist()
    {
        throw new PendingException();
    }
}
