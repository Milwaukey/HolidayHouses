<?php $pageTitle = 'Login'; $active = 'booking'; require_once(__DIR__ . '/header.php'); if(!$_SESSION){ header('Location: login'); } ?>


<section id="bookingContainer">

<h3>House title</h3>
<div class="subLine">Book house from {name of person}</div>


<form>

  <div class="inputWrapperContainer">

      <div class="inputWrap">
        <label>FROM DATE</label>
        <input class="datepicker" type="text" placeholder="Select start date">
        <div class="calendarIcon"><i class="material-icons">calendar_today</i></div>
      </div>

      <div class="inputWrap">
        <label>TO DATE</label>
        <input class="datepicker" type="text" placeholder="Select end date">
        <div class="calendarIcon"><i class="material-icons">calendar_today</i></div>
      </div>
  </div>


  <div class="inputWrapperContainer">
    <div class="input-field">
      <select>
        <option value="" disabled selected>People</option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
      </select>
      <label>People</label>
    </div>

    <div class="input-field">
      <select>
        <option value="" disabled selected>Eksta field</option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
      </select>
      <label>Ekstra Field</label>
    </div>
  </div>



    <h5>PAYMENT</h5>

    <div class="paymentWrapper">
      <div class="input-field col s6">
            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
            <label for="first_name">Card Number</label>
      </div>

      <div class="input-field col s6">
            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
            <label for="first_name">DATE</label>
      </div>

      <div class="input-field col s6">
            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
            <label for="first_name">CCV</label>
      </div>
    </div>


    <button class="btnSubmit">BOOK NOW</button>
</form>


</section>



<?php $linkToscript = '<script src="js/book_now.js"></script>'; require_once(__DIR__ . '/footer.php'); ?>
