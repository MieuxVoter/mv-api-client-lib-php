# MvApi

This is a **deliberation service** using **majority judgment** polling.
It's **libre software** ([source](https://github.com/mieuxvoter)) made and maintained by [MieuxVoter.fr](https://mieuxvoter.fr).
You're browsing the API documentation and sandbox.

## Use one of the known clients

- https://cli.mieuxvoter.fr


## Try it out the hard way

### Create an account

You will need a user account to interact with polls.
Head to **Registration** → `POST /users` below.
Click _Try it out_, set your desired credentials, and execute the query.
Scroll down to see the response.

### Authenticate

Use your credentials in the **Login** → `POST /_jwt`, and the API will return a Json Web Token valid for one hour.
Copy the token (not the whole response, and without quotes) in the field behind the `Authorize 🔒` button,
prefixed by the word `Bearer `.

It should look like: `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ…`

### Create a poll

**Poll** → `POST /polls`

Here is an example of what you could send:

```
{
  \"slug\": \"france-presidence-2027\",
  \"scope\": \"public\",
  \"subject\": \"Présidentielle Française 2027\",
  \"proposals\": [
    {
      \"title\": \"Continuer le néolibéralisme\"
    },
    {
      \"title\": \"Ne pas prendre plus à la nature que ce qu'elle est capable de renouveler\"
    },
    {
      \"title\": \"Former une Assemblée Constituante (Liquide)\"
    }
  ],
  \"grades\": [
    { \"name\": \"À Rejeter\", \"level\": 0 },
    { \"name\": \"Insuffisant\", \"level\": 1 },
    { \"name\": \"Passable\", \"level\": 2 },
    { \"name\": \"Assez Bien\", \"level\": 3 },
    { \"name\": \"Bien\", \"level\": 4 },
    { \"name\": \"Très Bien\", \"level\": 5 },
    { \"name\": \"Excellent\", \"level\": 6 }
  ]
}
```

Keep the response, you'll need the uuids.

### Invite people to private polls

> TODO: document invitation generation

### Submit judgments

**Ballot** → `POST /polls/{pollId}/proposals/{proposalId}/ballots`

One request per proposal, for now.  We plan on making an endpoint to submit them all at once.

### Collect the results

**Result** → `GET /polls/{id}/result`

## Use a generated client library

