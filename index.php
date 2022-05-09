<!DOCTYPE html>
<html>
<head>
  <title>Form Validation</title>
<script src="myjs.js">
</script>
<script type="text/javascript">
      // Form validation code will come here.
      function validate()
      {
        var errorArray = new Array();
         if(document.myForm.Name.value == "" )
         {
            //alert( "Please provide your name!" );
            document.myForm.Name.focus() ;
            //return false;
            errorArray.push("You don't have a name??")
         }

         if(document.myForm.EMail.value == "" )
         {
          //  alert( "Please provide your Email!" );
            document.myForm.EMail.focus() ;
          //  return false;
          errorArray.push("Provide your email.")
         }

         if(document.myForm.Zip.value == "" ||
            isNaN(document.myForm.Zip.value) ||
            document.myForm.Zip.value.length != 5 )
                  {
                     //alert( "Please provide a zip in the format #####." );
                     document.myForm.Zip.focus();
                  //   return false;
                  errorArray.push("Please provide a valid zip code in the format #####")
                  }

                  if( document.myForm.Country.value == "-1" )
                  {
                    // alert( "Please provide your country!" );
                     //return false;
                     errorArray.push("What country do you live in??")
                  }
                  //return( true );

               if (errorArray.length > 0)
               {
                 var errorReport = document.getElementById("errorMessage");
                 errorString = "<ul>";

                 for(i = 0; i < errorArray.length; i++)
                 {
                 errorString = errorString + "<li>" + errorArray[i] + "</li>"
                }
                errorString = errorString + "</ul>"
                errorReport.innerHTML = errorString
                return false;
               }
               return true;
}
         </script>

</head>
<body>
  <!-- action = "/cgi-bin/test.cgi" -->
  <form action="#" name="myForm" onsubmit="return(validate());">
         <table cellspacing="2" cellpadding="2" border="1">
            <tr>
               <td align="right">Name</td>
               <td><input type="text" name="Name"></td>
            </tr>
            <tr>
               <td align="right">EMail</td>
               <td><input type="text" name="EMail" /></td>
            </tr>
            <tr>
               <td align="right">Zip Code</td>
               <td><input type="text" name="Zip" /></td>
            </tr>
            <tr>
               <td align="right">Country</td>
               <td>
                  <select name="Country">
                     <option value="-1" selected>[choose yours]</option>
                     <option value="1">USA</option>
                     <option value="2">UK</option>
                     <option value="3">INDIA</option>
                  </select>
                </td>
                           </tr>
                           <tr>
                              <td align="right"></td>
                              <td><input type="submit" value="Submit" onclick="return(validate());"></td>
                           </tr>
                        </table>

                        <div id="errorMessage">
                        </div>
                     </form>
<input type="button" onclick="popup()" value="Click Me!">


</body>
</html>
