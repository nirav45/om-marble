<div class="footer container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-8 row">
    			@foreach ($addresses as $address)
                <div data-aos="zoom-in" class="col-md-6">
                    <div class="footer-contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="footer-contact-text">
                        <p>{{ $address->address }}</p>
                    </div>
                </div>
                @endforeach
                <div data-aos="zoom-in"class="col-md-12">
                    <form>
                        <div class="email-div form-row align-items-center">
                            <div class="col-md-8">
                                <label class="sr-only" for="inlineFormInput">Name</label>
                                <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Enter your email address">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-light mb-2">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <div data-aos="zoom-in"class="col-md-4">
    			@foreach ($contact as $data)
                <div class="contact-list-1">
                    <h4>Contact Us</h4>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-phone-alt"></i>
                        <h6>{{ $data->phoneNumber }}</h6>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="far fa-envelope"></i>
                        <h6>{{ $data->email }}</h6>
                    </div>
                </div>
                <div class="contact-list-2">
                    <h4>Follow Us on</h4>
                    <div class="d-flex">
                        <a href="{{ ($data->facebook) ? $data->facebook : '' }}"><i class="fab fa-facebook-f"></i></a>
                        
                        <a href="{{ ($data->instagram) ? $data->instagram : '' }}"><i class="fab fab fa-instagram"></i></a>
                        
                        <a href="{{ ($data->twitter) ? $data->twitter : '' }}"><i class="fab fa-twitter"></i></a>
                        
                        <a href="{{ ($data->linkedin) ? $data->linkedin : '' }}"><i class="fab fa-linkedin-in"></i></a>
                        
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>
    <div class="footer-copyright text-center">
        <div class="container">
            <p>© 2020 Om Marble. All Rights Reserved.</p>
        </div>
    </div>
</div>