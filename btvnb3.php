<?php
//Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
//echo "Sắp xếp mảng theo thứ tự tăng dần: <br>";
function sortArray($array) {
    sort($array);
    return $array;
}
    $array = array(4, 6, 2, 22, 11);
    $sortedArray = sortArray($array);
    echo "Mảng sau khi sắp xếp là: " . implode(', ', $sortedArray) . "<br>";

//Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function calculateFactorial($number) {
    if ($number == 0 || $number == 1) {
        return 1;
    } else {
        return $number * calculateFactorial($number - 1);
    }
}
$number = 10;
$factorial = calculateFactorial($number);
echo "Giai thừa của $number là: $factorial <br>"; 
//Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
function findPrimesInRange($start, $end) {
    echo "Các số nguyên tố trong khoảng từ $start đến $end là:\n";
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            echo "$i ";
        }
    }
    echo "<br>";
}
$start = 1; $end = 100;
$start = intval($start);
$end = intval($end);
findPrimesInRange($start, $end);
//Viết chương trình PHP để tính tổng của các số trong một mảng.
function calculateArraySum($array) {
    return array_sum($array);
}
$array = array(4, 6, 2, 22, 11);
$arraySum = calculateArraySum($array);
echo "Tổng của các số trong mảng là: $arraySum <br>";
//Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function printFibonacciInRange($start, $end) {
    $fibonacciSequence = [];
    $fibonacciSequence[0] = 0;
    $fibonacciSequence[1] = 1;
    for ($i = 2; $i <= $end; $i++) {
        $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }
    echo "Các số Fibonacci trong khoảng từ $start đến $end là: ";
    for ($i = $start; $i <= $end; $i++) {
        echo $fibonacciSequence[$i] . " ";
    }
    echo "<br>";
}
$start = 0; $end = 10;
$start = intval($start);
$end = intval($end);
printFibonacciInRange($start, $end);
//Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function isArmstrong($number) {
    $originalNumber = $number;
    $numDigits = strlen($number);
    $sum = 0;

    while ($number > 0) {
        $digit = $number % 10;
        $sum += pow($digit, $numDigits);
        $number = (int)($number / 10);
    }

    return $sum === $originalNumber;
}

$number = 15;
$number = intval($number);
if (isArmstrong($number)) {
    echo "$number là số Armstrong. <br>";
} else {
    echo "$number không phải là số Armstrong. <br>";
}
//Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function insertNumberIntoArray($array, $number, $position) {
    array_splice($array, $position, 0, $number);
    return $array;
}

