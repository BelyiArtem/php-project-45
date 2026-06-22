### Hexlet tests and linter status:
[![Actions Status](https://github.com/BelyiArtem/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/BelyiArtem/php-project-45/actions)
[![Code Quality](https://img.shields.io/badge/Code%20Sniffer-Passing-green)](https://github.com/squizlabs/PHP_CodeSniffer)
![Dependencies](https://img.shields.io/badge/Dependencies-Up--to--date-brightgreen.svg)
![Last Commit](https://img.shields.io/github/last-commit/BelyiArtem/php-project-45)
![License](https://img.shields.io/badge/License-MIT-green)
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=BelyiArtem_php-project-45&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=BelyiArtem_php-project-45)
[![Bugs](https://sonarcloud.io/api/project_badges/measure?project=BelyiArtem_php-project-45&metric=bugs)](https://sonarcloud.io/summary/new_code?id=BelyiArtem_php-project-45)
[![Code Smells](https://sonarcloud.io/api/project_badges/measure?project=BelyiArtem_php-project-45&metric=code_smells)](https://sonarcloud.io/summary/new_code?id=BelyiArtem_php-project-45)
[![Duplicated Lines (%)](https://sonarcloud.io/api/project_badges/measure?project=BelyiArtem_php-project-45&metric=duplicated_lines_density)](https://sonarcloud.io/summary/new_code?id=BelyiArtem_php-project-45)
[![SonarQube Cloud](https://sonarcloud.io/images/project_badges/sonarcloud-light.svg)](https://sonarcloud.io/summary/new_code?id=BelyiArtem_php-project-45)


<h1 align="center"> The game: "Brain even"</h1>

Installation
------------

Use [make] to install dependencies:

```bash
make install
```
<div>
  Example
  <img src="media/install_dep.gif"/>
</div>

## About
The goal of a game is as follows: a random number is displayed to the user. They must answer 'yes' if the number is even, or 'no' if it is odd. The user must provide three correct answers in a row to win.

Use [make] to run the game:
```bash
make brain-even
```

<div>
  <h3>Example (player win the game):</h3>
  <img src="media/game_win.gif"/>
</div>

------------

Any invalid input is considered an error (e.g., 'n') and counts as an incorrect answer.

<div>
  <h3>Example (player lost the game):</h3>
  <img src="media/game_lose.gif"/>
</div>