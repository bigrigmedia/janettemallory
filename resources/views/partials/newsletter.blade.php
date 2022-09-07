<form class='relative' target='_blank' method='post' action='https://app.icontact.com/icp/signup.php' name='icpsignup' id='icpsignup5370' accept-charset='UTF-8' onsubmit='return verifyRequired5370();'>
  <input type='hidden' name='redirect' value='http://www.icontact.com/www/signup/thanks.html'>
  <input type='hidden' name='errorredirect' value='http://www.icontact.com/www/signup/error.html'>
  <input type='text' name='fields_email' placeholder='Join Mailing List' class='w-full p-3 text-sm text-black border border-black border-solid rounded-[50px] placeholder:text-sm placeholder-black placeholder:uppercase'>
  <input type='hidden' name='listid' value='13138'>
  <input type='hidden' name='specialid:13138' value='PURY'>
  <input type='hidden' name='clientid' value='662877'>
  <input type='hidden' name='formid' value='5370'>
  <input type='hidden' name='reallistid' value='1'>
  <input type='hidden' name='doubleopt' value='0'>
  <input type='submit' name='Submit' value='Submit' class='submit'>
</form>
<script type='text/javascript'>
  var icpForm5370 = document.getElementById('icpsignup5370');

  if (document.location.protocol === 'https:')

  icpForm5370.action = 'https://app.icontact.com/icp/signup.php';

  function verifyRequired5370() {
    if (icpForm5370['fields_email'].value == '') {
      icpForm5370['fields_email'].focus();
      alert('The Email field is required.');
      return false;
    }

    if (icpForm5370['fields_email'].value && icpForm5370['fields_email'].value !== '') {
      icpForm5370['fields_email'].value = icpForm5370['fields_email'].value.trim();
    }

    return true;
  }

  function validDate5370(value) {

    if (value == '') {
      return true;
    }

    var dateSections = value.split('/');
    if (dateSections.length != 3) {
      return false;
    }

    var month = dateSections[0];
    if (month && (month.length > 2 || month < 1 || month > 12)) {
      return false;
    }

    var day = dateSections[1];
    if (day && (day.length > 2 || day < 1 || day > 31)) {
      return false;
    }

    var year = dateSections[2];
    if (!year || (year && year.length != 4)) {
      return false;
    }

    var dateValue = new Date(value);
    if (month != (dateValue.getMonth()+1) || day != dateValue.getDate() || year != dateValue.getFullYear()) {
      return false;
    }

    return true;
  }
</script>