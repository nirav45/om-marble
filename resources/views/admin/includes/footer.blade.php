<div class="footer container-fluid">
    <div class="footer-copyright text-center">
        <div class="d-md-flex justify-content-between align-items-center">
            <div>
                <p>© 2020 Om Marble. All Rights Reserved.</p>
            </div>
            <div class="contact-list-2">
                <div class="d-flex justify-content-center">
                    <a href="{{ ($contact->facebook) ? $contact->facebook : '' }}"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ ($contact->instagram) ? $contact->instagram : '' }}"><i class="fab fab fa-instagram"></i></a>
                    <a href="{{ ($contact->twitter) ? $contact->twitter : '' }}"><i class="fab fa-twitter"></i></a>
                    <a href="{{ ($contact->linkedin) ? $contact->linkedin : '' }}"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contactus-whatsapp">
    <a href="https://wa.me/918000404425?text=%20I%20have%20an%20inquiry!"><i class="fab fa-whatsapp"></i></a>
</div>
<a href="#" id="scroll" style="display: none;"><span></span></a>

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

