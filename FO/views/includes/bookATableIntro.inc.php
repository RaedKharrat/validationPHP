<section class="ftco-intro">
  <div class="container-wrap">
    <div class="wrap d-md-flex align-items-xl-end">
      <div class="info">
        <div class="row no-gutters">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="icon"><span class="icon-phone"></span></div>
            <div class="text">
              <h3>00 216 24 318 745</h3>
              <p>Call us , we'd be happy to answer</p>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="icon"><span class="icon-my_location"></span></div>
            <div class="text">
              <h3>Rue du Lac Huron, Tunis, Tunisie</h3>
              <p>	Obladi combine coffee place & working space</p>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="icon"><span class="icon-clock-o"></span></div>
            <div class="text">
              <h3>Open Monday-Sunday</h3>
              <p>8:00am - 9:00pm</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 book p-4">
        <h3>Book a Table</h3>
        <form action="reserver.php" method="post" class="appointment-form">
          <div class="d-md-flex">
            <div class="form-group">
              <input type="text" class="form-control" name="fName" placeholder="First Name">
            </div>
            <div class="form-group ml-md-4">
              <input type="text" class="form-control" name="lName" placeholder="Last Name">
            </div>
          </div>
          <div class="d-md-flex">
            <div class="form-group">
              <div class="input-wrap">
                <div class="icon"><span class="ion-md-calendar"></span></div>
                <input type="text" name="date"  class="form-control appointment_date" placeholder="Date" autocomplete="off">
              </div>
            </div>
            <div class="form-group ml-md-4">
              <div class="input-wrap">
                <div class="icon"><span class="ion-ios-clock"></span></div>
                <input type="text" name="time" class="form-control appointment_time" placeholder="Time">
              </div>
            </div>
            <div class="form-group ml-md-4">
              <input type="tel" name="tel" class="form-control" placeholder="Phone" required>
            </div>
          </div>
          <div class="d-md-flex">
            <div class="form-group">
              <div class="input-wrap">
                <div class="icon"><span class="ion-ios-cafe"></span></div>
                <select class="form-control" name="seats" placeholder="Seats">
                  <option value="2">2</option>
                  <option value="4">4</option>
                  <option value="8">8</option>
                </select>
              </div>
            </div>
            <div class="form-group ml-md-4">
              <textarea name="msg" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group ml-md-4">
              <input type="submit" value="Appointment" class="btn btn-white py-3 px-4">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
