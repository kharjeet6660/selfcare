
    <!--begin contact -->
    <section class="section-dark" id="contact">
        
        <!--begin container-->
        <div class="container">
    
            <!--begin row-->
            <div class="row margin-bottom-50">
            
                <!--begin col-md-10-->
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h2 class="section-title grey">Schedule A Demo</h2>
                    <h3 class="white"></h3>
                    
                    <div class="separator_wrapper_white">
                        <i class="icon icon-star-two grey"></i>
                    </div>
            
                    <p class="section-subtitle grey"><h4 style="color: white;">With Us</h4></p>
                </div>
                <!--end col-md-10-->
            
            </div>
            <!--end row-->
            
            <!--begin row-->
            <div class="row">
        
                <!--begin success message -->
                <p class="contact_success_box" style="display:none;">We received your message and you'll hear from us soon. Thank You!</p>
                <!--end success message -->
                
                <!--begin contact form -->
                <?php echo form_open(base_url('index.php/send')) ?>
                    
                    <!--begin col-md-6-->
                    <div class="col-md-6">
                        <input class="contact-input white-input" required="" name="name" placeholder="Full Name*" type="text">
                        <input class="contact-input white-input" required="" name="subject" placeholder="Subject*" type="text">
                    </div>
                    <!--end col-md-6-->
                    
                    <!--begin col-md-6-->
                    <div class="col-md-6">
                        <input class="contact-input white-input" required="" name="email" placeholder="Email Adress*" type="email">
                        <input class="contact-input white-input" required="" name="phone" placeholder="Phone Number*" type="text">
                    </div>
                    <!--end col-md-6-->
                    
                    <!--begin col-md-6-->
                    <div class="col-md-12">
                        <textarea class="contact-commnent white-input" rows="2" cols="20" name="message" placeholder="Your Message..."></textarea>
                    </div>
                    <!--end col-md-6-->
                    
                    <!--begin col-md-12-->
                    <div class="col-md-12">
                    	<input  id="submit-button" name="send" class="contact-submit" type="submit">
                    </div>
                    <!--end col-md-12-->
                
                <?php echo form_close();?>
                <!--end contact form -->
            
            </div>
            <!--end row-->
            
      </div>
      <!--end container-->
            
    </section>
    <!--end contact-->