<div class="footer container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-1 offset-md-11">
            <button type="button" class="btn btn-primary change-address" data-toggle="modal" data-target="#editfooterDataModal">
                <i class="fas fa-edit"></i>
            </button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 row">
                <div data-aos="zoom-in" class="col-md-6">
                    <div class="footer-contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="footer-contact-text">
                        <p>{{ $contact->address1 }}</p>
                    </div>
                </div>
                <div data-aos="zoom-in" class="col-md-6">
                    <div class="footer-contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="footer-contact-text">
                        <p>{{ $contact->address2 }}</p>
                    </div>
                </div>
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
                <div class="contact-list-1">
                    <h4>Contact Us</h4>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-phone-alt"></i>
                        <h6>{{ $contact->phoneNumber }}</h6>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="far fa-envelope"></i>
                        <h6>{{ $contact->email }}</h6>
                    </div>
                </div>
                <div class="contact-list-2">
                    <h4>Follow Us on</h4>
                    <div class="d-flex">
                        <a href="{{ ($contact->facebook) ? $contact->facebook : '' }}"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{ ($contact->instagram) ? $contact->instagram : '' }}"><i class="fab fab fa-instagram"></i></a>
                        <a href="{{ ($contact->twitter) ? $contact->twitter : '' }}"><i class="fab fa-twitter"></i></a>
                        <a href="{{ ($contact->linkedin) ? $contact->linkedin : '' }}"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="footer-copyright text-center">
        <div class="container">
            <p>© 2020 Om Marble. All Rights Reserved.</p>
        </div>
    </div>
</div>

<div class="modal fade" id="editfooterDataModal" tabindex="-1" role="dialog" aria-labelledby="editAddress1ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editAddress1ModalLabel">Change Footer Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form role="form" method="post" action="{{ route('editfooterdata') }}" enctype="multipart/form-data" id="changeAddressForm">
            @csrf
            <input type="hidden" name="id" value="{{ $contact->id }}">
            <div class="modal-body">
                <div class="card-body">
                    <div class="form-group">
                        <label for="address1">Address 1</label>
                        <textarea class="form-control" id="address1" placeholder="Enter address" name="address1">
                            {{ ($contact->address1) ? $contact->address1 : '' }}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="address1">Address 2</label>
                        <textarea class="form-control" id="address1" placeholder="Enter address" name="address2">
                            {{ ($contact->address2) ? $contact->address2 : '' }}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">Phone No.</label>
                        <input type="text" class="form-control" id="phoneNumber" placeholder="Enter phone number" name="phoneNumber"  value="{{ ($contact->phoneNumber) ? $contact->phoneNumber : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email.</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ ($contact->email) ? $contact->email : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="facebook">Facebook Link.</label>
                        <input type="text" class="form-control" id="facebook" placeholder="Enter Facebook Link" name="facebook" value="{{ ($contact->facebookk) ? $contact->facebook : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="instagram">Instagram Link.</label>
                        <input type="text" class="form-control" id="instagram" placeholder="Enter Instagram Link" name="instagram" value="{{ ($contact->instagram) ? $contact->instagram : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="twitter">Twitter Link.</label>
                        <input type="text" class="form-control" id="twitter" placeholder="Enter Twitter Link" name="twitter" value="{{ ($contact->twitter) ? $contact->twitter : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="linkedin">Linkedin Link.</label>
                        <input type="text" class="form-control" id="linkedin" placeholder="Enter Linkedin Link" name="linkedin" value="{{ ($contact->linkedin) ? $contact->linkedin : '' }}">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
        </div>
    </div>
</div>

