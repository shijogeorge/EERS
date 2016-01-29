// Validate the login form...

function validateForm()
{
   // If the reason provided is NULL
   if( document.hostelform.element_4a.value == "")
   {
     alert( "Please provide the reason !! " );
     document.hostelform.element_4a.focus() ;
     return false;
   }
   
   if( document.hostelform.element_6.value == "")
   {
     alert( "Please provide the reason !! " );
     document.hostelform.element_6.focus();
     return false;
   }
   
   if( document.hostelform.element_7.value == "")
   {
     alert( "Please mention when you will return !! " );
     document.hostelform.element_7.focus();
     return false;
   }
   
   if( document.hostelform.element_4.value == "")
   {
     alert( "Please mention the place of stay !! " );
     document.hostelform.element_4.focus() ;
     return false;
   }
   return(true);
}