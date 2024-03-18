<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <?php include './components/head-links.php'; ?>
    <title>Airport Taxi - Booking</title>

</head>

<body>
    <section id="bookingForm" class="signup-step-container">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="wizard">
                        <div class="wizard-inner">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab"
                                        aria-expanded="true"><span class="round-tab">1 </span> <i>Step 1</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab"
                                        aria-expanded="false"><span class="round-tab">2</span> <i>Step 2</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span
                                            class="round-tab">3</span> <i>Step 3</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span
                                            class="round-tab">4</span> <i>Step 4</i></a>
                                </li>
                            </ul>
                        </div>

                        <form role="form" action="index.html" class="login-box">
                            <div class="tab-content" id="main_form">
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div id="formCol">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h3 class="formTitle">INSTANT FARE QUOTE</h3>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="name"
                                                                placeholder="Pick Up Address">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="name"
                                                                placeholder="Drop Off Address">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 ml-auto">
                                                        <div id="addWay"><img src="assets/img/add-icon.png"
                                                                alt="Add Watpoint">Add Watpoint</div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <iframe
                                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d151986.118181029!2d-2.388269476171491!3d53.47233644572608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487a4d4c5226f5db%3A0xd9be143804fe6baa!2sManchester%2C%20UK!5e0!3m2!1sen!2s!4v1710663473935!5m2!1sen!2s"
                                                            width="100%" height="250px" style="border:0;"
                                                            allowfullscreen="" loading="lazy"
                                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label>Pick Up Address</label>
                                                        <div class="d-flex dateRows">

                                                            <div class="form-group">
                                                                <input class="form-control" type="date" name="name"
                                                                    placeholder="">
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="time-hour" class="form-control">
                                                                    <option value="01">01</option>
                                                                    <option value="02">02</option>
                                                                    <option value="03">03</option>
                                                                    <option value="04">04</option>
                                                                    <option value="05">05</option>
                                                                    <option value="06">06</option>
                                                                    <option value="07">07</option>
                                                                    <option value="08">08</option>
                                                                    <option value="09">09</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="00">00</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="time-min" class="form-control">
                                                                    <option value="00">00</option>
                                                                    <option value="05">05</option>
                                                                    <option value="10">10</option>
                                                                    <option value="15">15</option>
                                                                    <option value="20">20</option>
                                                                    <option value="25">25</option>
                                                                    <option value="30">30</option>
                                                                    <option value="35">35</option>
                                                                    <option value="40">40</option>
                                                                    <option value="45">45</option>
                                                                    <option value="50">50</option>
                                                                    <option value="55">55</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Passengers</label>
                                                                <div class="form-group">
                                                                    <select name="num-passengers" class="form-control">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Bags</label>
                                                                    <select name="num-bags" class="form-control">
                                                                        <option value="0">0</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <select name="return-journey" class="form-control">
                                                                <option value="false">One Way</option>
                                                                <option value="true">Return</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 footerForm">
                                                        <button type="button" class="default-btn next-step">Get My
                                                            Quote</button>
                                                        <p>Already booked and need to make amendments?
                                                            Please click below to manage your existing booking.</p>
                                                        <a href="#">Manage Your Bookings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="boxPeraFirst">
                                                <h1>Airport Taxi Bookings Done Right</h1>
                                                <p>Airport Taxi Booking specializes in airport transfers to and from
                                                    all UK
                                                    airports.</p>
                                                <p>
                                                    Our taxi network stretches across the UK, helping us provide you
                                                    with a
                                                    fast, safe and affordable airport taxi service 24 hours a day 7
                                                    days a
                                                    week.
                                                </p>
                                                <p>
                                                    By booking with us, you can enjoy:
                                                </p>
                                                <ul>
                                                    <li>
                                                        Multiple Vehicle Options – we provide normal, executive and
                                                        MPV
                                                        vehicles for your travel needs
                                                    </li>
                                                    <li>
                                                        Competitive Rates – Our rates are low without compromising
                                                        on
                                                        service
                                                    </li>
                                                    <li>
                                                        English Customer Service – Whatever your enquiry, we’re
                                                        always
                                                        online to help via WhatsApp, Phone, Email & Facebook
                                                        Messenger
                                                    </li>
                                                    <li>
                                                        CRB-Checked Drivers – All of our drivers are CRB checked
                                                        providing
                                                        you with a safe taxi experience
                                                    </li>
                                                    <li>
                                                        Flight Tracking – Worried about a delay or early arrival?
                                                        Our
                                                        drivers check the flight status to ensure you aren’t waiting
                                                        around
                                                    </li>
                                                    <li>
                                                        Meet & Greet – Airports can be confusing, our drivers will
                                                        meet you
                                                        at the arrival halls and help guide you to the car.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="tab-pane secndStep" role="tabpanel" id="step2">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <h3>Select Vehicle</h3>
                                            <div class="selectCar">
                                                <div class="carCard">
                                                    <div class="carIMg">
                                                        <img src="assets/img/Saloon-thumb.webp" alt="Saloon">
                                                    </div>
                                                    <div class="carData">
                                                        <div class="titleRow">
                                                            <h4>Saloon</h4>
                                                            <span>Select</span>
                                                        </div>
                                                        <h2>£234</h2>
                                                        <div class="descData">
                                                            <p>
                                                                Up to 3 passengers plus 3 standard suitcases (23kg max),
                                                                or 4 passengers plus hand luggage. Ford Mondeo or VW
                                                                Passat or similar.
                                                            </p>
                                                            <ul>
                                                                <li>
                                                                    <img src="assets/img/luggage.png" alt="Luggage">
                                                                    <span>4</span>
                                                                </li>
                                                                <li>
                                                                    <img src="assets/img/passenger.png" alt="Passengers">
                                                                    <span>4</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7"></div>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step3">
                                    <h4 class="text-center">Step 3</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Account Name *</label>
                                                <input class="form-control" type="text" name="name" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Demo</label>
                                                <input class="form-control" type="text" name="name" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Inout</label>
                                                <input class="form-control" type="text" name="name" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Information</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Select
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Number *</label>
                                                <input class="form-control" type="text" name="name" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Input Number</label>
                                                <input class="form-control" type="text" name="name" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button>
                                        </li>
                                        <li><button type="button" class="default-btn next-step skip-btn">Skip</button>
                                        </li>
                                        <li><button type="button" class="default-btn next-step">Continue</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step4">
                                    <h4 class="text-center">Step 4</h4>
                                    <div class="all-info-container">
                                        <div class="list-content">
                                            <a href="#listone" data-toggle="collapse" aria-expanded="false"
                                                aria-controls="listone">Collapse 1 <i
                                                    class="fa fa-chevron-down"></i></a>
                                            <div class="collapse" id="listone">
                                                <div class="list-box">
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>First and Last Name *</label>
                                                                <input class="form-control" type="text" name="name"
                                                                    placeholder="" disabled="disabled">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Phone Number *</label>
                                                                <input class="form-control" type="text" name="name"
                                                                    placeholder="" disabled="disabled">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <a href="#listtwo" data-toggle="collapse" aria-expanded="false"
                                                aria-controls="listtwo">Collapse 2 <i
                                                    class="fa fa-chevron-down"></i></a>
                                            <div class="collapse" id="listtwo">
                                                <div class="list-box">
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Address 1 *</label>
                                                                <input class="form-control" type="text" name="name"
                                                                    placeholder="" disabled="disabled">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>City / Town *</label>
                                                                <input class="form-control" type="text" name="name"
                                                                    placeholder="" disabled="disabled">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Country *</label>
                                                                <select name="country2" class="form-control"
                                                                    id="country2" disabled="disabled">
                                                                    <option value="NG" selected="selected">
                                                                        Nigeria
                                                                    </option>
                                                                    <option value="NU">Niue</option>
                                                                    <option value="NF">Norfolk Island</option>
                                                                    <option value="KP">North Korea</option>
                                                                    <option value="MP">Northern Mariana Islands
                                                                    </option>
                                                                    <option value="NO">Norway</option>
                                                                </select>
                                                            </div>
                                                        </div>



                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Legal Form</label>
                                                                <select name="legalform2" class="form-control"
                                                                    id="legalform2" disabled="disabled">
                                                                    <option value="" selected="selected">-Select
                                                                        an
                                                                        Answer-</option>
                                                                    <option value="AG">Limited liability company
                                                                    </option>
                                                                    <option value="GmbH">Public Company</option>
                                                                    <option value="GbR">No minimum capital,
                                                                        unlimited
                                                                        liability of partners, non-busines
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Business Registration No.</label>
                                                                <input class="form-control" type="text" name="name"
                                                                    placeholder="" disabled="disabled">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Registered</label>
                                                                <select name="vat2" class="form-control" id="vat2"
                                                                    disabled="disabled">
                                                                    <option value="" selected="selected">-Select
                                                                        an
                                                                        Answer-</option>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Seller</label>
                                                                <input class="form-control" type="text" name="name"
                                                                    placeholder="" disabled="disabled">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Company Name *</label>
                                                                <input class="form-control" type="password" name="name"
                                                                    placeholder="" disabled="disabled">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <a href="#listthree" data-toggle="collapse" aria-expanded="false"
                                                aria-controls="listthree">Collapse 3 <i
                                                    class="fa fa-chevron-down"></i></a>
                                            <div class="collapse" id="listthree">
                                                <div class="list-box">
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Name *</label>
                                                                <input class="form-control" type="text" name="name"
                                                                    placeholder="">
                                                            </div>
                                                        </div>


                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Number *</label>
                                                                <input class="form-control" type="text" name="name"
                                                                    placeholder="">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button>
                                        </li>
                                        <li><button type="button" class="default-btn next-step">Finish</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include './components/body-scripts.php'; ?>
</body>

</html>