$array = array(4, 6, 2, 22, 11);
$array = array_map('intval', $array);
$numberToInsert = 10;
$positionToInsert = 2;
$numberToInsert = intval($numberToInsert);
$positionToInsert = intval($positionToInsert);
$newArray = insertNumberIntoArray($array, $numberToInsert, $positionToInsert);
echo "Mảng sau khi chèn số $numberToInsert vào vị trí $positionToInsert là: " . implode(', ', $newArray) . "<br>";
//Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeDuplicates($array) {
    return array_values(array_unique($array));
}
$array = array(4, 6, 2, 22, 6, 11);
$array = array_map('intval', $array);
$uniqueArray = removeDuplicates($array);
echo "Mảng sau khi loại bỏ phần tử trùng lặp là: " . implode(', ', $uniqueArray) . "<br>";
//Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function findElementPosition($array, $element) {
    $positions = array_keys($array, $element);
    return $positions;
}
$array = array(4, 6, 2, 22, 11);
$elementToFind = 11;
$positions = findElementPosition($array, $elementToFind);
if (empty($positions)) {
    echo "Phần tử '$elementToFind' không có trong mảng.<br>";
} else {
    echo "Vị trí của phần tử '$elementToFind' trong mảng là: " . implode(', ', $positions) . "<br>";
}
//Viết chương trình PHP để đảo ngược một chuỗi.
function reverseString($str) {
    return strrev($str);
}
$inputString = "nguyenthithu";
$reversedString = reverseString($inputString);
echo "Chuỗi đảo ngược là: $reversedString <br>";
//Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function countElements($array) {
    return count($array);
}
$array = array(2, 6, 2, 22, 11);
$array = array_map('intval', $array);
$elementCount = countElements($array);
echo "Số lượng phần tử trong mảng là: $elementCount <br>";
//Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function isPalindrome($str) {
    $str = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $str));
    $reversedStr = strrev($str);
    return $str === $reversedStr;
}
$inputString = "hdhfsuis1-24-5";
if (isPalindrome($inputString)) {
    echo "Chuỗi '$inputString' là chuỗi Palindrome. <br>";
} else {
    echo "Chuỗi '$inputString' không phải là chuỗi Palindrome. <br> ";
}
//Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countOccurrences($array, $element) {
    return array_count_values($array)[$element] ?? 0;
}
$array = array(2, 6, 2, 22, 4, 2, 11);
$array = array_map('intval', $array);
$elementToCount = 2;
$occurrences = countOccurrences($array, $elementToCount);
echo "Số lần xuất hiện của phần tử $elementToCount trong mảng là: $occurrences <br>";
//Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function sortDescending($array) {
    arsort($array);
    return $array;
}
$array = array(4, 6, 2, 22, 11);
$array = array_map('intval', $array);
$sortedArray = sortDescending($array);
echo "Mảng sau khi sắp xếp giảm dần là: " . implode(', ', $sortedArray) . "<br>";
//Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function addToFront($array, $element) {
    array_unshift($array, $element);
    return $array;
}
function addToEnd($array, $element) {
    array_push($array, $element);
    return $array;
}
$array = array(4, 6, 2, 22, 11);
$array = array_map('intval', $array);
$elementToAdd = 15;
$position = strtolower(readline("Bạn muốn thêm vào đầu (D) hay cuối (C) của mảng? "));
if ($position === 'd') {
    $modifiedArray = addToFront($array, $elementToAdd);
} elseif ($position === 'c') {
    $modifiedArray = addToEnd($array, $elementToAdd);
} else {
    die("Vị trí không hợp lệ. Chương trình kết thúc.");
}
echo "Mảng sau khi thêm phần tử là: " . implode(', ', $modifiedArray) . "<br>";
//Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function findSecondLargest($array) {

    $max = $secondMax = PHP_INT_MIN;

    foreach ($array as $number) {
        if ($number > $max) {
            $secondMax = $max;
            $max = $number;
        } elseif ($number > $secondMax && $number != $max) {
            $secondMax = $number;
        }
    }

    return $secondMax;
}
$array = array(4, 6, 2, 22, 11);
$array = array_map('intval', $array);
$secondLargest = findSecondLargest($array);
echo "Số lớn thứ hai trong mảng là: $secondLargest <br>";
// Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function findGCD($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return abs($a);
}
function findLCM($a, $b) {
    return ($a * $b) / findGCD($a, $b);
}
$num1 = 2;
$num2 = 10;
$num1 = intval($num1);
$num2 = intval($num2);
$gcd = findGCD($num1, $num2);
$lcm = findLCM($num1, $num2);
echo "USCLN của $num1 và $num2 là: $gcd <br>";
echo "BSCNN của $num1 và $num2 là: $lcm <br>";
//Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
function isPerfectNumber($number) {
    if ($number <= 0) {
        return false;
    }

    $divisorsSum = 0;

    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $divisorsSum += $i;
        }
    }

    return $divisorsSum == $number;
}
$inputNumber = 10;
$number = intval($inputNumber);
if (isPerfectNumber($number)) {
    echo "$number là số hoàn hảo.\n";
} else {
    echo "$number không phải là số hoàn hảo. <br>";
}
//Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function findLargestOdd($array) {
    $largestOdd = PHP_INT_MIN;

    foreach ($array as $number) {
        if ($number % 2 == 1 && $number > $largestOdd) {
            $largestOdd = $number;
        }
    }

    return ($largestOdd == PHP_INT_MIN) ? null : $largestOdd;
}
$array = array(4, 6, 2, 22, 11);
$array = array_map('intval', $array);
$largestOdd = findLargestOdd($array);
if ($largestOdd !== null) {
    echo "Số lẻ lớn nhất trong mảng là: $largestOdd <br>";
} else {
    echo "Không có số lẻ nào trong mảng.<br>";
}
//Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}
$inputNumber = 15;
$number = intval($inputNumber);
if (isPrime($number)) {
    echo "$number là số nguyên tố.<br>";
} else {
    echo "$number không phải là số nguyên tố.<br>";
}
//Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function findLargestPositive($array) {
    $largestPositive = null;

    foreach ($array as $number) {
        if ($number > 0 && ($largestPositive === null || $number > $largestPositive)) {
            $largestPositive = $number;
        }
    }

    return $largestPositive;
}
$array = array(4, 6, 2, -22, 11);
$array = array_map('intval', $array);
$largestPositive = findLargestPositive($array);
if ($largestPositive !== null) {
    echo "Số dương lớn nhất trong mảng là: $largestPositive<br>";
} else {
    echo "Không có số dương trong mảng.<br>";
}
//Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findLargestNegative($array) {
    $largestNegative = null;

    foreach ($array as $number) {
        if ($number < 0 && ($largestNegative === null || $number > $largestNegative)) {
            $largestNegative = $number;
        }
    }

    return $largestNegative;
}
$array = array(4, -6, 2, -22, 11);
$array = array_map('intval', $array);
$largestNegative = findLargestNegative($array);
if ($largestNegative !== null) {
    echo "Số âm lớn nhất trong mảng là: $largestNegative <br>";
} else {
    echo "Không có số âm trong mảng. <br>";
}
//Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function sumOfOddNumbers($n) {
    $sum = 0;

    for ($i = 1; $i <= $n; $i += 2) {
        $sum += $i;
    }

    return $sum;
}
$inputN = 100;
$n = intval($inputN);
$sum = sumOfOddNumbers($n);
echo "Tổng các số lẻ từ 1 đến $n là: $sum <br>";
//Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function isPerfectSquare($number) {
    $sqrt = sqrt($number);
    return ($sqrt * $sqrt == $number);
}
function findPerfectSquaresInRange($start, $end) {
    $perfectSquares = [];

    for ($i = $start; $i <= $end; $i++) {
        if (isPerfectSquare($i)) {
            $perfectSquares[] = $i;
        }
    }

    return $perfectSquares;
}
$start = 1; $end = 100;
$start = intval($start);
$end = intval($end);
$perfectSquaresInRange = findPerfectSquaresInRange($start, $end);
if (empty($perfectSquaresInRange)) {
    echo "Không có số chính phương trong khoảng từ $start đến $end.<br>";
} else {
    echo "Các số chính phương trong khoảng từ $start đến $end là: " . implode(', ', $perfectSquaresInRange) . "<br>";
}
//Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function isSubstring($string, $substring) {
    return strpos($string, $substring) !== false;
}
$string = "nguyenthithu";
$substring = "thu";
if (isSubstring($string, $substring)) {
    echo "\"$substring\" là chuỗi con của \"$string\".<br>";
} else {
    echo "\"$substring\" không phải là chuỗi con của \"$string\".<br>";
}
?>


