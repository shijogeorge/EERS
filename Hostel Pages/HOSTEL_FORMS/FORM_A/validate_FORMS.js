// Validate the login form...

function validateForm()
{
   // If the Room provided is NULL
   if( document.hostelform.element_1.value == "")
   {
     alert( "Please provide your Room no. !! " );
     document.hostelform.element_1.focus() ;
     return false;
   }
   
   // If the length of the room no. is != 3
   if( document.hostelform.element_1.value.length != 3)
   {
	 alert( "Room no. should contain exactly 3 digits.");
	 document.hostelform.element_1.focus();
	 return false;
   }
   
   // If the name provided is NULL
   if( document.hostelform.element_2.value == "")
   {
     alert( "Please provide your Name !! " );
     document.hostelform.element_2.focus() ;
     return false;
   }
   
   
   // If the phone no. provided is NULL
   if( document.hostelform.element_3_1.value == "")
   {
     alert( "Please provide your phone number !! " );
     document.hostelform.element_3_1.focus() ;
     return false;
   }
   
   // If the length of the phone no. is != 10
   if( document.hostelform.element_3_1.value.length != 10)
   {
	 alert( "Phone no. should contain exactly 10 digits.");
	 document.hostelform.element_3_1.focus();
	 return false;
   }
   
   // If the reason provided is NULL
   if( document.hostelform.element_4.value == "")
   {
     alert( "Please provide the reason !! " );
     document.hostelform.element_4.focus() ;
     return false;
   }
   return(true);
}

function checkNum(x)
{ 
  var s_len=x.value.length ;
  var s_charcode = 0;
    for (var s_i=0;s_i<s_len;s_i++)
    {
     s_charcode = x.value.charCodeAt(s_i);
     if(!((s_charcode>=48 && s_charcode<=57)))
      {
         alert("Only Numeric Values Allowed");
          x.value='';
         x.focus();
        return false;
      }
    }
   return true;
}

/*
onChange='checkNum(this)'
*/