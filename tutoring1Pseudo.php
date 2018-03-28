If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.

Find the sum of all the multiples of 3 or 5 below 1000.

How would you do that?

sum = 0
for i = 3; i < 1000; i+3
	sum = sum + i


for i = 5; i < 1000; i+5
	i is not divisible by 3
		sum = sum + i

//make both go until they get to 1000, or the highest they can get without passing 1000

echo "The sum is", sum;

👏👏