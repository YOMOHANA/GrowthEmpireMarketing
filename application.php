<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application | Growth Empire Marketing</title>

    <link rel="icon" type="image/x-icon" href="public/img/favicon.ico" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/b5e2506554.js" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="public/css/main.css" rel="stylesheet">
</head>
<body>

<!-- header -->
<?php
// Header
require_once('header.php');
?>

<section style="background: url('public/img/bg-shape-1.png'); background-position: bottom center; background-size: cover">
    <div class="application_container">
        <form action="#" class="form">
            <h1 class="text-center">Application<span> Form</span></h1>
            <!-- Progress bar -->
            <div class="progressbar">
                <div class="progress" id="progress"></div>
                <div class="progress-step progress-step-active" data-title="Intro"></div>
                <div class="progress-step" data-title="ID"></div>
                <div class="progress-step" data-title="Contact"></div>
                <div class="progress-step" data-title="attachment"></div>
            </div>

            <!-- Steps -->
            <div class="form-step form-step-active">
                <div class="input-group">
                    <div class="select1">
                        <div class="options1" tabindex="0">
                            <label for="mr" class="option1">
                                <input type="radio" name="role" id="mr" />
                                <span>Mr</span>
                            </label>

                            <label for="mrs" class="option1">
                                <input type="radio" id="mrs" name="role" />
                                <span>Mrs</span>
                            </label>

                            <label for="miss" class="option1">
                                <input type="radio" id="miss" name="role" />
                                <span>Miss</span>
                            </label>

                            <label for="ms" class="option1">
                                <input type="radio" id="ms" name="title" />
                                <span>Ms</span>
                            </label>

                            <label for="dr" class="option1">
                                <input type="radio" id="dr" name="title" />
                                <span>Dr</span>
                            </label>
                        </div>
                        <div class="selected1">Title</div>
                    </div>
                </div>
                <div class="input-group">
                    <input type="text" name="name" id="name" class="input" placeholder="Name"/>
                </div>
                <div class="input-group">
                    <input type="text" name="surname" id="surname" class="input" placeholder="Surname" />
                </div>
                <div class="input-group">
                    <div class="select2">
                        <div class="options2">
                            <label for="male" class="option2">
                                <input type="radio" name="gender" id="male" />
                                <span>Male</span>
                            </label>

                            <label for="female" class="option2">
                                <input type="radio" id="female" name="gender" />
                                <span>Female</span>
                            </label>
                        </div>
                        <div class="selected2">Gender</div>
                    </div>
                </div>
                <div class="input-group">
                    <div class="select3">
                        <div class="options3">
                            <label for="yes" class="option3">
                                <input type="radio" name="disability" id="yes" />
                                <span>Yes</span>
                            </label>

                            <label for="no" class="option3">
                                <input type="radio" id="no" name="disability" />
                                <span>No</span>
                            </label>
                        </div>
                        <div class="selected3" tabindex="0">Disability</div>
                    </div>
                </div>
                <div class="">
                    <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
                </div>
            </div>
            <div class="form-step">
                <div class="input-group">
                    <input type="text" name="phone" id="ID" class="input" placeholder="ID" />
                </div>
                <div class="input-group">
                    <input type="date" name="dob" id="dob" class="input" placeholder="Date of Birth" />
                </div>
                <div class="input-group">
                    <div class="select4">
                        <div class="options4">
                            <label for="afghan" class="option4">
                                <input type="radio" name="nationality" id="afghan" />
                                <span>Afghan</span>
                            </label>

                            <label for="albanian" class="option4">
                                <input type="radio" id="albanian" name="nationality" />
                                <span>Albanian</span>
                            </label>

                            <label for="algerian" class="option4">
                                <input type="radio" id="algerian" name="nationality" />
                                <span>Algerian</span>
                            </label>

                            <label for="american" class="option4">
                                <input type="radio" id="american" name="nationality" />
                                <span>American</span>
                            </label>

                            <label for="andorran" class="option4">
                                <input type="radio" id="andorran" name="nationality" />
                                <span>Andorran</span>
                            </label>
                        </div>
                        <div class="selected4">Nationality</div>
                    </div>
                </div>
                <div class="input-group">
                    <div class="select5">
                        <div class="options5">
                            <label for="afrikaans" class="option5">
                                <input type="radio" name="homeLanguage" id="afrikaans" />
                                <span>Afrikaans</span>
                            </label>

                            <label for="english" class="option5">
                                <input type="radio" id="english" name="homeLanguage" />
                                <span>English</span>
                            </label>

                            <label for="ndebele" class="option5">
                                <input type="radio" id="ndebele" name="homeLanguage" />
                                <span>Ndebele</span>
                            </label>

                            <label for="northernSotho" class="option5">
                                <input type="radio" id="northernSotho" name="homeLanguage" />
                                <span>Northern Sotho</span>
                            </label>

                            <label for="southernSotho" class="option5">
                                <input type="radio" id="southernSotho" name="homeLanguage" />
                                <span>Southern Sotho</span>
                            </label>

                            <label for="swati" class="option5">
                                <input type="radio" id="swati" name="homeLanguage" />
                                <span>Swati</span>
                            </label>

                            <label for="tsonga" class="option5">
                                <input type="radio" id="tsonga" name="homeLanguage" />
                                <span>Tsonga</span>
                            </label>

                            <label for="tswana" class="option5">
                                <input type="radio" id="tswana" name="homeLanguage" />
                                <span>Tswana</span>
                            </label>

                            <label for="venda" class="option5">
                                <input type="radio" id="venda" name="homeLanguage" />
                                <span>Venda</span>
                            </label>

                            <label for="xhosa" class="option5">
                                <input type="radio" id="xhosa" name="homeLanguage" />
                                <span>Xhosa</span>
                            </label>

                            <label for="zulu" class="option5">
                                <input type="radio" id="zulu" name="homeLanguage" />
                                <span>Zulu</span>
                            </label>
                        </div>
                        <div class="selected5">Home Language</div>
                    </div>
                </div>
                <div class="btns-group">
                    <a href="#" class="btn btn-prev">Previous</a>
                    <a href="#" class="btn btn-next">Next</a>
                </div>
            </div>
            <div class="form-step">
                <div class="input-group">
                    <input type="tel" name="phone" id="phone" class="input" placeholder="Phone Number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" />
                </div>
                <div class="input-group">
                    <input type="email" name="email" id="email" class="input" placeholder="Email" />
                </div>
                <div class="btns-group">
                    <a href="#" class="btn btn-prev">Previous</a>
                    <a href="#" class="btn btn-next">Next</a>
                </div>
            </div>
            <div class="form-step">
                <div class="input-group">
                    <input type="file" name="file" id="file" class="input" placeholder="Select a File" />
                </div>
                <div class="btns-group">
                    <a href="#" class="btn btn-prev">Previous</a>
                    <input type="submit" value="Submit" class="btn" />
                </div>
            </div>
        </form>
    </div>
</section>

<!-- Footer -->
<?php
// Footer
require_once('footer.php');
?>
<!-- Footer -->
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="public/js/application.js"></script>
</body>
</html>