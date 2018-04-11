README: Project 1A

Partner 1: Rahul Sheth, 304779669
Partner 2: Anshul Aggarwal, 


Functionality:

This project is a basic calculator using HTML Forms and PHP for the calculator functionality. 
We began by creating the basic UI with HTML headers and a form construct. Inside the form, we 
linked it to the PHP routine using the $_SERVER["PHP_SELF"] and the POST method to send the form 
data using an HTTP POST. In the PHP Routine, we first checked for all invalid expressions. If we 
found it to be invalid, we would return false and echo "Invalid Expression!". Else, we would compute 
the expression using eval and echo that out to the page.  
     
     Edge Cases Covered For: 
     
     - Two (or more) decimal points in the same number (spread out and back to back)
     - 3 or more consecutive operators in the middle of the expression
     - An operator in the beginning of the expression (For the '-' sign, we checked for two consecutive).
     - Any non numeric, operator, or period characters in the expression.
     
     (These were the invalid expressions according to our standards. There may be other edge cases we forgot
     to account for that we would be happy to add in if mentioned).


Work Division:


