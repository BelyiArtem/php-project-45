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


<h1 align="center">Project Brain Games</h1>

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

## 1. Brain even
The goal of a game is as follows: a random number is displayed to the user. They must answer 'yes' if the number is even, or 'no' if it is odd. The user must provide three correct answers in a row to win.

Use [make] to run the game:
```bash
make brain-even
```

<div>
  <h3>Example (player win the game):</h3>
  <img src="media/brain-even/even_win.gif"/>
</div>

------------

Any invalid input is considered an error (e.g., 'n') and counts as an incorrect answer.

<div>
  <h3>Example (player lost the game):</h3>
  <img src="media/brain-even/even_lose.gif"/>
</div>

## 2. Brain calculcator

The goal of a game is as follows: a random mathematical expression is displayed to the user (e.g. 35 + 16) which they must solve and provide the correct answer.

Use [make] to run the game:
```bash
make brain-calc
```

<div>
  <h3>Example (player win the game):</h3>
  <img src="media/brain-calc/calc_win.gif"/>
</div>

------------

Any invalid input is considered an error (e.g., '5 * 10 and user anwser is 250') and counts as an incorrect answer.

<div>
  <h3>Example (player lost the game):</h3>
  <img src="media/brain-calc/calc_lose.gif"/>
</div>

## 3. Brain greatest common divisor

The goal of a game is as follows: two random number is displayed to the user (e.g. 25 50) which they must solve and provide the greatest common divisor.

Use [make] to run the game:
```bash
make brain-gcd
```

<div>
  <h3>Example (player win the game):</h3>
  <img src="media/brain-gcd/gcd_win.gif"/>
</div>

------------

Any invalid input is considered an error (e.g., '25  50 and user anwser is 1') and counts as an incorrect answer.

<div>
  <h3>Example (player lost the game):</h3>
  <img src="media/brain-gcd/gcdlose.gif"/>
</div>
