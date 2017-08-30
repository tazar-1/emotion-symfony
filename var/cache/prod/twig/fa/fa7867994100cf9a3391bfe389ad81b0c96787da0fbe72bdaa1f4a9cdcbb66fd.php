<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_671d1617a55131f54440b3f18fa70d68550d788125ec508e4f187838c3543fc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Profile:show_content.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<a name=\"top\"></a>
<div class=\"main\">

    <div class=\"settings\">
        <section class=\"section_turquoise header_my_account\">
            <div class=\"comp_buttons\">
                <div class=\"btn_mid\">
                    <button class=\"btn_w\">
                        <a href=\"fidelites.html\">Points fidélités</a>
                    </button>
                </div>
                <div class=\"btn_mid\">
                    <button class=\"btn_w\">
                        <a href=\"mes_locations.html\">Mes locations</a>
                    </button>
                </div>
                <div class=\"btn_mid\">
                    <button class=\"btn_w\">
                        <a href=\"settings.html\">Parametres</a>
                    </button>
                </div>
            </div>
        </section>
        <img src=\"images/wave.svg\" alt=\"BLIBLABLU\" class=\"wave\">


        <section class=\"formulaires\">
            <div class=\"wrapper\">
                <h3>Compte</h3>
                <div class=\"border_bottom\"></div>

                <div class=\"formulaire\">
                    <article class=\"main-content-1\">
                        <div class=\"form-group avatar\">
                            <!-- <label>Select your avatar : </label>
                            <input type=\"file\" name=\"avatar\" accept=\"image/*\" required/> -->

                            <div class=\"container\">
                                <div class=\"containers\">
                                    <div class=\"imageWrapper\">
                                        <img class=\"image_choose\" src=\"http://digital-art-gallery.com/oid/0/1300x648_403_Knight_by_the_lake_2d_fantasy_knight_lake_warrior_picture_image_digital_art.jpg\">
                                    </div>
                                </div>
                                <button class=\"file-upload\">
                                    <input type=\"file\" class=\"file-input\">Choose File
                                </button>
                            </div>
                        </div>
                        <div class=\"form_email_mdp\">
                            <article class=\"main-content bounceInLeft_animate animated\">

                                <h4>Mon adresse email</h4>

                                <div class=\"form-group\">
                                    <label>Adresse email* :</label>
                                    <input type=\"email\" value=\"\" class=\"input-control\" />
                                </div>

                                <div class=\"form-group\">
                                    <label>Nouveau email* :</label>
                                    <input type=\"email\"  value=\"\" class=\"input-control\" />
                                </div>

                                <div class=\"form-group\">
                                    <label>Confirmer* :</label>
                                    <input type=\"email\"  value=\"\" class=\"input-control\" />
                                </div>

                                <div class=\"form-group\">
                                    <label>Mot de passe* :</label>
                                    <input type=\"password\"  value=\"\" class=\"input-control\" />
                                </div>

                                <div class=\"form-group\">
                                    <div class=\"btn_mid\"><button class=\"btn_w\"> <a href=\"\">Modifier</a> </button></div>
                                </div>

                            </article>

                            <article class=\"main-content bounceInRight_animate animated\">

                                <h4>Mon mot de passe</h4>

                                <div class=\"form-group\">
                                    <label>Ancien mot de passe* :</label>
                                    <input type=\"password\" value=\"\" class=\"input-control\" />
                                </div>

                                <div class=\"form-group\">
                                    <label>Nouveau mot de passe* :</label>
                                    <input type=\"password\" value=\"\" class=\"input-control\" />
                                </div>

                                <div class=\"form-group\">
                                    <label>Confirmer* :</label>
                                    <input type=\"password\" value=\"\" class=\"input-control\" />
                                </div>

                                <div class=\"form-group\">
                                    <div class=\"btn_mid\"><button class=\"btn_w\"> <a href=\"\">Modifier</a> </button></div>
                                </div>

                            </article>
                        </div>

                        <div class=\"form_coord fadeInUp_animate animated\">
                            <article class=\"main-content \">

                                <h4>Mes coordonnées</h4>

                                <div class=\"form-group\">
                                    <label>Civilité* :</label>
                                    <div class=\"civi\">
                                        <label class=\"radio\">
                                            <input class=\"radio1\" type=\"radio\" name=\"radios\" checked>
                                            <span class=\"outer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"inner\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>Mme
                                        </label>
                                        <label class=\"radio\">
                                            <input class=\"radio2\" type=\"radio\" name=\"radios\">
                                            <span class=\"outer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"inner\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>Mlle
                                        </label>
                                        <label class=\"radio\">
                                            <input class=\"radio3\" type=\"radio\" name=\"radios\">
                                            <span class=\"outer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"inner\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>Mr
                                        </label>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label>Prénom* :</label>
                                    <input type=\"text\" value=\"\" class=\"input-control\" />

                                    <label class=\"right-inline\">Nom* :</label>
                                    <input type=\"text\" value=\"\" class=\"input-control\" />
                                </div>

                                <div class=\"form-group\">
                                    <label>Adresse* :</label>
                                    <input value=\"\" class=\"input-control\" />
                                </div>

                                <div class=\"form-group\">
                                    <label>Code postal* :</label>
                                    <input type=\"text\" value=\"\" class=\"input-control\" />

                                    <label class=\"right-inline\">Ville* :</label>
                                    <input type=\"text\" value=\"\" class=\"input-control\" />

                                    <!-- <label class=\"right-inline\">Pays* :</label>
                                    <input type=\"text\" value=\"\" class=\"input-control\" /> -->
                                    <label>Pays* :</label>
                                    <select class=\"select-control\">
                                        <option></option>
                                        <optgroup label=\"North America\">
                                            <option value=\"US\">United States</option>
                                            <option value=\"UM\">United States Minor Outlying Islands</option>
                                            <option value=\"CA\">Canada</option>
                                            <option value=\"MX\">Mexico</option>
                                            <option value=\"AI\">Anguilla</option>
                                            <option value=\"AG\">Antigua and Barbuda</option>
                                            <option value=\"AW\">Aruba</option>
                                            <option value=\"BS\">Bahamas</option>
                                            <option value=\"BB\">Barbados</option>
                                            <option value=\"BZ\">Belize</option>
                                            <option value=\"BM\">Bermuda</option>
                                            <option value=\"VG\">British Virgin Islands</option>
                                            <option value=\"KY\">Cayman Islands</option>
                                            <option value=\"CR\">Costa Rica</option>
                                            <option value=\"CU\">Cuba</option>
                                            <option value=\"DM\">Dominica</option>
                                            <option value=\"DO\">Dominican Republic</option>
                                            <option value=\"SV\">El Salvador</option>
                                            <option value=\"GD\">Grenada</option>
                                            <option value=\"GP\">Guadeloupe</option>
                                            <option value=\"GT\">Guatemala</option>
                                            <option value=\"HT\">Haiti</option>
                                            <option value=\"HN\">Honduras</option>
                                            <option value=\"JM\">Jamaica</option>
                                            <option value=\"MQ\">Martinique</option>
                                            <option value=\"MS\">Montserrat</option>
                                            <option value=\"AN\">Netherlands Antilles</option>
                                            <option value=\"NI\">Nicaragua</option>
                                            <option value=\"PA\">Panama</option>
                                            <option value=\"PR\">Puerto Rico</option>
                                            <option value=\"KN\">Saint Kitts and Nevis</option>
                                            <option value=\"LC\">Saint Lucia</option>
                                            <option value=\"VC\">Saint Vincent and the Grenadines</option>
                                            <option value=\"TT\">Trinidad and Tobago</option>
                                            <option value=\"TC\">Turks and Caicos Islands</option>
                                            <option value=\"VI\">US Virgin Islands</option>
                                        </optgroup>
                                        <optgroup label=\"South America\">
                                            <option value=\"AR\">Argentina</option>
                                            <option value=\"BO\">Bolivia</option>
                                            <option value=\"BR\">Brazil</option>
                                            <option value=\"CL\">Chile</option>
                                            <option value=\"CO\">Colombia</option>
                                            <option value=\"EC\">Ecuador</option>
                                            <option value=\"FK\">Falkland Islands (Malvinas)</option>
                                            <option value=\"GF\">French Guiana</option>
                                            <option value=\"GY\">Guyana</option>
                                            <option value=\"PY\">Paraguay</option>
                                            <option value=\"PE\">Peru</option>
                                            <option value=\"SR\">Suriname</option>
                                            <option value=\"UY\">Uruguay</option>
                                            <option value=\"VE\">Venezuela</option>
                                        </optgroup>
                                        <optgroup label=\"Europe\">
                                            <option value=\"GB\">United Kingdom</option>
                                            <option value=\"AL\">Albania</option>
                                            <option value=\"AD\">Andorra</option>
                                            <option value=\"AT\">Austria</option>
                                            <option value=\"BY\">Belarus</option>
                                            <option value=\"BE\">Belgium</option>
                                            <option value=\"BA\">Bosnia and Herzegovina</option>
                                            <option value=\"BG\">Bulgaria</option>
                                            <option value=\"HR\">Croatia (Hrvatska)</option>
                                            <option value=\"CY\">Cyprus</option>
                                            <option value=\"CZ\">Czech Republic</option>
                                            <option value=\"FR\">France</option>
                                            <option value=\"GI\">Gibraltar</option>
                                            <option value=\"DE\">Germany</option>
                                            <option value=\"GR\">Greece</option>
                                            <option value=\"VA\">Holy See (Vatican City State)</option>
                                            <option value=\"HU\">Hungary</option>
                                            <option value=\"IT\">Italy</option>
                                            <option value=\"LI\">Liechtenstein</option>
                                            <option value=\"LU\">Luxembourg</option>
                                            <option value=\"MK\">Macedonia</option>
                                            <option value=\"MT\">Malta</option>
                                            <option value=\"MD\">Moldova</option>
                                            <option value=\"MC\">Monaco</option>
                                            <option value=\"ME\">Montenegro</option>
                                            <option value=\"NL\">Netherlands</option>
                                            <option value=\"PL\">Poland</option>
                                            <option value=\"PT\">Portugal</option>
                                            <option value=\"RO\">Romania</option>
                                            <option value=\"SM\">San Marino</option>
                                            <option value=\"RS\">Serbia</option>
                                            <option value=\"SK\">Slovakia</option>
                                            <option value=\"SI\">Slovenia</option>
                                            <option value=\"ES\">Spain</option>
                                            <option value=\"UA\">Ukraine</option>
                                            <option value=\"DK\">Denmark</option>
                                            <option value=\"EE\">Estonia</option>
                                            <option value=\"FO\">Faroe Islands</option>
                                            <option value=\"FI\">Finland</option>
                                            <option value=\"GL\">Greenland</option>
                                            <option value=\"IS\">Iceland</option>
                                            <option value=\"IE\">Ireland</option>
                                            <option value=\"LV\">Latvia</option>
                                            <option value=\"LT\">Lithuania</option>
                                            <option value=\"NO\">Norway</option>
                                            <option value=\"SJ\">Svalbard and Jan Mayen Islands</option>
                                            <option value=\"SE\">Sweden</option>
                                            <option value=\"CH\">Switzerland</option>
                                            <option value=\"TR\">Turkey</option>
                                        </optgroup>
                                        <optgroup label=\"Asia\">
                                            <option value=\"AF\">Afghanistan</option>
                                            <option value=\"AM\">Armenia</option>
                                            <option value=\"AZ\">Azerbaijan</option>
                                            <option value=\"BH\">Bahrain</option>
                                            <option value=\"BD\">Bangladesh</option>
                                            <option value=\"BT\">Bhutan</option>
                                            <option value=\"IO\">British Indian Ocean Territory</option>
                                            <option value=\"BN\">Brunei Darussalam</option>
                                            <option value=\"KH\">Cambodia</option>
                                            <option value=\"CN\">China</option>
                                            <option value=\"CX\">Christmas Island</option>
                                            <option value=\"CC\">Cocos (Keeling) Islands</option>
                                            <option value=\"GE\">Georgia</option>
                                            <option value=\"HK\">Hong Kong</option>
                                            <option value=\"IN\">India</option>
                                            <option value=\"ID\">Indonesia</option>
                                            <option value=\"IR\">Iran</option>
                                            <option value=\"IQ\">Iraq</option>
                                            <option value=\"IL\">Israel</option>
                                            <option value=\"JP\">Japan</option>
                                            <option value=\"JO\">Jordan</option>
                                            <option value=\"KZ\">Kazakhstan</option>
                                            <option value=\"KP\">Korea, Democratic People's Republic of</option>
                                            <option value=\"KR\">Korea, Republic of</option>
                                            <option value=\"KW\">Kuwait</option>
                                            <option value=\"KG\">Kyrgyzstan</option>
                                            <option value=\"LA\">Lao</option>
                                            <option value=\"LB\">Lebanon</option>
                                            <option value=\"MY\">Malaysia</option>
                                            <option value=\"MV\">Maldives</option>
                                            <option value=\"MN\">Mongolia</option>
                                            <option value=\"MM\">Myanmar (Burma)</option>
                                            <option value=\"NP\">Nepal</option>
                                            <option value=\"OM\">Oman</option>
                                            <option value=\"PK\">Pakistan</option>
                                            <option value=\"PH\">Philippines</option>
                                            <option value=\"QA\">Qatar</option>
                                            <option value=\"RU\">Russian Federation</option>
                                            <option value=\"SA\">Saudi Arabia</option>
                                            <option value=\"SG\">Singapore</option>
                                            <option value=\"LK\">Sri Lanka</option>
                                            <option value=\"SY\">Syria</option>
                                            <option value=\"TW\">Taiwan</option>
                                            <option value=\"TJ\">Tajikistan</option>
                                            <option value=\"TH\">Thailand</option>
                                            <option value=\"TP\">East Timor</option>
                                            <option value=\"TM\">Turkmenistan</option>
                                            <option value=\"AE\">United Arab Emirates</option>
                                            <option value=\"UZ\">Uzbekistan</option>
                                            <option value=\"VN\">Vietnam</option>
                                            <option value=\"YE\">Yemen</option>
                                        </optgroup>
                                        <optgroup label=\"Australia / Oceania\">
                                            <option value=\"AS\">American Samoa</option>
                                            <option value=\"AU\">Australia</option>
                                            <option value=\"CK\">Cook Islands</option>
                                            <option value=\"FJ\">Fiji</option>
                                            <option value=\"PF\">French Polynesia (Tahiti)</option>
                                            <option value=\"GU\">Guam</option>
                                            <option value=\"KB\">Kiribati</option>
                                            <option value=\"MH\">Marshall Islands</option>
                                            <option value=\"FM\">Micronesia, Federated States of</option>
                                            <option value=\"NR\">Nauru</option>
                                            <option value=\"NC\">New Caledonia</option>
                                            <option value=\"NZ\">New Zealand</option>
                                            <option value=\"NU\">Niue</option>
                                            <option value=\"MP\">Northern Mariana Islands</option>
                                            <option value=\"PW\">Palau</option>
                                            <option value=\"PG\">Papua New Guinea</option>
                                            <option value=\"PN\">Pitcairn</option>
                                            <option value=\"WS\">Samoa</option>
                                            <option value=\"SB\">Solomon Islands</option>
                                            <option value=\"TK\">Tokelau</option>
                                            <option value=\"TO\">Tonga</option>
                                            <option value=\"TV\">Tuvalu</option>
                                            <option value=\"VU\">Vanuatu</option>
                                            <option valud=\"WF\">Wallis and Futuna Islands</option>
                                        </optgroup>
                                        <optgroup label=\"Africa\">
                                            <option value=\"DZ\">Algeria</option>
                                            <option value=\"AO\">Angola</option>
                                            <option value=\"BJ\">Benin</option>
                                            <option value=\"BW\">Botswana</option>
                                            <option value=\"BF\">Burkina Faso</option>
                                            <option value=\"BI\">Burundi</option>
                                            <option value=\"CM\">Cameroon</option>
                                            <option value=\"CV\">Cape Verde</option>
                                            <option value=\"CF\">Central African Republic</option>
                                            <option value=\"TD\">Chad</option>
                                            <option value=\"KM\">Comoros</option>
                                            <option value=\"CG\">Congo</option>
                                            <option value=\"CD\">Congo, the Democratic Republic of the</option>
                                            <option value=\"DJ\">Dijibouti</option>
                                            <option value=\"EG\">Egypt</option>
                                            <option value=\"GQ\">Equatorial Guinea</option>
                                            <option value=\"ER\">Eritrea</option>
                                            <option value=\"ET\">Ethiopia</option>
                                            <option value=\"GA\">Gabon</option>
                                            <option value=\"GM\">Gambia</option>
                                            <option value=\"GH\">Ghana</option>
                                            <option value=\"GN\">Guinea</option>
                                            <option value=\"GW\">Guinea-Bissau</option>
                                            <option value=\"CI\">Cote d'Ivoire (Ivory Coast)</option>
                                            <option value=\"KE\">Kenya</option>
                                            <option value=\"LS\">Lesotho</option>
                                            <option value=\"LR\">Liberia</option>
                                            <option value=\"LY\">Libya</option>
                                            <option value=\"MG\">Madagascar</option>
                                            <option value=\"MW\">Malawi</option>
                                            <option value=\"ML\">Mali</option>
                                            <option value=\"MR\">Mauritania</option>
                                            <option value=\"MU\">Mauritius</option>
                                            <option value=\"YT\">Mayotte</option>
                                            <option value=\"MA\">Morocco</option>
                                            <option value=\"MZ\">Mozambique</option>
                                            <option value=\"NA\">Namibia</option>
                                            <option value=\"NE\">Niger</option>
                                            <option value=\"NG\">Nigeria</option>
                                            <option value=\"RE\">Reunion</option>
                                            <option value=\"RW\">Rwanda</option>
                                            <option value=\"ST\">Sao Tome and Principe</option>
                                            <option value=\"SH\">Saint Helena</option>
                                            <option value=\"SN\">Senegal</option>
                                            <option value=\"SC\">Seychelles</option>
                                            <option value=\"SL\">Sierra Leone</option>
                                            <option value=\"SO\">Somalia</option>
                                            <option value=\"ZA\">South Africa</option>
                                            <option value=\"SS\">South Sudan</option>
                                            <option value=\"SD\">Sudan</option>
                                            <option value=\"SZ\">Swaziland</option>
                                            <option value=\"TZ\">Tanzania</option>
                                            <option value=\"TG\">Togo</option>
                                            <option value=\"TN\">Tunisia</option>
                                            <option value=\"UG\">Uganda</option>
                                            <option value=\"EH\">Western Sahara</option>
                                            <option value=\"ZM\">Zambia</option>
                                            <option value=\"ZW\">Zimbabwe</option>
                                        </optgroup>
                                        <option value=\"AQ\">Antarctica</option>
                                    </select>
                                </div>

                                <div class=\"form-group\">
                                    <label>Date de naissance :</label>

                                    <!-- <select class=\"input-control\">
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                    </select> -->
                                    <select class=\"select-control\" name=\"dob-day\" id=\"dob-day\">
                                        <option value=\"\">Jour</option>
                                        <option value=\"\"></option>
                                        <option value=\"01\">01</option>
                                        <option value=\"02\">02</option>
                                        <option value=\"03\">03</option>
                                        <option value=\"04\">04</option>
                                        <option value=\"05\">05</option>
                                        <option value=\"06\">06</option>
                                        <option value=\"07\">07</option>
                                        <option value=\"08\">08</option>
                                        <option value=\"09\">09</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                        <option value=\"18\">18</option>
                                        <option value=\"19\">19</option>
                                        <option value=\"20\">20</option>
                                        <option value=\"21\">21</option>
                                        <option value=\"22\">22</option>
                                        <option value=\"23\">23</option>
                                        <option value=\"24\">24</option>
                                        <option value=\"25\">25</option>
                                        <option value=\"26\">26</option>
                                        <option value=\"27\">27</option>
                                        <option value=\"28\">28</option>
                                        <option value=\"29\">29</option>
                                        <option value=\"30\">30</option>
                                        <option value=\"31\">31</option>
                                    </select>
                                    <select class=\"select-control\" name=\"dob-month\" id=\"dob-month\">
                                        <option value=\"\">Mois</option>
                                        <option value=\"\"></option>
                                        <option value=\"01\">Janvier</option>
                                        <option value=\"02\">Février</option>
                                        <option value=\"03\">Mars</option>
                                        <option value=\"04\">Avril</option>
                                        <option value=\"05\">Mai</option>
                                        <option value=\"06\">Juin</option>
                                        <option value=\"07\">Juillet</option>
                                        <option value=\"08\">Août</option>
                                        <option value=\"09\">Septembre</option>
                                        <option value=\"10\">Octobre</option>
                                        <option value=\"11\">Novembre</option>
                                        <option value=\"12\">Decembre</option>
                                    </select>
                                    <select class=\"select-control\" name=\"dob-year\" id=\"dob-year\">
                                        <option value=\"\">Année</option>
                                        <option value=\"\"></option>
                                        <option value=\"2012\">2012</option>
                                        <option value=\"2011\">2011</option>
                                        <option value=\"2010\">2010</option>
                                        <option value=\"2009\">2009</option>
                                        <option value=\"2008\">2008</option>
                                        <option value=\"2007\">2007</option>
                                        <option value=\"2006\">2006</option>
                                        <option value=\"2005\">2005</option>
                                        <option value=\"2004\">2004</option>
                                        <option value=\"2003\">2003</option>
                                        <option value=\"2002\">2002</option>
                                        <option value=\"2001\">2001</option>
                                        <option value=\"2000\">2000</option>
                                        <option value=\"1999\">1999</option>
                                        <option value=\"1998\">1998</option>
                                        <option value=\"1997\">1997</option>
                                        <option value=\"1996\">1996</option>
                                        <option value=\"1995\">1995</option>
                                        <option value=\"1994\">1994</option>
                                        <option value=\"1993\">1993</option>
                                        <option value=\"1992\">1992</option>
                                        <option value=\"1991\">1991</option>
                                        <option value=\"1990\">1990</option>
                                        <option value=\"1989\">1989</option>
                                        <option value=\"1988\">1988</option>
                                        <option value=\"1987\">1987</option>
                                        <option value=\"1986\">1986</option>
                                        <option value=\"1985\">1985</option>
                                        <option value=\"1984\">1984</option>
                                        <option value=\"1983\">1983</option>
                                        <option value=\"1982\">1982</option>
                                        <option value=\"1981\">1981</option>
                                        <option value=\"1980\">1980</option>
                                        <option value=\"1979\">1979</option>
                                        <option value=\"1978\">1978</option>
                                        <option value=\"1977\">1977</option>
                                        <option value=\"1976\">1976</option>
                                        <option value=\"1975\">1975</option>
                                        <option value=\"1974\">1974</option>
                                        <option value=\"1973\">1973</option>
                                        <option value=\"1972\">1972</option>
                                        <option value=\"1971\">1971</option>
                                        <option value=\"1970\">1970</option>
                                        <option value=\"1969\">1969</option>
                                        <option value=\"1968\">1968</option>
                                        <option value=\"1967\">1967</option>
                                        <option value=\"1966\">1966</option>
                                        <option value=\"1965\">1965</option>
                                        <option value=\"1964\">1964</option>
                                        <option value=\"1963\">1963</option>
                                        <option value=\"1962\">1962</option>
                                        <option value=\"1961\">1961</option>
                                        <option value=\"1960\">1960</option>
                                        <option value=\"1959\">1959</option>
                                        <option value=\"1958\">1958</option>
                                        <option value=\"1957\">1957</option>
                                        <option value=\"1956\">1956</option>
                                        <option value=\"1955\">1955</option>
                                        <option value=\"1954\">1954</option>
                                        <option value=\"1953\">1953</option>
                                        <option value=\"1952\">1952</option>
                                        <option value=\"1951\">1951</option>
                                        <option value=\"1950\">1950</option>
                                        <option value=\"1949\">1949</option>
                                        <option value=\"1948\">1948</option>
                                        <option value=\"1947\">1947</option>
                                        <option value=\"1946\">1946</option>
                                        <option value=\"1945\">1945</option>
                                        <option value=\"1944\">1944</option>
                                        <option value=\"1943\">1943</option>
                                        <option value=\"1942\">1942</option>
                                        <option value=\"1941\">1941</option>
                                        <option value=\"1940\">1940</option>
                                        <option value=\"1939\">1939</option>
                                        <option value=\"1938\">1938</option>
                                        <option value=\"1937\">1937</option>
                                        <option value=\"1936\">1936</option>
                                        <option value=\"1935\">1935</option>
                                        <option value=\"1934\">1934</option>
                                        <option value=\"1933\">1933</option>
                                        <option value=\"1932\">1932</option>
                                        <option value=\"1931\">1931</option>
                                        <option value=\"1930\">1930</option>
                                        <option value=\"1929\">1929</option>
                                        <option value=\"1928\">1928</option>
                                        <option value=\"1927\">1927</option>
                                        <option value=\"1926\">1926</option>
                                        <option value=\"1925\">1925</option>
                                        <option value=\"1924\">1924</option>
                                        <option value=\"1923\">1923</option>
                                        <option value=\"1922\">1922</option>
                                        <option value=\"1921\">1921</option>
                                        <option value=\"1920\">1920</option>
                                        <option value=\"1919\">1919</option>
                                        <option value=\"1918\">1918</option>
                                        <option value=\"1917\">1917</option>
                                        <option value=\"1916\">1916</option>
                                        <option value=\"1915\">1915</option>
                                        <option value=\"1914\">1914</option>
                                        <option value=\"1913\">1913</option>
                                        <option value=\"1912\">1912</option>
                                        <option value=\"1911\">1911</option>
                                        <option value=\"1910\">1910</option>
                                        <option value=\"1909\">1909</option>
                                        <option value=\"1908\">1908</option>
                                        <option value=\"1907\">1907</option>
                                        <option value=\"1906\">1906</option>
                                        <option value=\"1905\">1905</option>
                                        <option value=\"1904\">1904</option>
                                        <option value=\"1903\">1903</option>
                                        <option value=\"1901\">1901</option>
                                        <option value=\"1900\">1900</option>
                                    </select>

                                </div>

                                <div class=\"form-group\">
                                    <div class=\"btn_mid\"><button class=\"btn_w\"> <a href=\"\">Modifier</a> </button></div>
                                </div>

                            </article>
                        </div>

                    </article>
                </div>
            </div>
        </section>


    </div>


</div>
";
    }

    // line 615
    public function block_javascripts($context, array $blocks = array())
    {
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 618
    public function block_footer($context, array $blocks = array())
    {
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  667 => 618,  659 => 615,  48 => 9,  40 => 6,  32 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Profile:show_content.html.twig", "D:\\Logiciels\\wamp64\\www\\emotion\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
