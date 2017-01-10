<!-- /**
 * Created by PhpStorm.
 * User: amontes
 * Date: 12/13/2016
 * Time: 10:26 AM
 */  -->
@extends('template.main')

@section('title')
    Dashboard Upload Files
@endsection

@section('content')
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/menu/dashboard') }}">
    {{ csrf_field() }}

    <!-- Form Name -->
        <legend>Upload Data</legend>
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                <strong>Success:</strong>{{Session::get('success')}}
            </div>
    @endif

    <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="sold_to_part_key">SoldTo:</label>
            <div class="col-md-4">
                <input id="sold_to_part_key" maxlength="10" name="sold_to_part_key" type="text"
                       placeholder="SoldTo Number" class="form-control input-md" onkeypress="return valida(event)"
                       required>
            </div>
        </div>


        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="account_name">Account Name</label>
            <div class="col-md-4">
                <select id="account_name" name="account_name" class="form-control">
                    <option value="ALCATEL LUCENT">ALCATEL LUCENT</option>
                    <option value="ALLERGAN">ALLERGAN</option>
                    <option value="ALLIANCE BOOTS">ALLIANCE BOOTS</option>
                    <option value="AMERICAN EXPRESS GBT">AMERICAN EXPRESS GBT</option>
                    <option value="APACHE CORP">APACHE CORP</option>
                    <option value="AREVA">AREVA</option>
                    <option value="ASML">ASML</option>
                    <option value="AT KEARNEY">AT KEARNEY</option>
                    <option value="ATOS">ATOS</option>
                    <option value="BALOISE GROUP (BASLER VER)">BALOISE GROUP (BASLER VER)</option>
                    <option value="BARNARDOS">BARNARDOS</option>
                    <option value="BNQ KINGFISHER PLC">BNQ KINGFISHER PLC</option>
                    <option value="BOEHRINGER INGELHEIM">BOEHRINGER INGELHEIM</option>
                    <option value="CISCO">CISCO</option>
                    <option value="COVESTRO">COVESTRO</option>
                    <option value="CYTEC INDUSTRIES INC">CYTEC INDUSTRIES INC</option>
                    <option value="ELI LILLY">ELI LILLY</option>
                    <option value="FRESENIUS">FRESENIUS</option>
                    <option value="FRESENIUS US - FENWAL INC.">FRESENIUS US - FENWAL INC.</option>
                    <option value="LAFARGE HOLCIM">LAFARGE HOLCIM</option>
                    <option value="MERCK">MERCK</option>
                    <option value="SCHNEIDER">SCHNEIDER</option>
                    <option value="ZF">ZF</option>
                    <option value="DEUTSCHE BANK">DEUTSCHE BANK</option>
                    <option value="FMC CORPORATION">FMC CORPORATION</option>
                    <option value="HOGG ROBINSON">HOGG ROBINSON</option>
                    <option value="JOHN BEAN TECHNOLOGIES CORPORATION">JOHN BEAN TECHNOLOGIES CORPORATION</option>
                    <option value="KIENBAUM">KIENBAUM</option>
                    <option value="LA PRESSE LTEE">LA PRESSE LTEE</option>
                    <option value="LONZA">LONZA</option>
                    <option value="LOWES">LOWES</option>
                    <option value="MALLINCKRODT PHARMACEUTICALS">MALLINCKRODT PHARMACEUTICALS</option>
                    <option value="MAN SE DENMARK">MAN SE DENMARK</option>
                    <option value="MILLIKEN">MILLIKEN</option>
                    <option value="OUTOTEC">OUTOTEC</option>
                    <option value="PALL CORP">PALL CORP</option>
                    <option value="PROGRESS SOFTWARE">PROGRESS SOFTWARE</option>
                    <option value="RCR TOMLINSON">RCR TOMLINSON</option>
                    <option value="STADT WINTERTHUR">STADT WINTERTHUR</option>
                    <option value="TIETOENATOR">TIETOENATOR</option>
                    <option value="UBISOFT">UBISOFT</option>
                    <option value="UNDERWRITERS LABORATORIES">UNDERWRITERS LABORATORIES</option>
                    <option value="UPM NOT HCL INTERNATIONAL NEW ACCOUNT">UPM NOT HCL INTERNATIONAL NEW ACCOUNT</option>
                    <option value="VEOLIA">VEOLIA</option>
                    <option value="WUERTH">WUERTH</option>
                    <option value="ALCOA">ALCOA</option>
                    <option value="BAYER">BAYER</option>
                    <option value="CAPGEMINI">CAPGEMINI</option>
                    <option value="CLARIANT">CLARIANT</option>
                    <option value="COCA-COLA TCCC">COCA-COLA TCCC</option>
                    <option value="DEUTSCHE BAHN">DEUTSCHE BAHN</option>
                    <option value="ERNST AND YOUNG">ERNST AND YOUNG</option>
                    <option value="FERRING">FERRING</option>
                    <option value="KONICA">KONICA</option>
                    <option value="NOVARTIS">NOVARTIS</option>
                    <option value="ST MICROELECTRONICS">ST MICROELECTRONICS</option>
                    <option value="TE CONNECTIVITY">TE CONNECTIVITY</option>
                    <option value="TECHINT">TECHINT</option>
                    <option value="THE LINDE GROUP">THE LINDE GROUP</option>
                    <option value="VALEO">VALEO</option>
                    <option value="VOITH">VOITH</option>
                    <option value="ADOBE GLOBAL">ADOBE GLOBAL</option>
                    <option value="BONDUELLE">BONDUELLE</option>
                    <option value="CARGOTEC OYJ">CARGOTEC OYJ</option>
                    <option value="COCA-COLA BOTTLERS">COCA-COLA BOTTLERS</option>
                    <option value="COGNIZANT">COGNIZANT</option>
                    <option value="COLGATE PALMOLIVE">COLGATE PALMOLIVE</option>
                    <option value="CRH EPD">CRH EPD</option>
                    <option value="CRH MATERIALS">CRH MATERIALS</option>
                    <option value="CRH NEW COMPANIES">CRH NEW COMPANIES</option>
                    <option value="DECATHLON">DECATHLON</option>
                    <option value="DELOITTE">DELOITTE</option>
                    <option value="DOW JONES GLOBAL">DOW JONES GLOBAL</option>
                    <option value="DRESSER RAND">DRESSER RAND</option>
                    <option value="EHLS GROUPE PHARMAGEST">EHLS GROUPE PHARMAGEST</option>
                    <option value="ENGEL">ENGEL</option>
                    <option value="ENPRO INDUSTRIES">ENPRO INDUSTRIES</option>
                    <option value="EUROMASTER">EUROMASTER</option>
                    <option value="EXPRESS SCRIPTS">EXPRESS SCRIPTS</option>
                    <option value="FARMERS">FARMERS</option>
                    <option value="HARPER COLLINS">HARPER COLLINS</option>
                    <option value="INTEL">INTEL</option>
                    <option value="JEPPESEN">JEPPESEN</option>
                    <option value="KIA">KIA</option>
                    <option value="KPMG">KPMG</option>
                    <option value="LEND LEASE - LE">LEND LEASE - LE</option>
                    <option value="MANPOWER">MANPOWER</option>
                    <option value="MCDONALDS">MCDONALDS</option>
                    <option value="MCKINSEY GLOBAL">MCKINSEY GLOBAL</option>
                    <option value="NOVO NORDISK">NOVO NORDISK</option>
                    <option value="PENSKE LOGISTICS">PENSKE LOGISTICS</option>
                    <option value="PEPSICO GLOBAL">PEPSICO GLOBAL</option>
                    <option value="PWC">PWC</option>
                    <option value="RICOH">RICOH</option>
                    <option value="SCHINDLER">SCHINDLER</option>
                    <option value="SIEMENS">SIEMENS</option>
                    <option value="ABB">ABB</option>
                    <option value="AIR FRANCE AND KLM">AIR FRANCE AND KLM</option>
                    <option value="ASTRA ZENECA">ASTRA ZENECA</option>
                    <option value="ATLAS COPCO">ATLAS COPCO</option>
                    <option value="AXA">AXA</option>
                    <option value="BECKMAN COULTER">BECKMAN COULTER</option>
                    <option value="BRITISH AIRWAYS">BRITISH AIRWAYS</option>
                    <option value="BRITISH AMERICAN TOBACCO">BRITISH AMERICAN TOBACCO</option>
                    <option value="CSC - ETS">CSC - ETS</option>
                    <option value="CSC - NATIONAL GRID">CSC - NATIONAL GRID</option>
                    <option value="CSC - WEX">CSC - WEX</option>
                    <option value="CSC PC STANDARDS">CSC PC STANDARDS</option>
                    <option value="CSC-LE">CSC-LE</option>
                    <option value="GLOBAL PAYMENTS">GLOBAL PAYMENTS</option>
                    <option value="GOOGLE INC">GOOGLE INC</option>
                    <option value="JOHNSON AND JOHNSON">JOHNSON AND JOHNSON</option>
                    <option value="PERKINELMER">PERKINELMER</option>
                    <option value="SANOFI AVENTIS-MERIAL">SANOFI AVENTIS-MERIAL</option>
                    <option value="SODEXO">SODEXO</option>
                    <option value="STANLEY BLACK AND DECKER">STANLEY BLACK AND DECKER</option>
                    <option value="TAKEDA">TAKEDA</option>
                    <option value="TCS">TCS</option>
                    <option value="TELETRAC">TELETRAC</option>
                    <option value="TOYOTA">TOYOTA</option>
                    <option value="TOYOTA RD">TOYOTA RD</option>
                    <option value="TOYOTAEMEA">TOYOTAEMEA</option>
                    <option value="T-SYSTEMS">T-SYSTEMS</option>
                    <option value="ZOETIS INC">ZOETIS INC</option>
                    <option value="ARCELOR MITTAL">ARCELOR MITTAL</option>
                    <option value="SAINT-GOBAIN GLOBAL">SAINT-GOBAIN GLOBAL</option>
                    <option value="DHL">DHL</option>
                    <option value="ORACLE OBI">ORACLE OBI</option>
                    <option value="ORACLE PDIT">ORACLE PDIT</option>
                    <option value="SGS GLOBAL">SGS GLOBAL</option>
                    <option value="ADECCO">ADECCO</option>
                    <option value="AMERICAN EXPRESS">AMERICAN EXPRESS</option>
                    <option value="COCA-COLA AMATIL">COCA-COLA AMATIL</option>
                    <option value="COCA-COLA ENTERPRISE">COCA-COLA ENTERPRISE</option>
                    <option value="GDF SUEZ">GDF SUEZ</option>
                    <option value="IBM CORP">IBM CORP</option>
                    <option value="MONSANTO">MONSANTO</option>
                    <option value="PFIZER">PFIZER</option>
                    <option value="TRW AUTOMOTIVE 1">TRW AUTOMOTIVE 1</option>
                    <option value="TRW AUTOMOTIVE 2">TRW AUTOMOTIVE 2</option>
                    <option value="WPP GLOBAL">WPP GLOBAL</option>
                    <option value="ABB WIPRO">ABB WIPRO</option>
                    <option value="AMDOCS">AMDOCS</option>
                    <option value="BUNGE">BUNGE</option>
                    <option value="CERIDIAN">CERIDIAN</option>
                    <option value="DURACELL">DURACELL</option>
                    <option value="FLETCHER BUILDING">FLETCHER BUILDING</option>
                    <option value="GSK">GSK</option>
                    <option value="HCL TECHNOLOGIES">HCL TECHNOLOGIES</option>
                    <option value="HITACHI">HITACHI</option>
                    <option value="ORANGE">ORANGE</option>
                    <option value="PROCTER AND GAMBLE">PROCTER AND GAMBLE</option>
                    <option value="SWISS RE">SWISS RE</option>
                    <option value="UNILEVER">UNILEVER</option>
                    <option value="UPS">UPS</option>
                    <option value="GOLD CORP INC">GOLD CORP INC</option>
                    <option value="LIBERTY MUTUAL">LIBERTY MUTUAL</option>
                </select>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="business_name">Business Name</label>
            <div class="col-md-4">
                <input type="text" id="business_name" name="business_name" maxlength="50"
                       placeholder="Business Name" class="form-control input-md" required>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="country">Country</label>
            <div class="col-md-4">
                <select id="country" name="country" class="form-control">
                    <option value="Afganistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bonaire">Bonaire</option>
                    <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Canary Islands">Canary Islands</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Channel Islands">Channel Islands</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos Island">Cocos Island</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote DIvoire">Cote D'Ivoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Curaco">Curacao</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="East Timor">East Timor</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands">Falkland Islands</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Ter">French Southern Ter</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Great Britain">Great Britain</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Hawaii">Hawaii</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran">Iran</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Isle of Man">Isle of Man</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea North">Korea North</option>
                    <option value="Korea Sout">Korea South</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Laos">Laos</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libya">Libya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macau">Macau</option>
                    <option value="Macedonia">Macedonia</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Midway Islands">Midway Islands</option>
                    <option value="Moldova">Moldova</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Nambia">Nambia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherland Antilles">Netherland Antilles</option>
                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                    <option value="Nevis">Nevis</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau Island">Palau Island</option>
                    <option value="Palestine">Palestine</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Phillipines">Philippines</option>
                    <option value="Pitcairn Island">Pitcairn Island</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                    <option value="Republic of Serbia">Republic of Serbia</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russia">Russia</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="St Barthelemy">St Barthelemy</option>
                    <option value="St Eustatius">St Eustatius</option>
                    <option value="St Helena">St Helena</option>
                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                    <option value="St Lucia">St Lucia</option>
                    <option value="St Maarten">St Maarten</option>
                    <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                    <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                    <option value="Saipan">Saipan</option>
                    <option value="Samoa">Samoa</option>
                    <option value="Samoa American">Samoa American</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syria">Syria</option>
                    <option value="Tahiti">Tahiti</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania">Tanzania</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Erimates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="USA">USA</option>
                    <option value="Uraguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Vatican City State">Vatican City State</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                    <option value="Wake Island">Wake Island</option>
                    <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zaire">Zaire</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                </select>
            </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="segment">Segment</label>
            <div class="col-md-4">
                <div class="radio">
                    <label for="segment-0">
                        <input type="radio" name="segment" id="segment-0" value="1" checked="checked">
                        LE
                    </label>
                </div>
                <div class="radio">
                    <label for="segment-1">
                        <input type="radio" name="segment" id="segment-1" value="2">
                        GLOBAL
                    </label>
                </div>
                <div class="radio">
                    <label for="segment-2">
                        <input type="radio" name="segment" id="segment-2" value="3">
                        EDU
                    </label>
                </div>
            </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="b2b">B2B</label>
            <div class="col-md-4">
                <div class="radio">
                    <label for="b2b-0">
                        <input type="radio" name="b2b" id="b2b-0" value="1" checked="checked">
                        YES
                    </label>
                </div>
                <div class="radio">
                    <label for="b2b-1">
                        <input type="radio" name="b2b" id="b2b-1" value="2">
                        NO
                    </label>
                </div>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="account_manager">Web PM</label>
            <div class="col-md-4">
                <select id="account_manager" name="account_manager" class="form-control">
                    <option value="NATASHA PETERSEN">NATASHA PETERSEN</option>
                    <option value="JOAQUIN VILLAMIL">JOAQUIN VILLAMIL</option>
                    <option value="JUAN MARTIN RICALDONI">JUAN MARTIN RICALDONI
                    <option value="DENISE SCOTT">DENISE SCOTT</option>
                    <option value="MAGALI POSE">MAGALI POSE</option>
                    <option value="LUJAN CALETTI">LUJAN CALETTI</option>
                    <option value="SIMONE GRANDI">SIMONE GRANDI</option>
                    <option value="MAURO SAAVEDRA">MAURO SAAVEDRA</option>
                    <option value="KELLY LITTLE">KELLY LITTLE</option>
                    <option value="VICTORIA TELONI">VICTORIA TELONI</option>
                    <option value="JULIANA REZENDE">JULIANA REZENDE</option>
                    <option value="LUJAN CALETTI">LUJAN CALETTI</option>
                </select>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="geo">GEO</label>
            <div class="col-md-4">
                <select id="geo" name="geo" class="form-control">
                    <option value="1">AP</option>
                    <option value="2">AG</option>
                    <option value="3">EMEA</option>
                    <option value="4">LA</option>
                </select>
            </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="theoldkey1">Website Enable</label>
            <div class="col-md-4">
                <div class="radio">
                    <label for="theoldkey1-0">
                        <input type="radio" name="theoldkey1" id="theoldkey1-0" value="1" checked="checked">
                        YES
                    </label>
                </div>
                <div class="radio">
                    <label for="theoldkey1-1">
                        <input type="radio" name="theoldkey1" id="theoldkey1-1" value="2">
                        NO
                    </label>
                </div>
            </div>
        </div>

        <!-- Hidden Fields -->
        <div class="form-group">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="document_id" value="1">
            <input type="hidden" name="entity_type" value=" ">
        </div>

        <!-- Button -->
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-4">
            <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
@section('scripts')
    <script>
        function valida(e) {
            tecla = (document.all) ? e.keyCode : e.which;

            //Tecla de retroceso para borrar, siempre la permite
            if (tecla == 8) {
                return true;
            }

            // Patron de entrada, en este caso solo acepta numeros
            patron = /[0-9]/;
            tecla_final = String.fromCharCode(tecla);
            return patron.test(tecla_final);
        }
    </script>
@endsection