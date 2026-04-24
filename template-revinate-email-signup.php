<?php
/**
 * Template Name: Revinate Email Sign-up Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('components/_subheader');?>

<div class="container email-signup-list">
<div class="row">
    <div class="col-md-12">

    <script type="text/javascript" src="//contact-api.inguest.com/bundles/revinatecontactapi/js/revinate-form.js?v=1"></script>
<form id="revinate_contact_api_form" token="5fba2946-d68f-4cff-a15c-c18661c6e093"
      onsubmit="revFormOnSubmit(); event.preventDefault();">
        <fieldset>
        <legend> Revinate Contact Sign Up Form Sample.</legend>
                    <div>
                <label>First/ Last Name</label>
                <input type="text" name="firstName"/><input type="text" name="lastName"/>        </div>
            <div>
                <label>Gender</label>
                <input class="long" type="text" name="gender"/>        </div>
            <div>
                <label>City, State</label>
                <input type="text" name="city"/><input type="text" name="state"/>        </div>
            <div>
                <label>Postal</label>
                <input class="long" type="text" name="zipCode"/>        </div>
            <div>
                <label>Phone Number</label>
                <input class="long" type="tel" name="phone"/>        </div>
            <div>
                <label>Email</label>
                <input class="long" type="email" name="email" required/>        </div>
            <div>
                <label>Date Of Birth</label>
                <select name="yearOfdateOfBirth" data-group="dateOfBirth" data-delimiter="-"><option value="">Year</option><option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option></select><select name="monthOfdateOfBirth" data-group="dateOfBirth" data-delimiter="-"><option value="">Month</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select><select name="dayOfdateOfBirth" data-group="dateOfBirth"><option value="">Day</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>        </div>
            <div>
                <label>Affiliation</label>
                <input class="long" type="text" name="AFFILIATION"/>        </div>
            <div>
                <label>Age Range</label>
                <input class="long" type="text" name="AGERANGE"/>        </div>
            <div>
                <label>Occasion</label>
                <input class="long" type="text" name="OCCASION"/>        </div>
            <div>
                <label>Travel</label>
                <input class="long" type="text" name="TRAVEL"/>        </div>
    
        <div class="button">
            <button type="submit">Sign Me Up !</button>
        </div>
    </fieldset>
    <style scoped>
        label {
            display: inline-block;
            width: 130px;
        }

        label.required:after {
            content: " *";
            color: red;
        }

        fieldset {
            width: 500px;
            padding: 1em;
            border: 3px solid #CCC;
        }

        input {
            margin: 1px 5px 1px 5px;
            width: 145px;
            padding: 3px;
            border-width: 2px;
        }

        input.long {
            width: 300px
        }

        div.checkbox-group {
            padding: 10px 0;
        }

        div.checkbox-group label {
            width: 100%;
        }

        input[type=checkbox] {
            width: 15px;
            height: 15px;
            margin-left: 0;
        }

        div.button {
            margin-top: 1em;
            text-align: center;
        }
    </style>
</form>
<!--

<script type="text/javascript" src="//contact-api.inguest.com/bundles/revinatecontactapi/js/revinate-form.js?v=1"></script>
<form id="revinate_contact_api_form" token="5fba2946-d68f-4cff-a15c-c18661c6e093"
      onsubmit="revFormOnSubmit(); event.preventDefault();">
        <fieldset>
        <legend> Revinate Contact Sign Up Form Sample.</legend>
                    <div>
                <label>First/ Last Name</label>
                <input type="text" name="firstName"/><input type="text" name="lastName"/>        </div>
            <div>
                <label>Gender</label>
                <input class="long" type="text" name="gender"/>        </div>
            <div>
                <label>City, State</label>
                <input type="text" name="city"/><input type="text" name="state"/>        </div>
            <div>
                <label>Postal</label>
                <input class="long" type="text" name="zipCode"/>        </div>
            <div>
                <label>Phone Number</label>
                <input class="long" type="tel" name="phone"/>        </div>
            <div>
                <label>Email</label>
                <input class="long" type="email" name="email" required/>        </div>
            <div>
                <label>Date Of Birth</label>
                <select name="yearOfdateOfBirth" data-group="dateOfBirth" data-delimiter="-"><option value="">Year</option><option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option></select><select name="monthOfdateOfBirth" data-group="dateOfBirth" data-delimiter="-"><option value="">Month</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select><select name="dayOfdateOfBirth" data-group="dateOfBirth"><option value="">Day</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>        </div>
            <div>
                <label>Affiliation</label>
                <label class="question_option "><span class="checkbox_container"><input name="option[e063eeb1-a1f9-41bb-bb80-cd1ea30547c1]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">UCLA Alumni</span></label><label class="question_option "><span class="checkbox_container"><input name="option[b935e81d-27b1-4849-8a17-84e94b917661]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">Parent or Family Member of a UCLA Student</span></label><label class="question_option "><span class="checkbox_container"><input name="option[6fe86667-c0ee-4ef3-8265-5c3febeea5ef]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">UCLA Student</span></label><label class="question_option "><span class="checkbox_container"><input name="option[c38e1e8f-3f1d-4468-911d-4ac7e5517a7a]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">UCLA Faculty</span></label><label class="question_option "><span class="checkbox_container"><input name="option[c99cb277-b0a8-47a5-a7bc-c21764a080cd]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">UCLA Staff</span></label><label class="question_option "><span class="checkbox_container"><input name="option[b7f7f6ff-8489-4821-8b43-1e3a4a57a7f3]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">UCLA Medical Center patient or patient's family member</span></label><label class="question_option "><span class="checkbox_container"><input name="option[90ae70a5-00bd-4750-a66c-8f8cd8c9791e]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">I am affiliated with another UC campus</span></label><label class="question_option "><span class="checkbox_container"><input name="option[b6595146-4eb0-453b-97a2-b005e1f3f77e]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">I attended a conference or event at UCLA</span></label><label class="question_option "><span class="checkbox_container"><input name="option[de398124-9ba7-4e54-96d9-3b53cb4fe6d9]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">I plan conferences or events</span></label><label class="question_option "><span class="checkbox_container"><input name="option[b2506228-a106-43d4-8879-6760d6fd8c41]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">Not affiliated</span></label><label class="question_option other "><span class="checkbox_container"><input name="option[b8534160-8d2a-4eba-bcc5-1247d8b97b56]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">Other</span><input class="hidden" name="other" type="text" placeholder="Your option" value=""></label>
        </div>
            <div>
                <label>Age Range</label>
                <label class="question_option "><span class="radio_container"><input name="option[32aad899-d625-4cd9-b5ee-794dce9d2d63]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">18-24</span></label><label class="question_option "><span class="radio_container"><input name="option[db719e41-abbc-4b5a-8619-9537fc696deb]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">25-34</span></label><label class="question_option "><span class="radio_container"><input name="option[6ab4f89e-8e8a-48b3-94ed-3aec7a18b829]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">35-44</span></label><label class="question_option "><span class="radio_container"><input name="option[538c0b51-0452-4f65-83ea-179e1bf1cb33]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">45-54</span></label><label class="question_option "><span class="radio_container"><input name="option[a33cbeb4-0485-4937-8585-cad338ef4b23]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">55-64</span></label><label class="question_option "><span class="radio_container"><input name="option[d3715ce2-3419-441c-bfbb-ef05a1480477]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">65 and older</span></label></div>
            <div>
                <label>Occasion</label>
                <label class="question_option "><span class="checkbox_container"><input name="option[8677472c-cb0a-400c-ab78-836ccc2b122c]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">Meetings and business</span></label><label class="question_option "><span class="checkbox_container"><input name="option[5eda3498-1a16-453b-85a3-662745b7a73c]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">Dining or foodie experiences</span></label><label class="question_option "><span class="checkbox_container"><input name="option[b821aaa4-d466-4fee-bdfb-23f8098ebd6d]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">Team building or business retreats</span></label><label class="question_option "><span class="checkbox_container"><input name="option[3f5e10ad-22c7-40cd-b34e-492a7b1917fe]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">Shopping, sightseeing or leisure travel</span></label><label class="question_option "><span class="checkbox_container"><input name="option[1a73cb48-e01a-4866-bede-58427888b909]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">UCLA sporting events</span></label><label class="question_option "><span class="checkbox_container"><input name="option[a7e689a0-b1a2-473f-83af-6873433f3354]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">UCLA arts, culture and perfomances</span></label><label class="question_option "><span class="checkbox_container"><input name="option[63247b3a-be21-4edf-a579-0db70d037807]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">UCLA campus tours or visits</span></label><label class="question_option "><span class="checkbox_container"><input name="option[49ac0786-185c-4834-8a16-d706d00de54f]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">Fall activities - Leaf peeping, Hiking, Birdwatching</span></label><label class="question_option "><span class="checkbox_container"><input name="option[4e37ac78-4df9-464a-ace0-5c767d9ef1b9]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">Winter activities - Snowboarding, Skiing, Sledding</span></label><label class="question_option "><span class="checkbox_container"><input name="option[c4423707-7bd0-44ed-9fbd-a5a7a2ed508c]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">Spring or Summer activities - Mountain Biking, Kayaking, Hiking</span></label><label class="question_option "><span class="checkbox_container"><input name="option[4fd280a9-608a-491d-9d74-5afe52d24294]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">Family Getaways - Family Reunions</span></label><label class="question_option "><span class="checkbox_container"><input name="option[ba59762a-1dfa-46b9-a7cf-fa617958fff7]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">Weddings</span></label><label class="question_option other "><span class="checkbox_container"><input name="option[70170024-cb92-4f74-b1bc-63f3919093cc]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">Other</span><input class="hidden" name="other" type="text" placeholder="Your option" value=""></label></div>
            <div>
                <label>Travel</label>
                <label class="question_option "><span class="checkbox_container"><input name="option[8e5bb24a-4f1b-4442-9cad-b7adfdb9753f]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">My children</span></label><label class="question_option "><span class="checkbox_container"><input name="option[e97a20b0-3dc2-448f-bd8d-f9e6b0da4d61]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">My dog</span></label><label class="question_option "><span class="checkbox_container"><input name="option[c528cdad-2d8c-45b4-9f3c-bc28ee716f3f]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">My friends</span></label><label class="question_option "><span class="checkbox_container"><input name="option[aa8a6761-96d2-4593-b535-70f1aeca482d]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">My partner</span></label><label class="question_option other "><span class="checkbox_container"><input name="option[660d1afd-af55-41dd-be47-24e687f18e55]" type="checkbox" value=""><span class="checkmark"></span></span><span class="option_label">Other</span><input class="hidden" name="other" type="text" placeholder="Your option" value=""></label>        </div>
    
        <div class="button">
            <button type="submit">Sign Me Up !</button>
        </div>
    </fieldset>
    <style scoped>
        label {
            display: inline-block;
            width: 130px;
        }

        label.required:after {
            content: " *";
            color: red;
        }

        fieldset {
            width: 500px;
            padding: 1em;
            border: 3px solid #CCC;
        }

        input {
            margin: 1px 5px 1px 5px;
            width: 145px;
            padding: 3px;
            border-width: 2px;
        }

        input.long {
            width: 300px
        }

        div.checkbox-group {
            padding: 10px 0;
        }

        div.checkbox-group label {
            width: 100%;
        }

        input[type=checkbox] {
            width: 15px;
            height: 15px;
            margin-left: 0;
        }

        div.button {
            margin-top: 1em;
            text-align: center;
        }
    </style>
</form>

    </div></div></div> -->

<?php endwhile; ?>
