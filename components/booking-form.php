<h4 class="pb-30">Book Your Taxi Now!</h4>
<form id="msform">
    <fieldset>
        <div class="form-card">
            <input type="email" name="email" placeholder="Email Id" />
            <input type="text" name="uname" placeholder="UserName" />
            <input type="password" name="pwd" placeholder="Password" />
            <input type="password" name="cpwd" placeholder="Confirm Password" />
        </div>
        <input type="button" name="next" class="next action-button" value="Next Step" />
    </fieldset>
    <fieldset>
        <div class="form-card">
            <h2 class="fs-title">Personal Information</h2>
            <input type="text" name="fname" placeholder="First Name" />
            <input type="text" name="lname" placeholder="Last Name" />
            <input type="text" name="phno" placeholder="Contact No." />
            <input type="text" name="phno_2" placeholder="Alternate Contact No." />
        </div>
        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next Step" />
    </fieldset>
    <fieldset>
        <div class="form-card">
            <h2 class="fs-title">Payment Information</h2>
            <div class="radio-group">
                <div class='radio' data-value="credit"><img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div>
                <div class='radio' data-value="paypal"><img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div>
                <br>
            </div>
            <label class="pay">Card Holder Name*</label>
            <input type="text" name="holdername" placeholder="" />
            <div class="row">
                <div class="col-9">
                    <label class="pay">Card Number*</label>
                    <input type="text" name="cardno" placeholder="" />
                </div>
                <div class="col-3">
                    <label class="pay">CVC*</label>
                    <input type="password" name="cvcpwd" placeholder="***" />
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label class="pay">Expiry Date*</label>
                </div>
                <div class="col-9">
                    <select class="list-dt" id="month" name="expmonth">
                        <option selected>Month</option>
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October</option>
                        <option>November</option>
                        <option>December</option>
                    </select>
                    <select class="list-dt" id="year" name="expyear">
                        <option selected>Year</option>
                    </select>
                </div>
            </div>
        </div>
        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
        <input type="button" name="make_payment" class="next action-button" value="Confirm" />
    </fieldset>
    <fieldset>
        <div class="form-card">
            <h2 class="fs-title text-center">Success !</h2>
            <br><br>
            <div class="row justify-content-center">
                <div class="col-3">
                    <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                </div>
            </div>
            <br><br>
            <div class="row justify-content-center">
                <div class="col-7 text-center">
                    <h5>You Have Successfully Signed Up</h5>
                </div>
            </div>
        </div>
    </fieldset>
</form>