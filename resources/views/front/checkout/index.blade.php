@extends('front.layouts.app')

@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">Checkout</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a>
                    </li>
                    <li class="page-item">Checkout</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- checkout page area start here  -->
    <section class="page-content section">
        <div class="checkout">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="checkout-form">
                            <form method="post" action="checkout.html/order" id="paymentForm">
                                <input type="hidden" name="_token" value="z8IzV1IjwBDBzh2xk5mWIRncryxtnW1G2NyKj67x">
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <div
                                            class="checkout-page-login-box d-flex justify-content-between align-items-center mb-30">
                                            <h2 class="mb-0 text-capitalize fw-bold">Returning buyer? Please login:</h2>
                                            <button type="button" class="primary-btn" data-bs-toggle="modal"
                                                data-bs-target="#loginModal">Login</button>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <h2 class="checkout-title">Billing Address</h2>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="billing_name"
                                                name="billing_name" placeholder="You Name Here" value="" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="billing_email"
                                                name="billing_email" placeholder="Email Address" value="" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="billing_street_address"
                                                name="billing_street_address" placeholder="Street Address" value=""
                                                required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="billing_state"
                                                name="billing_state" placeholder="State" value="" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="billing_zipcode"
                                                name="billing_zipcode" placeholder="Zip/Postal Code" value=""
                                                required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <select class="form-select" id="billing_country" name="billing_country"
                                            required>
                                            <option>Country</option>
                                            <option value="Afghanistan">
                                                Afghanistan</option>
                                            <option value="Aland Islands">
                                                Aland Islands</option>
                                            <option value="Albania">
                                                Albania</option>
                                            <option value="Algeria">
                                                Algeria</option>
                                            <option value="American Samoa">
                                                American Samoa</option>
                                            <option value="Andorra">
                                                Andorra</option>
                                            <option value="Angola">
                                                Angola</option>
                                            <option value="Anguilla">
                                                Anguilla</option>
                                            <option value="Antarctica">
                                                Antarctica</option>
                                            <option value="Antigua and Barbuda">
                                                Antigua and Barbuda</option>
                                            <option value="Argentina">
                                                Argentina</option>
                                            <option value="Armenia">
                                                Armenia</option>
                                            <option value="Aruba">
                                                Aruba</option>
                                            <option value="Australia">
                                                Australia</option>
                                            <option value="Austria">
                                                Austria</option>
                                            <option value="Azerbaijan">
                                                Azerbaijan</option>
                                            <option value="Bahamas">
                                                Bahamas</option>
                                            <option value="Bahrain">
                                                Bahrain</option>
                                            <option value="Bangladesh">
                                                Bangladesh</option>
                                            <option value="Barbados">
                                                Barbados</option>
                                            <option value="Belarus">
                                                Belarus</option>
                                            <option value="Belgium">
                                                Belgium</option>
                                            <option value="Belize">
                                                Belize</option>
                                            <option value="Benin">
                                                Benin</option>
                                            <option value="Bermuda">
                                                Bermuda</option>
                                            <option value="Bhutan">
                                                Bhutan</option>
                                            <option value="Bolivia">
                                                Bolivia</option>
                                            <option value="Bonaire, Sint Eustatius and Saba">
                                                Bonaire, Sint Eustatius and Saba</option>
                                            <option value="Bosnia and Herzegovina">
                                                Bosnia and Herzegovina</option>
                                            <option value="Botswana">
                                                Botswana</option>
                                            <option value="Bouvet Island">
                                                Bouvet Island</option>
                                            <option value="Brazil">
                                                Brazil</option>
                                            <option value="British Indian Ocean Territory">
                                                British Indian Ocean Territory</option>
                                            <option value="Brunei Darussalam">
                                                Brunei Darussalam</option>
                                            <option value="Bulgaria">
                                                Bulgaria</option>
                                            <option value="Burkina Faso">
                                                Burkina Faso</option>
                                            <option value="Burundi">
                                                Burundi</option>
                                            <option value="Cambodia">
                                                Cambodia</option>
                                            <option value="Cameroon">
                                                Cameroon</option>
                                            <option value="Canada">
                                                Canada</option>
                                            <option value="Cape Verde">
                                                Cape Verde</option>
                                            <option value="Cayman Islands">
                                                Cayman Islands</option>
                                            <option value="Central African Republic">
                                                Central African Republic</option>
                                            <option value="Chad">
                                                Chad</option>
                                            <option value="Chile">
                                                Chile</option>
                                            <option value="China">
                                                China</option>
                                            <option value="Christmas Island">
                                                Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">
                                                Cocos (Keeling) Islands</option>
                                            <option value="Colombia">
                                                Colombia</option>
                                            <option value="Comoros">
                                                Comoros</option>
                                            <option value="Congo">
                                                Congo</option>
                                            <option value="Congo, the Democratic Republic of the">
                                                Congo, the Democratic Republic of the</option>
                                            <option value="Cook Islands">
                                                Cook Islands</option>
                                            <option value="Costa Rica">
                                                Costa Rica</option>
                                            <option value="Cote D&#039;Ivoire">
                                                Cote D&#039;Ivoire</option>
                                            <option value="Croatia">
                                                Croatia</option>
                                            <option value="Cuba">
                                                Cuba</option>
                                            <option value="Curacao">
                                                Curacao</option>
                                            <option value="Cyprus">
                                                Cyprus</option>
                                            <option value="Czech Republic">
                                                Czech Republic</option>
                                            <option value="Denmark">
                                                Denmark</option>
                                            <option value="Djibouti">
                                                Djibouti</option>
                                            <option value="Dominica">
                                                Dominica</option>
                                            <option value="Dominican Republic">
                                                Dominican Republic</option>
                                            <option value="Ecuador">
                                                Ecuador</option>
                                            <option value="Egypt">
                                                Egypt</option>
                                            <option value="El Salvador">
                                                El Salvador</option>
                                            <option value="Equatorial Guinea">
                                                Equatorial Guinea</option>
                                            <option value="Eritrea">
                                                Eritrea</option>
                                            <option value="Estonia">
                                                Estonia</option>
                                            <option value="Ethiopia">
                                                Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">
                                                Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands">
                                                Faroe Islands</option>
                                            <option value="Fiji">
                                                Fiji</option>
                                            <option value="Finland">
                                                Finland</option>
                                            <option value="France">
                                                France</option>
                                            <option value="French Guiana">
                                                French Guiana</option>
                                            <option value="French Polynesia">
                                                French Polynesia</option>
                                            <option value="French Southern Territories">
                                                French Southern Territories</option>
                                            <option value="Gabon">
                                                Gabon</option>
                                            <option value="Gambia">
                                                Gambia</option>
                                            <option value="Georgia">
                                                Georgia</option>
                                            <option value="Germany">
                                                Germany</option>
                                            <option value="Ghana">
                                                Ghana</option>
                                            <option value="Gibraltar">
                                                Gibraltar</option>
                                            <option value="Greece">
                                                Greece</option>
                                            <option value="Greenland">
                                                Greenland</option>
                                            <option value="Grenada">
                                                Grenada</option>
                                            <option value="Guadeloupe">
                                                Guadeloupe</option>
                                            <option value="Guam">
                                                Guam</option>
                                            <option value="Guatemala">
                                                Guatemala</option>
                                            <option value="Guernsey">
                                                Guernsey</option>
                                            <option value="Guinea">
                                                Guinea</option>
                                            <option value="Guinea-Bissau">
                                                Guinea-Bissau</option>
                                            <option value="Guyana">
                                                Guyana</option>
                                            <option value="Haiti">
                                                Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">
                                                Heard Island and Mcdonald Islands</option>
                                            <option value="Holy See (Vatican City State)">
                                                Holy See (Vatican City State)</option>
                                            <option value="Honduras">
                                                Honduras</option>
                                            <option value="Hong Kong">
                                                Hong Kong</option>
                                            <option value="Hungary">
                                                Hungary</option>
                                            <option value="Iceland">
                                                Iceland</option>
                                            <option value="India">
                                                India</option>
                                            <option value="Indonesia">
                                                Indonesia</option>
                                            <option value="Iran, Islamic Republic of">
                                                Iran, Islamic Republic of</option>
                                            <option value="Iraq">
                                                Iraq</option>
                                            <option value="Ireland">
                                                Ireland</option>
                                            <option value="Isle of Man">
                                                Isle of Man</option>
                                            <option value="Israel">
                                                Israel</option>
                                            <option value="Italy">
                                                Italy</option>
                                            <option value="Jamaica">
                                                Jamaica</option>
                                            <option value="Japan">
                                                Japan</option>
                                            <option value="Jersey">
                                                Jersey</option>
                                            <option value="Jordan">
                                                Jordan</option>
                                            <option value="Kazakhstan">
                                                Kazakhstan</option>
                                            <option value="Kenya">
                                                Kenya</option>
                                            <option value="Kiribati">
                                                Kiribati</option>
                                            <option value="Korea, Democratic People&#039;s Republic of">
                                                Korea, Democratic People&#039;s Republic of</option>
                                            <option value="Korea, Republic of">
                                                Korea, Republic of</option>
                                            <option value="Kosovo">
                                                Kosovo</option>
                                            <option value="Kuwait">
                                                Kuwait</option>
                                            <option value="Kyrgyzstan">
                                                Kyrgyzstan</option>
                                            <option value="Lao People&#039;s Democratic Republic">
                                                Lao People&#039;s Democratic Republic</option>
                                            <option value="Latvia">
                                                Latvia</option>
                                            <option value="Lebanon">
                                                Lebanon</option>
                                            <option value="Lesotho">
                                                Lesotho</option>
                                            <option value="Liberia">
                                                Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">
                                                Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">
                                                Liechtenstein</option>
                                            <option value="Lithuania">
                                                Lithuania</option>
                                            <option value="Luxembourg">
                                                Luxembourg</option>
                                            <option value="Macao">
                                                Macao</option>
                                            <option value="Macedonia, the Former Yugoslav Republic of">
                                                Macedonia, the Former Yugoslav Republic of</option>
                                            <option value="Madagascar">
                                                Madagascar</option>
                                            <option value="Malawi">
                                                Malawi</option>
                                            <option value="Malaysia">
                                                Malaysia</option>
                                            <option value="Maldives">
                                                Maldives</option>
                                            <option value="Mali">
                                                Mali</option>
                                            <option value="Malta">
                                                Malta</option>
                                            <option value="Marshall Islands">
                                                Marshall Islands</option>
                                            <option value="Martinique">
                                                Martinique</option>
                                            <option value="Mauritania">
                                                Mauritania</option>
                                            <option value="Mauritius">
                                                Mauritius</option>
                                            <option value="Mayotte">
                                                Mayotte</option>
                                            <option value="Mexico">
                                                Mexico</option>
                                            <option value="Micronesia, Federated States of">
                                                Micronesia, Federated States of</option>
                                            <option value="Moldova, Republic of">
                                                Moldova, Republic of</option>
                                            <option value="Monaco">
                                                Monaco</option>
                                            <option value="Mongolia">
                                                Mongolia</option>
                                            <option value="Montenegro">
                                                Montenegro</option>
                                            <option value="Montserrat">
                                                Montserrat</option>
                                            <option value="Morocco">
                                                Morocco</option>
                                            <option value="Mozambique">
                                                Mozambique</option>
                                            <option value="Myanmar">
                                                Myanmar</option>
                                            <option value="Namibia">
                                                Namibia</option>
                                            <option value="Nauru">
                                                Nauru</option>
                                            <option value="Nepal">
                                                Nepal</option>
                                            <option value="Netherlands">
                                                Netherlands</option>
                                            <option value="Netherlands Antilles">
                                                Netherlands Antilles</option>
                                            <option value="New Caledonia">
                                                New Caledonia</option>
                                            <option value="New Zealand">
                                                New Zealand</option>
                                            <option value="Nicaragua">
                                                Nicaragua</option>
                                            <option value="Niger">
                                                Niger</option>
                                            <option value="Nigeria">
                                                Nigeria</option>
                                            <option value="Niue">
                                                Niue</option>
                                            <option value="Norfolk Island">
                                                Norfolk Island</option>
                                            <option value="Northern Mariana Islands">
                                                Northern Mariana Islands</option>
                                            <option value="Norway">
                                                Norway</option>
                                            <option value="Oman">
                                                Oman</option>
                                            <option value="Pakistan">
                                                Pakistan</option>
                                            <option value="Palau">
                                                Palau</option>
                                            <option value="Palestinian Territory, Occupied">
                                                Palestinian Territory, Occupied</option>
                                            <option value="Panama">
                                                Panama</option>
                                            <option value="Papua New Guinea">
                                                Papua New Guinea</option>
                                            <option value="Paraguay">
                                                Paraguay</option>
                                            <option value="Peru">
                                                Peru</option>
                                            <option value="Philippines">
                                                Philippines</option>
                                            <option value="Pitcairn">
                                                Pitcairn</option>
                                            <option value="Poland">
                                                Poland</option>
                                            <option value="Portugal">
                                                Portugal</option>
                                            <option value="Puerto Rico">
                                                Puerto Rico</option>
                                            <option value="Qatar">
                                                Qatar</option>
                                            <option value="Reunion">
                                                Reunion</option>
                                            <option value="Romania">
                                                Romania</option>
                                            <option value="Russian Federation">
                                                Russian Federation</option>
                                            <option value="Rwanda">
                                                Rwanda</option>
                                            <option value="Saint Barthelemy">
                                                Saint Barthelemy</option>
                                            <option value="Saint Helena">
                                                Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">
                                                Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">
                                                Saint Lucia</option>
                                            <option value="Saint Martin">
                                                Saint Martin</option>
                                            <option value="Saint Pierre and Miquelon">
                                                Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and the Grenadines">
                                                Saint Vincent and the Grenadines</option>
                                            <option value="Samoa">
                                                Samoa</option>
                                            <option value="San Marino">
                                                San Marino</option>
                                            <option value="Sao Tome and Principe">
                                                Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">
                                                Saudi Arabia</option>
                                            <option value="Senegal">
                                                Senegal</option>
                                            <option value="Serbia">
                                                Serbia</option>
                                            <option value="Serbia and Montenegro">
                                                Serbia and Montenegro</option>
                                            <option value="Seychelles">
                                                Seychelles</option>
                                            <option value="Sierra Leone">
                                                Sierra Leone</option>
                                            <option value="Singapore">
                                                Singapore</option>
                                            <option value="Sint Maarten">
                                                Sint Maarten</option>
                                            <option value="Slovakia">
                                                Slovakia</option>
                                            <option value="Slovenia">
                                                Slovenia</option>
                                            <option value="Solomon Islands">
                                                Solomon Islands</option>
                                            <option value="Somalia">
                                                Somalia</option>
                                            <option value="South Africa">
                                                South Africa</option>
                                            <option value="South Georgia and the South Sandwich Islands">
                                                South Georgia and the South Sandwich Islands</option>
                                            <option value="South Sudan">
                                                South Sudan</option>
                                            <option value="Spain">
                                                Spain</option>
                                            <option value="Sri Lanka">
                                                Sri Lanka</option>
                                            <option value="Sudan">
                                                Sudan</option>
                                            <option value="Suriname">
                                                Suriname</option>
                                            <option value="Svalbard and Jan Mayen">
                                                Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">
                                                Swaziland</option>
                                            <option value="Sweden">
                                                Sweden</option>
                                            <option value="Switzerland">
                                                Switzerland</option>
                                            <option value="Syrian Arab Republic">
                                                Syrian Arab Republic</option>
                                            <option value="Taiwan, Province of China">
                                                Taiwan, Province of China</option>
                                            <option value="Tajikistan">
                                                Tajikistan</option>
                                            <option value="Tanzania, United Republic of">
                                                Tanzania, United Republic of</option>
                                            <option value="Thailand">
                                                Thailand</option>
                                            <option value="Timor-Leste">
                                                Timor-Leste</option>
                                            <option value="Togo">
                                                Togo</option>
                                            <option value="Tokelau">
                                                Tokelau</option>
                                            <option value="Tonga">
                                                Tonga</option>
                                            <option value="Trinidad and Tobago">
                                                Trinidad and Tobago</option>
                                            <option value="Tunisia">
                                                Tunisia</option>
                                            <option value="Turkey">
                                                Turkey</option>
                                            <option value="Turkmenistan">
                                                Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">
                                                Turks and Caicos Islands</option>
                                            <option value="Tuvalu">
                                                Tuvalu</option>
                                            <option value="Uganda">
                                                Uganda</option>
                                            <option value="Ukraine">
                                                Ukraine</option>
                                            <option value="United Arab Emirates">
                                                United Arab Emirates</option>
                                            <option value="United Kingdom">
                                                United Kingdom</option>
                                            <option value="United States">
                                                United States</option>
                                            <option value="United States Minor Outlying Islands">
                                                United States Minor Outlying Islands</option>
                                            <option value="Uruguay">
                                                Uruguay</option>
                                            <option value="Uzbekistan">
                                                Uzbekistan</option>
                                            <option value="Vanuatu">
                                                Vanuatu</option>
                                            <option value="Venezuela">
                                                Venezuela</option>
                                            <option value="Viet Nam">
                                                Viet Nam</option>
                                            <option value="Virgin Islands, British">
                                                Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.s.">
                                                Virgin Islands, U.s.</option>
                                            <option value="Wallis and Futuna">
                                                Wallis and Futuna</option>
                                            <option value="Western Sahara">
                                                Western Sahara</option>
                                            <option value="Yemen">
                                                Yemen</option>
                                            <option value="Zambia">
                                                Zambia</option>
                                            <option value="Zimbabwe">
                                                Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="pt-5"></div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 class="checkout-title">Shipping Address</h2>
                                    </div>
                                    <div class="form-group form-check terms-agree">
                                        <input type="checkbox" class="form-check-input " id="copy_address" />
                                        <label class="form-check-label" for="copy_address">Same as billing
                                            address</label>
                                    </div>
                                    <div class="pt-2"></div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="shipping_name"
                                                name="shipping_name" placeholder="You Name Here" value="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="shipping_email"
                                                name="shipping_email" placeholder="Email Address" value="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="shipping_street_address"
                                                name="shipping_street_address" placeholder="Street Address" value="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="shipping_state"
                                                name="shipping_state" placeholder="State" value="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="shipping_zipcode"
                                                name="shipping_zipcode" placeholder="Zip/Postal Code" value="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <select class="form-select" id="shipping_country" name="shipping_country">
                                            <option>Country</option>
                                            <option value="Afghanistan">
                                                Afghanistan
                                            </option>
                                            <option value="Aland Islands">
                                                Aland Islands
                                            </option>
                                            <option value="Albania">
                                                Albania
                                            </option>
                                            <option value="Algeria">
                                                Algeria
                                            </option>
                                            <option value="American Samoa">
                                                American Samoa
                                            </option>
                                            <option value="Andorra">
                                                Andorra
                                            </option>
                                            <option value="Angola">
                                                Angola
                                            </option>
                                            <option value="Anguilla">
                                                Anguilla
                                            </option>
                                            <option value="Antarctica">
                                                Antarctica
                                            </option>
                                            <option value="Antigua and Barbuda">
                                                Antigua and Barbuda
                                            </option>
                                            <option value="Argentina">
                                                Argentina
                                            </option>
                                            <option value="Armenia">
                                                Armenia
                                            </option>
                                            <option value="Aruba">
                                                Aruba
                                            </option>
                                            <option value="Australia">
                                                Australia
                                            </option>
                                            <option value="Austria">
                                                Austria
                                            </option>
                                            <option value="Azerbaijan">
                                                Azerbaijan
                                            </option>
                                            <option value="Bahamas">
                                                Bahamas
                                            </option>
                                            <option value="Bahrain">
                                                Bahrain
                                            </option>
                                            <option value="Bangladesh">
                                                Bangladesh
                                            </option>
                                            <option value="Barbados">
                                                Barbados
                                            </option>
                                            <option value="Belarus">
                                                Belarus
                                            </option>
                                            <option value="Belgium">
                                                Belgium
                                            </option>
                                            <option value="Belize">
                                                Belize
                                            </option>
                                            <option value="Benin">
                                                Benin
                                            </option>
                                            <option value="Bermuda">
                                                Bermuda
                                            </option>
                                            <option value="Bhutan">
                                                Bhutan
                                            </option>
                                            <option value="Bolivia">
                                                Bolivia
                                            </option>
                                            <option value="Bonaire, Sint Eustatius and Saba">
                                                Bonaire, Sint Eustatius and Saba
                                            </option>
                                            <option value="Bosnia and Herzegovina">
                                                Bosnia and Herzegovina
                                            </option>
                                            <option value="Botswana">
                                                Botswana
                                            </option>
                                            <option value="Bouvet Island">
                                                Bouvet Island
                                            </option>
                                            <option value="Brazil">
                                                Brazil
                                            </option>
                                            <option value="British Indian Ocean Territory">
                                                British Indian Ocean Territory
                                            </option>
                                            <option value="Brunei Darussalam">
                                                Brunei Darussalam
                                            </option>
                                            <option value="Bulgaria">
                                                Bulgaria
                                            </option>
                                            <option value="Burkina Faso">
                                                Burkina Faso
                                            </option>
                                            <option value="Burundi">
                                                Burundi
                                            </option>
                                            <option value="Cambodia">
                                                Cambodia
                                            </option>
                                            <option value="Cameroon">
                                                Cameroon
                                            </option>
                                            <option value="Canada">
                                                Canada
                                            </option>
                                            <option value="Cape Verde">
                                                Cape Verde
                                            </option>
                                            <option value="Cayman Islands">
                                                Cayman Islands
                                            </option>
                                            <option value="Central African Republic">
                                                Central African Republic
                                            </option>
                                            <option value="Chad">
                                                Chad
                                            </option>
                                            <option value="Chile">
                                                Chile
                                            </option>
                                            <option value="China">
                                                China
                                            </option>
                                            <option value="Christmas Island">
                                                Christmas Island
                                            </option>
                                            <option value="Cocos (Keeling) Islands">
                                                Cocos (Keeling) Islands
                                            </option>
                                            <option value="Colombia">
                                                Colombia
                                            </option>
                                            <option value="Comoros">
                                                Comoros
                                            </option>
                                            <option value="Congo">
                                                Congo
                                            </option>
                                            <option value="Congo, the Democratic Republic of the">
                                                Congo, the Democratic Republic of the
                                            </option>
                                            <option value="Cook Islands">
                                                Cook Islands
                                            </option>
                                            <option value="Costa Rica">
                                                Costa Rica
                                            </option>
                                            <option value="Cote D&#039;Ivoire">
                                                Cote D&#039;Ivoire
                                            </option>
                                            <option value="Croatia">
                                                Croatia
                                            </option>
                                            <option value="Cuba">
                                                Cuba
                                            </option>
                                            <option value="Curacao">
                                                Curacao
                                            </option>
                                            <option value="Cyprus">
                                                Cyprus
                                            </option>
                                            <option value="Czech Republic">
                                                Czech Republic
                                            </option>
                                            <option value="Denmark">
                                                Denmark
                                            </option>
                                            <option value="Djibouti">
                                                Djibouti
                                            </option>
                                            <option value="Dominica">
                                                Dominica
                                            </option>
                                            <option value="Dominican Republic">
                                                Dominican Republic
                                            </option>
                                            <option value="Ecuador">
                                                Ecuador
                                            </option>
                                            <option value="Egypt">
                                                Egypt
                                            </option>
                                            <option value="El Salvador">
                                                El Salvador
                                            </option>
                                            <option value="Equatorial Guinea">
                                                Equatorial Guinea
                                            </option>
                                            <option value="Eritrea">
                                                Eritrea
                                            </option>
                                            <option value="Estonia">
                                                Estonia
                                            </option>
                                            <option value="Ethiopia">
                                                Ethiopia
                                            </option>
                                            <option value="Falkland Islands (Malvinas)">
                                                Falkland Islands (Malvinas)
                                            </option>
                                            <option value="Faroe Islands">
                                                Faroe Islands
                                            </option>
                                            <option value="Fiji">
                                                Fiji
                                            </option>
                                            <option value="Finland">
                                                Finland
                                            </option>
                                            <option value="France">
                                                France
                                            </option>
                                            <option value="French Guiana">
                                                French Guiana
                                            </option>
                                            <option value="French Polynesia">
                                                French Polynesia
                                            </option>
                                            <option value="French Southern Territories">
                                                French Southern Territories
                                            </option>
                                            <option value="Gabon">
                                                Gabon
                                            </option>
                                            <option value="Gambia">
                                                Gambia
                                            </option>
                                            <option value="Georgia">
                                                Georgia
                                            </option>
                                            <option value="Germany">
                                                Germany
                                            </option>
                                            <option value="Ghana">
                                                Ghana
                                            </option>
                                            <option value="Gibraltar">
                                                Gibraltar
                                            </option>
                                            <option value="Greece">
                                                Greece
                                            </option>
                                            <option value="Greenland">
                                                Greenland
                                            </option>
                                            <option value="Grenada">
                                                Grenada
                                            </option>
                                            <option value="Guadeloupe">
                                                Guadeloupe
                                            </option>
                                            <option value="Guam">
                                                Guam
                                            </option>
                                            <option value="Guatemala">
                                                Guatemala
                                            </option>
                                            <option value="Guernsey">
                                                Guernsey
                                            </option>
                                            <option value="Guinea">
                                                Guinea
                                            </option>
                                            <option value="Guinea-Bissau">
                                                Guinea-Bissau
                                            </option>
                                            <option value="Guyana">
                                                Guyana
                                            </option>
                                            <option value="Haiti">
                                                Haiti
                                            </option>
                                            <option value="Heard Island and Mcdonald Islands">
                                                Heard Island and Mcdonald Islands
                                            </option>
                                            <option value="Holy See (Vatican City State)">
                                                Holy See (Vatican City State)
                                            </option>
                                            <option value="Honduras">
                                                Honduras
                                            </option>
                                            <option value="Hong Kong">
                                                Hong Kong
                                            </option>
                                            <option value="Hungary">
                                                Hungary
                                            </option>
                                            <option value="Iceland">
                                                Iceland
                                            </option>
                                            <option value="India">
                                                India
                                            </option>
                                            <option value="Indonesia">
                                                Indonesia
                                            </option>
                                            <option value="Iran, Islamic Republic of">
                                                Iran, Islamic Republic of
                                            </option>
                                            <option value="Iraq">
                                                Iraq
                                            </option>
                                            <option value="Ireland">
                                                Ireland
                                            </option>
                                            <option value="Isle of Man">
                                                Isle of Man
                                            </option>
                                            <option value="Israel">
                                                Israel
                                            </option>
                                            <option value="Italy">
                                                Italy
                                            </option>
                                            <option value="Jamaica">
                                                Jamaica
                                            </option>
                                            <option value="Japan">
                                                Japan
                                            </option>
                                            <option value="Jersey">
                                                Jersey
                                            </option>
                                            <option value="Jordan">
                                                Jordan
                                            </option>
                                            <option value="Kazakhstan">
                                                Kazakhstan
                                            </option>
                                            <option value="Kenya">
                                                Kenya
                                            </option>
                                            <option value="Kiribati">
                                                Kiribati
                                            </option>
                                            <option value="Korea, Democratic People&#039;s Republic of">
                                                Korea, Democratic People&#039;s Republic of
                                            </option>
                                            <option value="Korea, Republic of">
                                                Korea, Republic of
                                            </option>
                                            <option value="Kosovo">
                                                Kosovo
                                            </option>
                                            <option value="Kuwait">
                                                Kuwait
                                            </option>
                                            <option value="Kyrgyzstan">
                                                Kyrgyzstan
                                            </option>
                                            <option value="Lao People&#039;s Democratic Republic">
                                                Lao People&#039;s Democratic Republic
                                            </option>
                                            <option value="Latvia">
                                                Latvia
                                            </option>
                                            <option value="Lebanon">
                                                Lebanon
                                            </option>
                                            <option value="Lesotho">
                                                Lesotho
                                            </option>
                                            <option value="Liberia">
                                                Liberia
                                            </option>
                                            <option value="Libyan Arab Jamahiriya">
                                                Libyan Arab Jamahiriya
                                            </option>
                                            <option value="Liechtenstein">
                                                Liechtenstein
                                            </option>
                                            <option value="Lithuania">
                                                Lithuania
                                            </option>
                                            <option value="Luxembourg">
                                                Luxembourg
                                            </option>
                                            <option value="Macao">
                                                Macao
                                            </option>
                                            <option value="Macedonia, the Former Yugoslav Republic of">
                                                Macedonia, the Former Yugoslav Republic of
                                            </option>
                                            <option value="Madagascar">
                                                Madagascar
                                            </option>
                                            <option value="Malawi">
                                                Malawi
                                            </option>
                                            <option value="Malaysia">
                                                Malaysia
                                            </option>
                                            <option value="Maldives">
                                                Maldives
                                            </option>
                                            <option value="Mali">
                                                Mali
                                            </option>
                                            <option value="Malta">
                                                Malta
                                            </option>
                                            <option value="Marshall Islands">
                                                Marshall Islands
                                            </option>
                                            <option value="Martinique">
                                                Martinique
                                            </option>
                                            <option value="Mauritania">
                                                Mauritania
                                            </option>
                                            <option value="Mauritius">
                                                Mauritius
                                            </option>
                                            <option value="Mayotte">
                                                Mayotte
                                            </option>
                                            <option value="Mexico">
                                                Mexico
                                            </option>
                                            <option value="Micronesia, Federated States of">
                                                Micronesia, Federated States of
                                            </option>
                                            <option value="Moldova, Republic of">
                                                Moldova, Republic of
                                            </option>
                                            <option value="Monaco">
                                                Monaco
                                            </option>
                                            <option value="Mongolia">
                                                Mongolia
                                            </option>
                                            <option value="Montenegro">
                                                Montenegro
                                            </option>
                                            <option value="Montserrat">
                                                Montserrat
                                            </option>
                                            <option value="Morocco">
                                                Morocco
                                            </option>
                                            <option value="Mozambique">
                                                Mozambique
                                            </option>
                                            <option value="Myanmar">
                                                Myanmar
                                            </option>
                                            <option value="Namibia">
                                                Namibia
                                            </option>
                                            <option value="Nauru">
                                                Nauru
                                            </option>
                                            <option value="Nepal">
                                                Nepal
                                            </option>
                                            <option value="Netherlands">
                                                Netherlands
                                            </option>
                                            <option value="Netherlands Antilles">
                                                Netherlands Antilles
                                            </option>
                                            <option value="New Caledonia">
                                                New Caledonia
                                            </option>
                                            <option value="New Zealand">
                                                New Zealand
                                            </option>
                                            <option value="Nicaragua">
                                                Nicaragua
                                            </option>
                                            <option value="Niger">
                                                Niger
                                            </option>
                                            <option value="Nigeria">
                                                Nigeria
                                            </option>
                                            <option value="Niue">
                                                Niue
                                            </option>
                                            <option value="Norfolk Island">
                                                Norfolk Island
                                            </option>
                                            <option value="Northern Mariana Islands">
                                                Northern Mariana Islands
                                            </option>
                                            <option value="Norway">
                                                Norway
                                            </option>
                                            <option value="Oman">
                                                Oman
                                            </option>
                                            <option value="Pakistan">
                                                Pakistan
                                            </option>
                                            <option value="Palau">
                                                Palau
                                            </option>
                                            <option value="Palestinian Territory, Occupied">
                                                Palestinian Territory, Occupied
                                            </option>
                                            <option value="Panama">
                                                Panama
                                            </option>
                                            <option value="Papua New Guinea">
                                                Papua New Guinea
                                            </option>
                                            <option value="Paraguay">
                                                Paraguay
                                            </option>
                                            <option value="Peru">
                                                Peru
                                            </option>
                                            <option value="Philippines">
                                                Philippines
                                            </option>
                                            <option value="Pitcairn">
                                                Pitcairn
                                            </option>
                                            <option value="Poland">
                                                Poland
                                            </option>
                                            <option value="Portugal">
                                                Portugal
                                            </option>
                                            <option value="Puerto Rico">
                                                Puerto Rico
                                            </option>
                                            <option value="Qatar">
                                                Qatar
                                            </option>
                                            <option value="Reunion">
                                                Reunion
                                            </option>
                                            <option value="Romania">
                                                Romania
                                            </option>
                                            <option value="Russian Federation">
                                                Russian Federation
                                            </option>
                                            <option value="Rwanda">
                                                Rwanda
                                            </option>
                                            <option value="Saint Barthelemy">
                                                Saint Barthelemy
                                            </option>
                                            <option value="Saint Helena">
                                                Saint Helena
                                            </option>
                                            <option value="Saint Kitts and Nevis">
                                                Saint Kitts and Nevis
                                            </option>
                                            <option value="Saint Lucia">
                                                Saint Lucia
                                            </option>
                                            <option value="Saint Martin">
                                                Saint Martin
                                            </option>
                                            <option value="Saint Pierre and Miquelon">
                                                Saint Pierre and Miquelon
                                            </option>
                                            <option value="Saint Vincent and the Grenadines">
                                                Saint Vincent and the Grenadines
                                            </option>
                                            <option value="Samoa">
                                                Samoa
                                            </option>
                                            <option value="San Marino">
                                                San Marino
                                            </option>
                                            <option value="Sao Tome and Principe">
                                                Sao Tome and Principe
                                            </option>
                                            <option value="Saudi Arabia">
                                                Saudi Arabia
                                            </option>
                                            <option value="Senegal">
                                                Senegal
                                            </option>
                                            <option value="Serbia">
                                                Serbia
                                            </option>
                                            <option value="Serbia and Montenegro">
                                                Serbia and Montenegro
                                            </option>
                                            <option value="Seychelles">
                                                Seychelles
                                            </option>
                                            <option value="Sierra Leone">
                                                Sierra Leone
                                            </option>
                                            <option value="Singapore">
                                                Singapore
                                            </option>
                                            <option value="Sint Maarten">
                                                Sint Maarten
                                            </option>
                                            <option value="Slovakia">
                                                Slovakia
                                            </option>
                                            <option value="Slovenia">
                                                Slovenia
                                            </option>
                                            <option value="Solomon Islands">
                                                Solomon Islands
                                            </option>
                                            <option value="Somalia">
                                                Somalia
                                            </option>
                                            <option value="South Africa">
                                                South Africa
                                            </option>
                                            <option value="South Georgia and the South Sandwich Islands">
                                                South Georgia and the South Sandwich Islands
                                            </option>
                                            <option value="South Sudan">
                                                South Sudan
                                            </option>
                                            <option value="Spain">
                                                Spain
                                            </option>
                                            <option value="Sri Lanka">
                                                Sri Lanka
                                            </option>
                                            <option value="Sudan">
                                                Sudan
                                            </option>
                                            <option value="Suriname">
                                                Suriname
                                            </option>
                                            <option value="Svalbard and Jan Mayen">
                                                Svalbard and Jan Mayen
                                            </option>
                                            <option value="Swaziland">
                                                Swaziland
                                            </option>
                                            <option value="Sweden">
                                                Sweden
                                            </option>
                                            <option value="Switzerland">
                                                Switzerland
                                            </option>
                                            <option value="Syrian Arab Republic">
                                                Syrian Arab Republic
                                            </option>
                                            <option value="Taiwan, Province of China">
                                                Taiwan, Province of China
                                            </option>
                                            <option value="Tajikistan">
                                                Tajikistan
                                            </option>
                                            <option value="Tanzania, United Republic of">
                                                Tanzania, United Republic of
                                            </option>
                                            <option value="Thailand">
                                                Thailand
                                            </option>
                                            <option value="Timor-Leste">
                                                Timor-Leste
                                            </option>
                                            <option value="Togo">
                                                Togo
                                            </option>
                                            <option value="Tokelau">
                                                Tokelau
                                            </option>
                                            <option value="Tonga">
                                                Tonga
                                            </option>
                                            <option value="Trinidad and Tobago">
                                                Trinidad and Tobago
                                            </option>
                                            <option value="Tunisia">
                                                Tunisia
                                            </option>
                                            <option value="Turkey">
                                                Turkey
                                            </option>
                                            <option value="Turkmenistan">
                                                Turkmenistan
                                            </option>
                                            <option value="Turks and Caicos Islands">
                                                Turks and Caicos Islands
                                            </option>
                                            <option value="Tuvalu">
                                                Tuvalu
                                            </option>
                                            <option value="Uganda">
                                                Uganda
                                            </option>
                                            <option value="Ukraine">
                                                Ukraine
                                            </option>
                                            <option value="United Arab Emirates">
                                                United Arab Emirates
                                            </option>
                                            <option value="United Kingdom">
                                                United Kingdom
                                            </option>
                                            <option value="United States">
                                                United States
                                            </option>
                                            <option value="United States Minor Outlying Islands">
                                                United States Minor Outlying Islands
                                            </option>
                                            <option value="Uruguay">
                                                Uruguay
                                            </option>
                                            <option value="Uzbekistan">
                                                Uzbekistan
                                            </option>
                                            <option value="Vanuatu">
                                                Vanuatu
                                            </option>
                                            <option value="Venezuela">
                                                Venezuela
                                            </option>
                                            <option value="Viet Nam">
                                                Viet Nam
                                            </option>
                                            <option value="Virgin Islands, British">
                                                Virgin Islands, British
                                            </option>
                                            <option value="Virgin Islands, U.s.">
                                                Virgin Islands, U.s.
                                            </option>
                                            <option value="Wallis and Futuna">
                                                Wallis and Futuna
                                            </option>
                                            <option value="Western Sahara">
                                                Western Sahara
                                            </option>
                                            <option value="Yemen">
                                                Yemen
                                            </option>
                                            <option value="Zambia">
                                                Zambia
                                            </option>
                                            <option value="Zimbabwe">
                                                Zimbabwe
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="checkout-title">Payment Method</h2>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="form-check card-check">
                                                    <input class="form-check-input" type="radio" name="payment"
                                                        id="paypal" value="paypal" />
                                                    <label class="form-check-label" for="paypal">PayPal</label>
                                                    <div class="input-icon">
                                                        <img src="assets/images/payment-gateway/paypal.png"
                                                            alt="paypal" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check card-check">
                                                    <input class="form-check-input" type="radio" name="payment"
                                                        id="creditcard" value="creditcard" />
                                                    <label class="form-check-label" for="creditcard">
                                                        Stripe</label>
                                                    <div class="input-icon">
                                                        <img src="assets/images/payment-gateway/payment-method.png"
                                                            alt="payment-method" />
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="payment_platform" id="payment_platform">
                                            <div class="card-infor-box mb-3 d-none" id="stripe-area">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label class="mt-3" for="card-element">
                                                            Card details:
                                                        </label>

                                                        <div id="cardElement"></div>

                                                        <small class="form-text text-muted" id="cardErrors"
                                                            role="alert"></small>

                                                        <input type="hidden" name="payment_method" id="paymentMethod">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check card-check">
                                                    <input class="form-check-input" type="radio" name="payment"
                                                        id="razorpay" value="razorpay" />
                                                    <label class="form-check-label" for="razorpay">Razorpay</label>
                                                    <div class="input-icon">
                                                        <img src="assets/images/payment-gateway/razorpay.png"
                                                            alt="razorpay" />
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="pay_to_razorpay" id="pay-to-razorpay"
                                                value="44634">
                                            <input type="hidden" name="razorpay_key" id="razorpay-key" value="">
                                            <input type="hidden" name="razorpay_payment_id" id="razorpay-payment-id">
                                            <div class="form-group">
                                                <div class="form-check card-check">
                                                    <input class="form-check-input" type="radio" name="payment"
                                                        id="bank" value="bank" />
                                                    <label class="form-check-label" for="bank">
                                                        Bank</label>
                                                    <div class="input-icon">
                                                        <img src="assets/images/payment-gateway/bank.png"
                                                            alt="payment-method" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-infor-box mb-3 d-none" id="bank-area">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <label class="mt-3" for="bank-trans-num">
                                                                Transaction Number:
                                                            </label>
                                                            <input type="text" name="bank_transaction_number"
                                                                id="bank-trans-num" class="form-control"
                                                                placeholder="Enter Your Transaction Number" />
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="mt-3">
                                                                <b>Bank Account Details:</b> <br>
                                                                Bank Name:
                                                                bank
                                                                <br>
                                                                Account Number:
                                                                <br>
                                                                Account Holder:
                                                                <br>
                                                                Branch:
                                                                us <br>
                                                                Swift Code:
                                                                <br>
                                                                Routing Number:
                                                                asdf <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check card-check">
                                                    <input class="form-check-input" type="radio" name="payment"
                                                        id="sslcommerz" value="sslcommerz" />
                                                    <label class="form-check-label" for="sslcommerz">Sslcommerz</label>
                                                    <div class="input-icon">
                                                        <img src="assets/images/payment-gateway/sslcommerz.png"
                                                            alt="sslcommerz" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check card-check">
                                                    <input class="form-check-input" type="radio" name="payment" id="COD"
                                                        value="COD" />
                                                    <label class="form-check-label" for="COD">Cash On Delivey</label>
                                                    <div class="input-icon">
                                                        <img src="assets/images/payment-gateway/cod.jpg"
                                                            alt="Cash On Delivey" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group form-check terms-agree">
                                                <input type="checkbox" class="form-check-input" id="agree" required />
                                                <label class="form-check-label" for="agree">By clicking the button you
                                                    agree to our
                                                    <a href="terms.html">Terms &amp; Conditions</a></label>
                                            </div>
                                            <button type="button" class="checkout-btn" data-bs-toggle="modal"
                                                data-bs-target="#loginModal">Place Order</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade common-modal" id="show-razor-thanks" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">
                                                    Razorpay Confirmation</h5>
                                            </div>
                                            <div class="modal-body">
                                                Your payment is authorized. For capturing your order click
                                                <b>Place Order</b>
                                                <div class="modal-btn-wrap text-end">
                                                    <button type="submit" class="primary-btn">Place Order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="cart-summary">
                            <div class="summary-top d-flex">
                                <h2>Cart Summary</h2>
                                <a class="edite-btn" href="/cart/content">Edit</a>
                            </div>
                            <ul class="cart-product-list">
                                <li class="single-cart-product d-flex justify-content-between">
                                    <div class="product-info">
                                        <h3>1 Plaid Cotton Shirt</h3>
                                        <p>Size:
                                            Free Size
                                        </p>
                                        <p class="checkout-page-color-show">Color: Any Color
                                        </p>
                                    </div>
                                    <div class="price-area">
                                        <h3 class="price">
                                            $ 90
                                        </h3>
                                    </div>
                                </li>
                                <li class="single-cart-product d-flex justify-content-between">
                                    <div class="product-info">
                                        <h3>1 Rosmo Namino</h3>
                                        <p>Size:
                                            Free Size
                                        </p>
                                        <p class="checkout-page-color-show">Color: Any Color
                                        </p>
                                    </div>
                                    <div class="price-area">
                                        <h3 class="price">
                                            $ 450
                                        </h3>
                                    </div>
                                </li>

                            </ul>
                            <!-- Cart page bottom box -->
                            <div class="col-lg-12 col-md-12">
                                <div class="checkout-discount-box">
                                    <h2 class="mb-3">Discount Codes</h2>
                                    <form action="/coupon/apply" method="post">
                                        <input type="hidden" name="_token"
                                            value="z8IzV1IjwBDBzh2xk5mWIRncryxtnW1G2NyKj67x">
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control" name="coupon_code"
                                                placeholder="Enter your coupon code" required />
                                            <button type="submit" class="border-0 px-4">Apply Coupon</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <ul class="summary-list">
                                <li>Subtotal
                                    <span>$ 540</span>
                                </li>
                                <li>Shipping Cost <span id="delivery-charge-curr"></span></li>
                                <li>VAT/Tax <span id="tax-show-curr">$ 0</span>
                                </li>

                            </ul>
                            <div class="total-amount">
                                <h3>
                                    Total Cost
                                    <span class="float-right" id="total-cost-curr">
                                        $ 600
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection