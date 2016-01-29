// javascript file to enter date and print the form (for visitor only)

function displayDate()
{
	var today=new Date();
	var date=today.toISOString().slice(0, -14);
	document.getElementById("dated").value=date;
}

function printDiv(divName)
{
	var printContents = document.getElementById(divName).innerHTML;
	w=window.open();
	w.document.write(printContents);
	w.print();
	w.close();
}