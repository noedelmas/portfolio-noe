<?php get_header()?>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="test">
                        <p class="intro">Développeur Web <br>& Web Mobile <br>Junior</p>
                        <p class="soustitre">Satisfait d’avoir un but à accomplir, d’arriver au fait accompli.</p>
                        <a class="Serenseigner btn btn-secondary" href="#">En savoir +<i class="fleche2 bi bi-arrow-right-circle"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <section class="mainsection-contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <form>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 mb-3">
                                <label for="InputLastName" class="form-label">Last Name</label>
                                <input type="LastName" class="form-control" id="LastName" placeholder="Last Name">
                            </div>
                        <div class="col-sm-12 col-md-6 mb-3">
                                <label for="InputFirstName" class="form-label">First Name</label>
                                <input type="FirstName" class="form-control" id="FirstName" placeholder="First Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 mb-3">
                                <label for="InputPoneNumber" class="form-label">Phone Number</label>
                                <input type="PhoneNumber" class="form-control" id="PhoneNumber" placeholder="Phone Number">
                            </div>
                            <div class="col-sm-12 col-md-6 mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ton mail">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleMessage">Message</label>
                            <textarea class="form-control" aria label="With textarea" placeholder="Please write your message"></textarea>
                        </div>
                        <span onclick="SendMessage()" class="btn btn-secondary">Send Message</span>
                      </form>
                </div>
            </div>
        </div>
    </section>

 <?php get_footer();?>