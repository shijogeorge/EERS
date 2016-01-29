// Validate the admin form...

function validateForm()
{
   // If the ID provided is NULL
   if( document.indexform.name.value == "")
   {
     alert( "Please provide Name! " );
     document.indexform.uname.focus();
     return false;
   }
   
   // If the length of the value is not 13
   if( document.indexform.pincode.value.length != 6)
   {
	 alert( "Kindly enter 6 digits only' ");
	 document.indexform.pincode.focus();
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