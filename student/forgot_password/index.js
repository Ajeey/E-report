function clearFieldFirstTime(element) 
{
  if (element.counter==undefined)
   {
	element.counter = 1;
  }

  else 
  {
	element.counter++;
  }

  if (element.counter == 1)
   {
	element.value = '';
  }
}