  function isNumberKey(evt){
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
          return false;
      return true;
  }

  function checkLength()
  {
    var fieldLength = document.getElementById('txtF').value.length;

    if(fieldLength <= 9)
    {
        return true;
    }
    else
    {
        var str = document.getElementById('txtF').value;
        str = str.substring(0, str.length - 1);
        document.getElementById('txtF').value = str;
    }
  }

  function lettersOnly(evt) {
         evt = (evt) ? evt : event;
         var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
            ((evt.which) ? evt.which : 0));
         if (charCode > 31 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122)
            && (charCode < 129 || charCode > 255))
         {
            alert("Este campo acepta únicamente letras.");
            return false;
         }
         return true;
       }
