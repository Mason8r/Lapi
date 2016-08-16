Feature: Blueprint Public Pages
  As a guest user
  I want be able to access the public content

  Scenario: Basic homepage test
    When I go to "/api"
    Then the response status code should be 200

