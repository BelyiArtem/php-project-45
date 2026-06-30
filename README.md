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

<h1 align="center">Project "Brain Games"</h1>
Project has 5 games: even number, calculator, greatest common divisor (GCD), arithmetic progression, prime number. <br>
The player must provide <b>three correct answers</b> in a row to win.

<b>Important: </b>any invalid input is considered an error and counts as an incorrect answer.

Installation
------------

Use [make] to install dependencies:

```bash
make install
```
After installing validate composer.json:

```bash
make validate
```
Example
[![asciicast](https://asciinema.org/a/7mMIwVvEYGCzn2f4.svg)](https://asciinema.org/a/7mMIwVvEYGCzn2f4)

<details><summary><b>1. Even number</b></summary>
<b>The goal of a game is as follows:</b> a random number is displayed to the user. They must answer 'yes' if the number is even, or 'no' if it is odd.
  
Use [make] to run the game:
```bash
make brain-even
```
<div>
  <h4>Example (player win the game):</h4>

[![asciicast](https://asciinema.org/a/w4R118HTLftF3sj5.svg)](https://asciinema.org/a/w4R118HTLftF3sj5)
</div>
<div>
<h4>Example (player failed the game):</h4>

[![asciicast](https://asciinema.org/a/WiLadIxmWge254iX.svg)](https://asciinema.org/a/WiLadIxmWge254iX)
</div>
</details>

<details><summary><b>2. Calculator</b></summary>
<b>The goal of a game is as follows:</b> a random mathematical expression is displayed to the user (e.g. 35 + 16) which they must solve and provide the correct answer.
  
Use [make] to run the game:
```bash
make brain-calc
```

<div>
  <h4>Example (player win the game):</h4>

[![asciicast](https://asciinema.org/a/Ubw6HoChI9kTOTcr.svg)](https://asciinema.org/a/Ubw6HoChI9kTOTcr)
</div>

<div>
  <h4>Example (player failed the game):</h4>

[![asciicast](https://asciinema.org/a/snsFNNkcjUmCRevh.svg)](https://asciinema.org/a/snsFNNkcjUmCRevh)
</div>
</details>

<details><summary><b>3. Greatest common divisor (GCD)</b></summary>
<b>The goal of a game is as follows:</b> two random numbers are displayed to the user (e.g. 25 50) which they must solve and provide the greatest common divisor.
  
Use [make] to run the game:
```bash
make brain-gcd
```

<div>
  <h4>Example (player win the game):</h4>
  
  [![asciicast](https://asciinema.org/a/BbFv2l3DRRfxFnlC.svg)](https://asciinema.org/a/BbFv2l3DRRfxFnlC)
</div>

<div>
  <h4>Example (player failed the game):</h4>
  
  [![asciicast](https://asciinema.org/a/WWyszs6q1xq6oVDe.svg)](https://asciinema.org/a/WWyszs6q1xq6oVDe)
</div>
</details>

<details><summary><b>4. Arithmetic progression</b></summary>
<b>Objective of the Game:</b> the game presents a numerical sequence to the player where one number is intentionally omitted and marked with an ellipsis (...). The player's task is to identify the missing number based on the given sequence pattern.

Example Scenario: Consider the sequence: 5 7 9 11 13 ... 17 19 21 23

The common difference between numbers is +2
The missing number in this case is 15

Use [make] to run the game:
```bash
make brain-progression
```

<div>
  <h4>Example (player win the game):</h4>
  
  [![asciicast](https://asciinema.org/a/Wk2QlE8Mwd9R6vfe.svg)](https://asciinema.org/a/Wk2QlE8Mwd9R6vfe)
</div>

<div>
  <h4>Example (player failed the game):</h4>
  
  [![asciicast](https://asciinema.org/a/qdczt4Ec48he0BY2.svg)](https://asciinema.org/a/qdczt4Ec48he0BY2)
</div>
</details>

<details><summary><b>5. Prime number</b></summary>
<b>Objective of the Game:</b> a random number is displayed to the user. They must answer 'yes' if the number is prime, or 'no'. The user must provide three correct answers in a row to win.

Use [make] to run the game:
```bash
make brain-prime
```

<div>
  <h4>Example (player win the game):</h4>

  [![asciicast](https://asciinema.org/a/cyadDVZuWQPHlo0g.svg)](https://asciinema.org/a/cyadDVZuWQPHlo0g)
</div>

<div>
  <h4>Example (player failed the game):</h4>

  [![asciicast](https://asciinema.org/a/BVK6gRVtlKtaUsMJ.svg)](https://asciinema.org/a/BVK6gRVtlKtaUsMJ)
</div>
</details>
