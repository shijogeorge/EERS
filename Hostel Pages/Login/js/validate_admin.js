// Validate the admin form...

function validateForm()
{
   // If the ID provided is NULL
   if( document.indexform.username.value == "")
   {
     alert( "Please provide your ID! " );
     document.indexform.username.focus();
     return false;
   }
   
   // If the length of the value is not 13
   if( document.indexform.username.value.length != 13)
   {
	 alert( "Kindly check your ID, length must be '13' ");
	 document.indexform.username.focus();
	 return false;
   }
   
   // If the Password provided is NULL 
   if( document.indexform.password.value == "" )
   {
     alert( "Please provide your Password!" );
     document.indexform.password.focus();
     return false;
   }
   
   // If the Password length is less than 6
   if( document.indexform.password.value.length < 6)
   {
	 alert( "Password should contain atleast 6 characters! ");
	 document.indexform.password.focus();
	 return false;
   }
   
   // If the Password length is more than 16
   if( document.indexform.password.value.length > 16)
   {
     alert( "Password should contain atmost 16 characters! ");
	 document.indexform.password.focus();
	 return false;
   }
     return( true );
}