# PHP foreach Loop with unset() Bug
This repository demonstrates a subtle bug in PHP when using `unset()` within a `foreach` loop on an array with numeric keys. The issue arises because modifying the array's structure (removing elements) during iteration causes the index to shift, leading to elements being skipped.

## Problem Description
The code demonstrates how removing elements from a numerically-indexed array using `unset()` inside a `foreach` loop leads to unexpected behavior.  The indexes are not correctly handled, causing elements to be skipped, not removed entirely.

## Solution
The provided solution offers a different approach using `array_filter` to remove elements that match a specific criteria.  This method avoids the index issues inherent in modifying arrays while iterating through them.  This method is more efficient and avoids the potential pitfalls of using `unset` within a `foreach` loop on numerically indexed arrays.