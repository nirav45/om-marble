<div class="footer container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-1 offset-md-11">
                <a href="{{ route('initFooterData') }}">
                    <button type="button" class="btn btn-primary">
                        Initiate Data
                    </button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 row">
    			@foreach ($addresses as $address)
                <div data-aos="zoom-in" class="col-md-6">
                    <div class="footer-contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="footer-contact-text">
                        <p>{{ $address->address }}</p>
                        <button type="button" class="btn btn-primary change-address" data-toggle="modal" data-target="#editAddressModal" data-id="{{ $address->id }}" data-address="{{ $address->address }}">
                            <i class="fas fa-edit"></i>
                        </button>
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
                        <a href="#" class="change-contact" data-toggle="modal" data-target="#editContactModal" data-id="{{ $data->id }}" data-value="{{ $data->phoneNumber }}" data-contact='phoneNumber'><i class="fas fa-edit"></i></a>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="far fa-envelope"></i>
                        <h6>{{ $data->email }}</h6>
                        <a href="#"> <i class="fas fa-edit" class="change-contact" data-toggle="modal" data-target="#editContactModal" data-id="{{ $data->id }}" data-value="{{ $data->email }}" data-contact="email"></i> </a>
                    </div>
                </div>
                <div class="contact-list-2">
                    <h4>Follow Us on</h4>
                    <div class="d-flex">
                        <a href="{{ ($data->facebook) ? $data->facebook : '' }}"><i class="fab fa-facebook-f"></i></a>
                        <i class="fas fa-edit" class="change-contact" data-toggle="modal" data-target="#editContactModal" data-id="{{ $data->id }}" data-value="{{ $data->facebook }}" data-contact="facebook"></i>
                        <a href="{{ ($data->instagram) ? $data->instagram : '' }}"><i class="fab fab fa-instagram"></i></a>
                        <i class="fas fa-edit" class="change-contact" data-toggle="modal" data-target="#editContactModal" data-id="{{ $data->id }}" data-value="{{ $data->instagram }}" data-contact="instagram"></i>
                        <a href="{{ ($data->twitter) ? $data->twitter : '' }}"><i class="fab fa-twitter"></i></a>
                        <i class="fas fa-edit" class="change-contact" data-toggle="modal" data-target="#editContactModal" data-id="{{ $data->id }}" data-value="{{ $data->twitter }}" data-contact="twitter"></i>
                        <a href="{{ ($data->linkedin) ? $data->linkedin : '' }}"><i class="fab fa-linkedin-in"></i></a>
                        <i class="fas fa-edit" class="change-contact" data-toggle="modal" data-target="#editContactModal" data-id="{{ $data->id }}" data-value="{{ $data->linkedin }}" data-contact="linkedin"></i>
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

<div class="modal fade" id="editAddressModal" tabindex="-1" role="dialog" aria-labelledby="editAddress1ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editAddress1ModalLabel">Change Address</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form role="form" method="post" action="{{ route('editaddress') }}" enctype="multipart/form-data" id="changeAddressForm">
            @csrf
            <div class="modal-body">
                <div class="card-body">
                    <div class="form-group">
                        <input type="hidden" id="addressId" name="id">
                        <label for="address1">Address</label>
                        <textarea class="form-control" id="address1" placeholder="Enter address" name="address">
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editContactModal" tabindex="-1" role="dialog" aria-labelledby="editContactModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editContactModalLabel">Change Contact Detail</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form role="form" method="post" action="{{ route('editcontact') }}" enctype="multipart/form-data" id="changeContactForm">
            @csrf
            <div class="modal-body">
                <div class="card-body">
                    <div class="form-group">
                        <input type="hidden" id="contactId" name="id">
                        <label for="contactValue">Contact detail</label>
                        <input type="text" class="form-control" id="contactValue" placeholder="Enter value" name="contactName">
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

<script type="text/javascript">

    $(document).ready(function(){
        $(document).on('click', '.change-address', function() {
            $('#address1').html($(this).data('address'));
            $('#addressId').val($(this).data('id'));
        });

        $(document).on('click', '.change-contact', function() {
            console.log($(this).data('value'), $(this).data('contact'));
            $('#contactValue').val($(this).data('value'));
            $('#contactValue').attr('name', $(this).data('contact'));
            $('#contactId').val($(this).data('id'));
        });
    });
</script>