- for [php](https://github.com/MieuxVoter/mv-api-client-lib-php)
- for [typescript](https://github.com/MieuxVoter/mv-api-client-lib-typescript)
- …

There are clients we can generate for most languages.
Get in touch if you'd like one in particular!
Or clone this project and use `bin/generate-client.bash -t whatever`.



## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/MieuxVoter/mv-api-client-lib-php.git"
    }
  ],
  "require": {
    "MieuxVoter/mv-api-client-lib-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/MvApi/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\AdministrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getUserCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationApi->getUserCollection: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://oas.mieuxvoter.fr*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdministrationApi* | [**getUserCollection**](docs/Api/AdministrationApi.md#getusercollection) | **GET** /users | Retrieves the collection of Users.
*BallotApi* | [**apiPollsProposalsBallotsGetSubresource**](docs/Api/BallotApi.md#apipollsproposalsballotsgetsubresource) | **GET** /polls/{pollId}/proposals/{proposalId}/ballots | Retrieves the collection of Ballot resources.
*BallotApi* | [**apiProposalsBallotsGetSubresource**](docs/Api/BallotApi.md#apiproposalsballotsgetsubresource) | **GET** /proposals/{id}/ballots | Retrieves the collection of Ballot resources.
*BallotApi* | [**deleteBallotItem**](docs/Api/BallotApi.md#deleteballotitem) | **DELETE** /ballots/{id} | Removes the Ballot resource.
*BallotApi* | [**getBallotItem**](docs/Api/BallotApi.md#getballotitem) | **GET** /ballots/{id} | Retrieves a Ballot resource.
*BallotApi* | [**postBallotCollection**](docs/Api/BallotApi.md#postballotcollection) | **POST** /polls/{pollId}/proposals/{proposalId}/ballots | Creates a Ballot resource.
*GradeApi* | [**apiPollsGradesGetSubresource**](docs/Api/GradeApi.md#apipollsgradesgetsubresource) | **GET** /polls/{id}/grades | Retrieves the collection of Grade resources.
*GradeApi* | [**getGradeItem**](docs/Api/GradeApi.md#getgradeitem) | **GET** /grades/{id} | Retrieves a Grade resource.
*InvitationApi* | [**getForPollInvitationCollection**](docs/Api/InvitationApi.md#getforpollinvitationcollection) | **GET** /polls/{id}/invitations | Retrieves the collection of Invitation resources.
*InvitationApi* | [**getInvitationCollection**](docs/Api/InvitationApi.md#getinvitationcollection) | **GET** /invitations | Retrieves the collection of Invitation resources.
*InvitationApi* | [**getInvitationItem**](docs/Api/InvitationApi.md#getinvitationitem) | **GET** /invitations/{id} | Retrieves a Invitation resource.
*LoginApi* | [**getMyself**](docs/Api/LoginApi.md#getmyself) | **GET** /me | Gets information about the authenticating user.
*LoginApi* | [**postCredentialsItem**](docs/Api/LoginApi.md#postcredentialsitem) | **POST** /_jwt | Returns an authentication Token from login Credentials.
*PollApi* | [**apiPollsGradesGetSubresource**](docs/Api/PollApi.md#apipollsgradesgetsubresource) | **GET** /polls/{id}/grades | Retrieves the collection of Grade resources.
*PollApi* | [**apiPollsProposalsGetSubresource**](docs/Api/PollApi.md#apipollsproposalsgetsubresource) | **GET** /polls/{id}/proposals | Retrieves the collection of Proposal resources.
*PollApi* | [**deletePollItem**](docs/Api/PollApi.md#deletepollitem) | **DELETE** /polls/{id} | Removes the Poll resource.
*PollApi* | [**getForPollResultItem**](docs/Api/PollApi.md#getforpollresultitem) | **GET** /polls/{id}/result | Gets the result of a poll
*PollApi* | [**getPollCollection**](docs/Api/PollApi.md#getpollcollection) | **GET** /polls | Retrieves the collection of Poll resources.
*PollApi* | [**getPollItem**](docs/Api/PollApi.md#getpollitem) | **GET** /polls/{id} | Retrieves a Poll resource.
*PollApi* | [**postPollCollection**](docs/Api/PollApi.md#postpollcollection) | **POST** /polls | Creates a Poll resource.
*ProposalApi* | [**apiPollsProposalsBallotsGetSubresource**](docs/Api/ProposalApi.md#apipollsproposalsballotsgetsubresource) | **GET** /polls/{pollId}/proposals/{proposalId}/ballots | Retrieves the collection of Ballot resources.
*ProposalApi* | [**apiPollsProposalsGetSubresource**](docs/Api/ProposalApi.md#apipollsproposalsgetsubresource) | **GET** /polls/{id}/proposals | Retrieves the collection of Proposal resources.
*ProposalApi* | [**apiProposalsBallotsGetSubresource**](docs/Api/ProposalApi.md#apiproposalsballotsgetsubresource) | **GET** /proposals/{id}/ballots | Retrieves the collection of Ballot resources.
*ProposalApi* | [**getProposalItem**](docs/Api/ProposalApi.md#getproposalitem) | **GET** /proposals/{id} | Retrieves a Proposal resource.
*ProposalApi* | [**postProposalCollection**](docs/Api/ProposalApi.md#postproposalcollection) | **POST** /polls/{id}/proposals | Creates a Proposal resource.
*RegistrationApi* | [**postUserCollection**](docs/Api/RegistrationApi.md#postusercollection) | **POST** /users | Registers a new User.
*ResultApi* | [**getForPollResultItem**](docs/Api/ResultApi.md#getforpollresultitem) | **GET** /polls/{id}/result | Gets the result of a poll
*ToolsApi* | [**getJsonResultFromTally**](docs/Api/ToolsApi.md#getjsonresultfromtally) | **GET** /{tally}.json | Resolves the provided tally.
*ToolsApi* | [**getSvgMeritProfileFromTally**](docs/Api/ToolsApi.md#getsvgmeritprofilefromtally) | **GET** /render/merit-profile.svg | Generates a merit profile as SVG of the provided tally.
*UserApi* | [**deleteUserItem**](docs/Api/UserApi.md#deleteuseritem) | **DELETE** /users/{id} | Removes the User resource.
*UserApi* | [**getMyself**](docs/Api/UserApi.md#getmyself) | **GET** /me | Gets information about the authenticating user.
*UserApi* | [**getUserCollection**](docs/Api/UserApi.md#getusercollection) | **GET** /users | Retrieves the collection of Users.
*UserApi* | [**getUserItem**](docs/Api/UserApi.md#getuseritem) | **GET** /users/{id} | Gets information about a User.
*UserApi* | [**postCredentialsItem**](docs/Api/UserApi.md#postcredentialsitem) | **POST** /_jwt | Returns an authentication Token from login Credentials.
*UserApi* | [**postUserCollection**](docs/Api/UserApi.md#postusercollection) | **POST** /users | Registers a new User.
*UserApi* | [**putUserItem**](docs/Api/UserApi.md#putuseritem) | **PUT** /users/{id} | Updates information about a User.

## Models

- [Ballot](docs/Model/Ballot.md)
- [BallotCreate](docs/Model/BallotCreate.md)
- [BallotCreated](docs/Model/BallotCreated.md)
- [BallotJsonld](docs/Model/BallotJsonld.md)
- [BallotJsonldCreate](docs/Model/BallotJsonldCreate.md)
- [BallotJsonldCreated](docs/Model/BallotJsonldCreated.md)
- [BallotJsonldRead](docs/Model/BallotJsonldRead.md)
- [BallotRead](docs/Model/BallotRead.md)
- [Credentials](docs/Model/Credentials.md)
- [GradeCreate](docs/Model/GradeCreate.md)
- [GradeJsonldCreate](docs/Model/GradeJsonldCreate.md)
- [GradeJsonldRead](docs/Model/GradeJsonldRead.md)
- [GradeRead](docs/Model/GradeRead.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse2002](docs/Model/InlineResponse2002.md)
- [InlineResponse2003](docs/Model/InlineResponse2003.md)
- [InlineResponse2004](docs/Model/InlineResponse2004.md)
- [InlineResponse2005](docs/Model/InlineResponse2005.md)
- [InlineResponse200HydraSearch](docs/Model/InlineResponse200HydraSearch.md)
- [InlineResponse200HydraSearchHydraMapping](docs/Model/InlineResponse200HydraSearchHydraMapping.md)
- [InlineResponse200HydraView](docs/Model/InlineResponse200HydraView.md)
- [InvitationJsonldRead](docs/Model/InvitationJsonldRead.md)
- [InvitationRead](docs/Model/InvitationRead.md)
- [PollCreate](docs/Model/PollCreate.md)
- [PollJsonldCreate](docs/Model/PollJsonldCreate.md)
- [PollJsonldRead](docs/Model/PollJsonldRead.md)
- [PollRead](docs/Model/PollRead.md)
- [ProposalCreate](docs/Model/ProposalCreate.md)
- [ProposalGradeResultJsonldRead](docs/Model/ProposalGradeResultJsonldRead.md)
- [ProposalGradeResultRead](docs/Model/ProposalGradeResultRead.md)
- [ProposalJsonldCreate](docs/Model/ProposalJsonldCreate.md)
- [ProposalJsonldRead](docs/Model/ProposalJsonldRead.md)
- [ProposalRead](docs/Model/ProposalRead.md)
- [ProposalResultJsonldRead](docs/Model/ProposalResultJsonldRead.md)
- [ProposalResultRead](docs/Model/ProposalResultRead.md)
- [ResultJsonldRead](docs/Model/ResultJsonldRead.md)
- [ResultRead](docs/Model/ResultRead.md)
- [Token](docs/Model/Token.md)
- [UserCreate](docs/Model/UserCreate.md)
- [UserEdit](docs/Model/UserEdit.md)
- [UserJsonldCreate](docs/Model/UserJsonldCreate.md)
- [UserJsonldEdit](docs/Model/UserJsonldEdit.md)
- [UserJsonldRead](docs/Model/UserJsonldRead.md)
- [UserRead](docs/Model/UserRead.md)

## Authorization

### apiKey

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.0.0-dev`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
