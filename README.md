# Control Structures and Functions in PHP

This repository contains a series of exercises designed to help understand and implement basic control structures and functions in PHP. Each exercise tackles a logical problem and provides solutions with comments to explain the logic step-by-step.

## Exercises

Below are the details of each exercise included in this repository:

### 1. Fibonacci Sequence
Write a function named `generateFibonacci` that takes a number `n` as a parameter and generates the first `n` terms of the Fibonacci sequence. The sequence begins with 0 and 1, and each subsequent term is the sum of the two preceding ones.

#### Example Usage:
```php
$n = 10;
$result = generateFibonacci($n);
echo "The first $n terms of the Fibonacci sequence are: " . implode(", ", $result);
```

### 2. Prime Number Checker
Create a function called `isPrime` that determines if a given number is prime. A prime number is only divisible by 1 and itself.

#### Example Usage:
```php
$number = 29;
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
```

### 3. Palindrome Checker
Implement a function named `isPalindrome` that determines if a given string is a palindrome. A palindrome is a word, phrase, or sequence that reads the same forwards and backwards.

#### Example Usage:
```php
$text = "A man a plan a canal Panama";
if (isPalindrome($text)) {
    echo "'$text' is a palindrome.";
} else {
    echo "'$text' is not a palindrome.";
}
```

### 4. Character Frequency Counter
Implement a function that takes a string and returns an associative array showing the frequency of each character in the string.

#### Example Usage:
```php
$text = "Hello World";
$result = characterFrequency($text);
foreach ($result as $character => $count) {
    echo "'$character' => $count\n";
}
```

## Project Structure

Each PHP exercise is designed to be standalone, with inline comments explaining the logic and function of each section of the code.

## Usage

1. Clone the repository to your local machine:
   ```bash
   git clone https://github.com/dev-rafael-arevalo/FSJ24a-ControlStructurePHP.git
   ```
2. Navigate to the project directory:
   ```bash
   cd FSJ24a-ControlStructurePHP
   ```
3. Run each PHP file in a local PHP environment or on a server to test the functionality of each exercise.

## Requirements

- PHP 7.4 or higher
- A web server or local environment (e.g., XAMPP, MAMP, or PHP built-in server)

## Contributing

Feel free to fork this repository, submit issues, or make pull requests to improve these exercises or add new examples of control structures in PHP.

## License

This project is licensed under the MIT License. See the `LICENSE` file for details.

## Author

Developed by [Rafael Arevalo](https://github.com/dev-rafael-arevalo)
