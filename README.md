# Washington Parks Project

_More documentation to come... in the meantime, check out the site at https://waparksproject.com/._

## Progress & Road Map

This project is being developed very transparently, and I'm tracking progress and the backlog in Github Projects. The project for Washington Parks Project can be viewed here: https://github.com/jimmygle/waparksproject/projects

## Local Environment Setup

1. Clone the repository and `cd waparksproject`.
1. `composer install`
1. `cp .env.example .env`
1. `yarn install` (or `npm install`)
1. `php ./vendor/bin/homestead make`
1. `vagrant up`
1. Update `/etc/hosts`:
    ```
    192.168.10.10 waparksproject.local
    ```
1. Visit the local site: http://waparksproject.local/

## Technologies & Processes

- PHP 7.2 / Laravel 5.7
- VueJS 2.5
- [Git HubFlow](https://datasift.github.io/gitflow/TheHubFlowTools.html)
