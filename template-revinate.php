<?php

/**
 * Template Name: Revinate Email List Opt-in
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('components/_subheader'); ?>
    <div class="container">
        <div class="col-lg-12">
            <p>
                <?php the_content(); ?>
            </p>
            <script type="text/javascript" src="//contact-api.inguest.com/bundles/revinatecontactapi/js/revinate-form.js?v=1"></script>
            <form id="revinate_contact_api_form" token="acf30d3a-6bd2-4116-b632-6b8aaf3ec141" onsubmit="revFormOnSubmit(); event.preventDefault();">
                <fieldset>
                    <legend>
                        <h2>UCLA Lake Arrowhead Lodge Email Opt-in</h2>
                    </legend>
                    <div>
                        <h3>Contact Information</h3>
                    </div>
                    <div>
                        <label>First/ Last Name</label>
                        <input type="text" name="firstName" /><input type="text" name="lastName" />
                    </div>
                    <div>
                        <label>Title</label>
                        <input class="long" type="text" name="title" />
                    </div>
                    <div>
                        <label>Address 1</label>
                        <input class="long" type="text" name="address1" />
                    </div>
                    <div>
                        <label>Address 2</label>
                        <input class="long" type="text" name="address2" />
                    </div>
                    <div>
                        <label>City, State</label>
                        <input type="text" name="city" /><input type="text" name="state" />
                    </div>
                    <div>
                        <label>Country, Postal</label>
                        <input type="text" name="country" /><input type="text" name="zipCode" />
                    </div>
                    <div>
                        <label>Organization</label>
                        <input class="long" type="text" name="ORGANIZATION" />
                    </div>
                    <div>
                        <label>Phone Number</label>
                        <input class="long" type="tel" name="phone" />
                    </div>
                    <div>
                        <label>Email</label>
                        <input class="long" type="email" name="email" required />
                    </div>
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
                        width: 720px;
                        padding: 1em;
                    }

                    @media screen and (max-width: 480px) {
                        fieldset {
                            width: 400px;
                        }
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
        </div>
    </div>
<?php endwhile; ?>