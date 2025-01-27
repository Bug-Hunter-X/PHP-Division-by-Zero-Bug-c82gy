function foo(a, b) {
  if ($b === 0) { 
    throw new DivisionByZeroError('Cannot divide by zero');
  }  
  return a / b; 
}