![Laravel GitScrum](http://i.imgur.com/fJLrnxu.png)

<p align="center">
<b><a href="#overview">Overview</a></b>
|
<b><a href="#installation">Installation</a></b>
|
<b><a href="#setup">Setup</a></b>
|
<b><a href="#screens">Screens</a></b>
|
<b><a href="#questions-and-issues">Questions and Issues</a></b>
|
<b><a href="#contributing">Contributing</a></b>
|
<b><a href="#license">License</a></b>
</p>

<hr>

[![Build Status](https://travis-ci.org/renatomarinho/laravel-gitscrum.svg?branch=master)](https://travis-ci.org/renatomarinho/laravel-gitscrum)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/2abfe5173e0b4565a2b1e3e345160939)](https://www.codacy.com/app/renatomarinho/laravel-gitscrum?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=renatomarinho/laravel-gitscrum&amp;utm_campaign=Badge_Grade)
[![Total Downloads](https://poser.pugx.org/renatomarinho/laravel-gitscrum/downloads)](https://packagist.org/packages/renatomarinho/laravel-gitscrum)

<hr>

## Overview

Laravel GitScrum is a **free application** developed in Laravel 5.4. The aim is help the developer teams to use **Git** and **Scrum** on task management of the day-to-day.


### Features

GitScrum can be integrated with **Github** or **Gitlab**.

- **Product Backlog** contains the Product Owner's assessment of business value

- **User Story** is a description consisting of one or more sentences in the everyday or business language that captures what a user does or needs to do as part of his or her job function.

	**Features**: Acceptance criteria, prioritization using MoSCoW, definition of done checklist, pie chart, assign labels, team members, activities, comments and issues.

- **Sprint Backlog** is the property of the development team and all included estimates are provided by development team. Often an accompanying sprint planning is the board used to see and change state of the issues.

	**Features**: Sprint planning using Kanban board, burndown chart, definition done checklist, effort, attachments, activities, comments and issues.

- **Issue** is added in user story to one sprint backlog, or directly in sprint backlog. Generally, each issue should be small enough to be easily completed within a single day.

	**Features**: Progress state (e.g. to do, in progress, done or archived), issue type (e.g. Improvement, Support Request, Feedback, Customer Problem, UX, Infrastructure, Testing Task, etc...), definition of done checklist, assign labels, effort, attachments, comments, activities, team members.



## Installation

The requirements to Laravel GitScrum application is:

- **PHP - Supported Versions**: >= 7.x
- **Webserver**: Nginx or Apache
- **Database**: MySQL, or Maria DB

[**Use Docker** - Containers: php7, nginx and mysql57](https://github.com/renatomarinho/Docker-GitScrum)

### Composer Package

```
$ composer create-project renatomarinho/laravel-gitscrum --stability=dev --keep-vcs
$ cd laravel-gitscrum
```
**Important**: If you have not yet installed composer: [Installation - Linux / Unix / OSX](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)


### Git Clone

```
$ git clone git@github.com:renatomarinho/laravel-gitscrum.git
$ cd laravel-gitscrum
$ composer update
$ composer run-script post-root-package-install
```


## Setup

**Important**: If you have not the .env file in root folder, you must copy or rename the .env.example to .env

#### Application URL

.env file

```
APP_URL=http://yourdomain.tld (you must use protocol http or https)
```

#### Database

.env file

```

DB_CONNECTION=mysql
DB_HOST=XXXXXX
DB_PORT=3306
DB_DATABASE=XXXXX
DB_USERNAME=XXXX
DB_PASSWORD=XXXXX
```

**Remember**: Create the database for GitScrum before run artisan command.

```
php artisan migrate --seed
```

#### Github

You must create a new Github App, visit [GitHub's New OAuth Application page](https://github.com/settings/applications/new), fill out the form, and grab your Client ID and Secret.

```
Application name: gitscrum
Homepage URL: URL (Same as APP_URL at .env)
Application description: gitscrum
Authorization callback URL: http://{URL is the SAME APP_URL}/auth/provider/github/callback
```

.env file

```
GITHUB_CLIENT_ID=XXXXX
GITHUB_CLIENT_SECRET=XXXXXXXXXXXXXXXXXX
```

#### Gitlab

You must create a new Gitlab App, visit [Gitlab new application](https://gitlab.com/profile/applications), fill out the form, and grab your Application ID and Secret.

```
name: gitscrum
Redirect URI: http://{URL is the SAME APP_URL}/auth/provider/gitlab/callback
Scopes: api and read_user
```

.env file

```
GITLAB_KEY=XXXXX -> Application Id
GITLAB_SECRET=XXXXXXXXXXXXXXXXXX
GITLAB_INSTANCE_URI=https://gitlab.com/
```

#### Proxy

.env file

```
PROXY_PORT=
PROXY_METHOD=
PROXY_SERVER=
PROXY_USER=
PROXY_PASS=
```


## Screens

![Screenshot 0](http://i.imgur.com/jejT8hY.png)
![Screenshot 0](http://i.imgur.com/apcFdv0.png)
![Screenshot 0](http://i.imgur.com/TRzRIpU.png)
![Screenshot 0](http://i.imgur.com/VcpRaNk.png)
![Screenshot 0](http://i.imgur.com/8uMYCLv.png)
![Screenshot 0](http://i.imgur.com/rIwkn7i.png)
![Screenshot 0](http://i.imgur.com/D954dbU.png)

<br>
### Database schema 

![Screenshot 1](http://i.imgur.com/zdrEkkf.png)

<br>

## Questions and issues

The [github issue tracker](https://github.com/renatomarinho/laravel-gitscrum/issues) is **_only_** for bug reports and feature requests. Anything else, such as questions for help in using the Laravel Gitscrum, should be posted in [StackOverflow](http://stackoverflow.com/questions/tagged/gitscrum) under tag `gitscrum`.

### Do you need help?

Renato Marinho: [Facebook](https://www.facebook.com/renato.marinho) / [LinkedIn](https://pt.linkedin.com/in/renatomarinho13) / Skype: renatomarinho13


## Contributing

Contributions are always welcome! Please read the contribution guidelines first.

```
    Create an issue and describe your idea
    Fork it
    Create your feature branch (git checkout -b my-new-feature)
    Commit your changes (git commit -am 'Add some feature')
    Publish the branch (git push origin my-new-feature)
    Create a new Pull Request
```


## License

Laravel GitScrum is licensed under the [GPL v3 license](http://opensource.org/licenses/GPL-3.0).


## Thanks

- [Laravel PHP Framework](https://github.com/laravel/laravel)

- [Chart.js](https://github.com/chartjs/Chart.js)

- [Date Range Picker for Bootstrap](https://github.com/dangrossman/bootstrap-daterangepicker)
